@extends('welcome')
@section('content')
    <div class="m-3">
        <table class="table w-full text-left">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Profile</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->profiles()->latest()->first()?->name}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
