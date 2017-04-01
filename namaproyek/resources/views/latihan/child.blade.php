@extends('layouts.app')

@section('title', 'Page Title')

@section ('layout')

@section('header')
<div class="container" >
<h1>Belajar pemprograman Framework Laravel</h1></div>
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection