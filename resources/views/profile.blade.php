@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('main_content')
    {{ $data->nama }}
    {{ $data->summary }}
    <div>
        <img id="picture" src="" alt="">
    </div>
    <div>
        <input id="name" class="input" type="text" value="" disabled>
        <input id="summary" type="text" value="">
        <input id="hobby" type="text" value="{{ $data->hobby }}">
        <input id="matkul" type="text">
    </div>
@endsection
