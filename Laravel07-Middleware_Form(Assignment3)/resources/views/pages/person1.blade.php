@extends('pages.master')

@section('content')


    <div class="card-body">
        <h1 class="text-center"> User: 1 </h1>

        <form action="{{ url('/person1/data') }}" method="POST" class="bg-light custom_form">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" name="age" class="form-control" id="age">
            </div>



            <div class="form-group">
                <button type="submit"  class="btn btn-success">Show Data</button>
            </div>

        </form>

    </div>

@endsection