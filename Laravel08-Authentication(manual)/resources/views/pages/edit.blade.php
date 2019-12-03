@extends('pages.master')

@section('header')
    @include('partial.header')
@endsection

@section('content')

    @include('messages.errorMsg')

    <form action="{{ route('update.data',$row->id) }}" method="post" >
        {{ csrf_field() }}

        <input type="text" name="name" placeholder="name" value="{{ $row->name }}" /><br>
        <input type="email" name="email" placeholder="email" value="{{ $row->email }}" /><br>

        <input type="submit" value="Update">

    </form>


@endsection