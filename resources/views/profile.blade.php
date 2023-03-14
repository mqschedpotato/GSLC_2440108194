@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection
@section('title', 'Profile')

@section('main_content')
<div class="is-flex is-justify-content-center my-6 content-wrapper" style="width: 100%">
    <div class="is-flex is-align-items-start mr-6 img-wrapper">
        <figure class="image is-128x128">
            <img id="picture" class="is-rounded" style="border-radius: 2rem" src="{{ asset($data->gambar) }}" alt="">
        </figure>
    </div>
    <div>
        <div class="mb-2">
            <b><label for="">Nama</label></b>
            <input id="name" class="input" type="text" value="{{ $data->nama }}" disabled>
        </div>
        <div class="mb-2">
            <b><label for="">Summary</label></b>
            <textarea class="textarea" cols="70" disabled>{{ $data->summary }}</textarea>
        </div>
        <div class="mb-2">
            <b><label for="">Umur</label></b>
            <input id="umur" class="input" type="text" value="{{ $data->umur }}" disabled>
        </div>
        <div class="mb-2">
            <b><label for="">Hobby</label></b>
            {{-- {{ gettype($data->hobby) }} --}}
            {{-- {{ count($data->hobby) }} --}}
            @if($data->hobby != null && is_array($data->hobby))
                <ul>
                    @foreach($data->hobby as $value)
                        <li>
                            {{ $value }}
                        </li>
                    @endforeach
                </ul>
            @else
                @if($data->hobby != null)
                    {{ $data->hobby }}
                @else
                    {{ 'Tidak ada hobby' }}
                @endif
            @endif
        </div>
        <div>
            <b><label for="">Mata Kuliah Favorit</label></b>
            @if($data->matkul != null && is_array($data->matkul))
                <ul>
                    @foreach($data->matkul as $value)
                        <li>
                            {{ $value }}
                        </li>
                    @endforeach
                </ul>
            @else
                @if($data->matkul != null)
                    {{ $data->matkul }}
                @else
                    {{ 'Tidak ada matkul favorit' }}
                @endif
            @endif
        </div>
    </div>
</div>
@endsection
