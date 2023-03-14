@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title', 'Homepage')

@section('main_content')
    <div class="is-flex is-justify-content-space-between is-align-items-center container is-fluid">
        <div class="column is-flex is-flex-direction-column is-align-items-center is-justify-content-start mt-5" style="height: 100%;">
            <img class="member-pic" src="{{ asset('pics/rafi.jpg') }}" alt="">
            <h1 class="is-size-4"><b>Rafi Muhammad</b></h1>
            <div class="about-us">
                <p>Hello, my name is Rafi Muhammad. I am in my 20s and always eager to learn anything that takes my attention. Currently, I am studying computer science and statistics at Bina Nusantara University. In addition, I am interested in Full Stack Web Development & Mobile Development</p>
                <p class="mt-5">Hobby:</p>
                <ul>
                    <li class="ml-4">Dengerin Music</li>
                    <li class="ml-4">Nonton Film</li>
                </ul>
                <p>Matakuliah favorit:</p>
                <ul>
                    <li class="ml-4">Web Programming</li>
                    <li class="ml-4">Software Engineering</li>
                </ul>
            </div>
            <a class="button is-warning is-rounded mt-5 mb-5" type="button" href="{{ route('profile', ['Rafi Muhammad']) }}">Profile</a>
            {{-- <a class="button is-warning is-rounded mt-5 mb-5" href="">Profile</a> --}}
        </div>
        <div class="column is-flex is-flex-direction-column is-align-items-center is-justify-content-start mt-5" style="height: 100%;">
            <img class="member-pic" src="{{ asset('pics/sekar.jpg') }}" alt="">
            <h1 class="is-size-4"><b>Sekar Azalea</b></h1>
            <div class="about-us">
                <p class="summary">Hello, my name is Sekar Azalea. I am in my 20s and always eager to learn anything. Adaptive is one word that describes me the most. Currently, I am studying computer science and statistics at Bina Nusantara University. In addition, I am interested in designing UI/UX and back-end engineering.</p>
                <p class="mt-5">Hobby:</p>
                <ul>
                    <li class="ml-4">Yoga</li>
                </ul>
                <p>Matakuliah favorit:</p>
                <ul>
                    <li class="ml-4">Human and Computer Interaction</li>
                </ul>
            </div>
            <a class="button is-warning is-rounded mt-5 mb-5" type="button" href="{{ route('profile', ['Sekar Azalea']) }}">Profile</a>
            {{-- <a class="button is-warning is-rounded mt-5 mb-5" href="">Profile</a> --}}
        </div>
        <div class="column is-flex is-flex-direction-column is-align-items-center is-justify-content-start mt-5" style="height: 100%;">
            <img class="member-pic" src="{{ asset('pics/umar.jpg') }}" alt="">
            <h1 class="is-size-4"><b>Umar Siddiq</b></h1>
            <div class="about-us">
                <p class="summary">Hello, my name is Umar Siddiq Gege Khoiruddin, now I m studying at Bina Nusantara University majoring in computer science and statistics since 2020</p>
                <p class="mt-5">Hobby:</p>
                <ul>
                    <li class="ml-4">Membaca buku</li>
                </ul>
                <p>Matakuliah favorit:</p>
                <ul>
                    <li class="ml-4">Computer Network</li>
                </ul>
            </div>
            <a class="button is-warning is-rounded mt-5 mb-5" type="button" href="{{ route('profile', ['Umar Siddiq Gege Khoiruddin']) }}">Profile</a>
            {{-- <a class="button is-warning is-rounded mt-5 mb-5" href="">Profile</a> --}}
        </div>
    </div>
@endsection

