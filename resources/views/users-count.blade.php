@php use App\Models\User; @endphp
@extends('welcome')
@section('content')
    <div>
        <table>
            <tr>
                <th>Count</th>
            </tr>
            <tr>
                <td>{{User::all()->count()}}</td>
            </tr>
        </table>
    </div>
@endsection