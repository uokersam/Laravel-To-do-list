@extends('layouts.app')

@section('content')
    <hr>
    <b>To-do list:</b>
    <ul>
        @foreach ($items as $item)
            <li>{{ $item->content }}</li>
        @endforeach
    </ul>

    <form action="{{ action('ToDoListController@create') }}" method="post" accept-charset="UTF-8">
        @csrf
        <input type="text" placeholder="some text" name="textitem">
        <button type="submit">Submit</button>
    </form>

    <form action="{{ action('ToDoListController@delete') }}" method="post">
        @csrf
        <button>Delete last element</button>
    </form>


@endsection