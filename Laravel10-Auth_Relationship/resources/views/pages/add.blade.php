@extends('pages.master')

@section('header')
    @include('partial.header')
@endsection

@section('content')

    @include('messages.errorMsg')

    <form action="{{ route('add.data') }}" method="post" >
        {{ csrf_field() }}

        <input type="text" name="name" placeholder="name" /><br>
        <input type="email" name="email" placeholder="email" value="{{ old('email') }}" /><br>

        <input type="submit" value="Submit">

    </form>


@endsection