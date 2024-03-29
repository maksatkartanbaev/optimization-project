@extends('welcome')
@section('content')
    <div class="m-3">
        <table class="table w-full text-left">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Profile</th>
                <th>Active</th>
                <th>Date</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->profiles()->latest()->first()?->name}}</td>
{{--                    <td>{{$user->lastProfile?->name}}</td>--}}
                    <td>{{$user->active}}</td>
                    <td>{{$user->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
