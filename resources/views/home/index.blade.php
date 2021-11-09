@extends('layouts.app')

@section('title', 'Home page')

@section('content')
    <h1>{{ $title ?? 'Keine'}}</h1>
@endsection

