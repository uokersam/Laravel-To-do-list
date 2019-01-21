@extends('layouts.app')

@section('sidebar')
    <hr>
    @parent
    <p>this is appending to parent template</p>
    <hr>
@endsection

@section('title', 'Foo page')

@section('content')
    <hr>
    <p>this is a content section</p>
@endsection