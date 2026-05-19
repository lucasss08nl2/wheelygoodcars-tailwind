<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    private static $cars = [];

    public function sell()
    {
        return view('cars.sell');
    }

    public function dashboard()
    {
        $cars = session()->get('cars', []);

        return view('cars.dashboard', compact('cars'));
    }

    public function store(Request $request)
    {
        $cars = session()->get('cars', []);

        $cars[] = [
            'id' => uniqid(),
            'license_plate' => $request->license_plate,
            'brand' => $request->brand,
            'model' => $request->model,
            'price' => $request->price,
        ];

        session()->put('cars', $cars);

        return redirect('/dashboard');
    }

    public function destroy($id)
    {
        $cars = session()->get('cars', []);

        $cars = array_filter($cars, function ($car) use ($id) {
            return $car['id'] !== $id;
        });

        session()->put('cars', $cars);

        return redirect('/dashboard');
    }
}