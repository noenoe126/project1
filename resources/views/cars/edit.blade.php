@extends('layouts.app-master')

@section('content')
    <h1>Edit Car</h1>
    <form action="{{ route('cars.update', $car->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="make">Make:</label>
        <input type="text" name="make" id="make" value="{{ $car->make }}">
        <label for="model">Model:</label>
        <input type="text" name="model" id="model" value="{{ $car->model }}">
        <label for="year">Year:</label>
        <input type="text" name="year" id="year" value="{{ $car->year }}">
        <button type="submit">Update</button>
    </form>
@endsection
