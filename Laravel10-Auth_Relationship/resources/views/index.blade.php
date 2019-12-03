@extends('pages.master')

@section('header')
    <div>
        <a href="{{ route('index') }}"> Home </a> ||
        <a href="{{ route('form.show') }}"> Add Data </a> ||
        <a href="{{ route('user.logout') }}" > Logout(<i style="font-size:small"> {{ $allUserData->name }} </i>) </a>
    </div>
    <hr>
@endsection

@section('content')


    <table border="1px" cellpadding="10px">
        <tr>
            <th> Name </th>
            <th> Email </th>
            <th> Action </th>
        </tr>

   @forelse($allData as $row)

        <tr>
            <td> {{ $row->name }} </td>
            <td> {{ $row->email }} </td>
            <td>
                <a href="{{ route('edit.show',$row->id) }}"> Edit </a> ||
                <a href="{{ route('delete',$row->id) }}"> Delete </a>
            </td>
        </tr>

   @empty

       <tr>
           <td colspan="3" > Data not Found! </td>
       </tr>

   @endforelse
    </table>

@endsection