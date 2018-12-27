@extends('layouts.app')

@section('content')
    <div>
        hello from dbtest
    </div>


    <h4>users list</h4>
    <ul>
        @foreach($users as $user)
            <li>
                {{ $user->name }}
            </li>
        @endforeach
    </ul>
@endsection