<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $car = new Car();
        $car->make = $request->make;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->save();

        return redirect()->route('cars.index');
    }

    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.show', compact('car'));
    }

    public function edit($id)
    {
        $car = Car::find($id);
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        $car->make = $request->make;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->save();

        return redirect()->route('cars.index');
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        
        return redirect()->route('cars.index');
    }
}
