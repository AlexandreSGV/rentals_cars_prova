<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::orderBy('brand')->orderBy('model')->get();
        return response()->json($cars);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'model' => ['required', 'string', 'max:255'],
            'brand' => ['required', 'string', 'max:255'],
            'plate' => ['required', 'string', 'max:20', 'unique:cars,plate'],
            'year'  => ['required', 'integer', 'min:1900', 'max:2100'],
        ]);

        $car = Car::create($data);

        return response()->json($car, 201);
    }

    public function show(Car $car)
    {
        return response()->json($car);
    }

    public function update(Request $request, Car $car)
    {
        $data = $request->validate([
            'model' => ['required', 'string', 'max:255'],
            'brand' => ['required', 'string', 'max:255'],
            'plate' => ['required', 'string', 'max:20', 'unique:cars,plate,' . $car->id],
            'year'  => ['required', 'integer', 'min:1900', 'max:2100'],
        ]);

        $car->update($data);

        return response()->json($car);
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return response()->json(null, 204);
    }
}
