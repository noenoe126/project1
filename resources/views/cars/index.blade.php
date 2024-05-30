@extends('layouts.app-master')

@section('content')
    <h1>Cars</h1>
    <a class="btn btn-primary" href="{{ route('cars.create') }}">Add Car</a>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            
                                            <th>Make</th>
                                            <th>Model</th>
                                            <th>Year</th>
                                            <th> </th>                          
                                        </tr>
                                    <tbody>
                                        @foreach($cars as $car)
                                            <tr>
                                                
                                                <td>{{ $car->make }}</td>
                                                <td>{{ $car->model }}</td>
                                                <td>{{ $car->year }}</td>
                                                <td><a class="btn btn-primary" href="{{ route('cars.show', $car->id) }}">View</a></td>
                                                <td><a class="btn btn-primary" href="{{ route('cars.edit', $car->id) }}">Edit</a></td>
                                                <td> 
                                                <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-primary" type="submit">Delete</button>
                                                </form> 
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>   
                                    </thead>
                                    <!-- <ul>
                                        @foreach($cars as $car)
                                            <li>{{ $car->make }} {{ $car->model }} ({{ $car->year }})
                                                <a href="{{ route('cars.show', $car->id) }}">View</a>
                                                <a href="{{ route('cars.edit', $car->id) }}">Edit</a>
                                                <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">Delete</button>
                                                </form>
                                            </li>
                                        @endforeach
                                    </ul> -->
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection
