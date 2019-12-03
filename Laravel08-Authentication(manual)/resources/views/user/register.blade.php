@extends('pages.master')

@section('header')
    <div>
        <a href="{{ route('user.login.show') }}"> Login </a> ||
        <a href="{{ route('user.register.show') }}" > Register </a>
    </div>
    <hr>
@endsection

@section('content')

    @include('messages.errorMsg')

    @if(session('msg'))
        {{ session('msg') }}
    @endif

    <form action="{{ route('user.register') }}" method="post" >
        {{ csrf_field() }}

        <input type="text" name="name" placeholder="name" value="{{ old('name') }}"/><br>
        <input type="email" name="email" placeholder="email" value="{{ old('email') }}"/><br>
        <input type="password" name="password" placeholder="password"/><br>
        <input type="password" name="password_confirmation" placeholder="confirm password"/><br>

        <input type="submit" value="Register">

    </form>


@endsection