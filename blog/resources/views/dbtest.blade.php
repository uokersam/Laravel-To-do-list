@extends('layouts.app')

@section('content')
    <div>
        hello from dbtest
    </div>

    <ul>
        @foreach($users as $user)
            <li>
                {{ $user->name }}
            </li>
        @endforeach
    </ul>

    {{ $some }}
@endsection