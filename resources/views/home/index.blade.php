@extends('layouts.frontbase')

@section('title', 'Title From sub file')

@section('sidebar')
    @parent

    <p>This is appended from sub file.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
