@extends('welcome')
@section('content')
    <div>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->profiles()->latest()->first()?->name}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection