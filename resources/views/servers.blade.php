@extends('welcome')
@section('content')
    <div class="m-3">
        <table class="table w-full text-left">
            <tr>
                <th>Name</th>
                <th>Last Activity</th>
            </tr>
            @foreach($servers as $server)
                <tr>
                    <td>{{$server->name}}</td>
                    <td>
{{--                        {{ $server->logs()->latest()->first()->created_at->diffForHumans() }}--}}

{{--                        {{ $server->logs->sortByDesc('created_at')->first()->created_at->diffForHumans() }}--}}

                        {{$server->last_activity->diffForHumans()}}

{{--                        {{$server->latestLog->created_at->diffForHumans()}}--}}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
