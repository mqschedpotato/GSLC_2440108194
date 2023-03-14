<?php
    $dataDiri = [
        [
            "nama" => 'Rafi Muhammad',
            "summary" => 'Hello, my name is Rafi Muhammad. I am in my 20s and always eager to learn anything. Adaptive is one word that describes me the most. Currently, I am studying computer science and statistics at Bina Nusantara University. In addition, I am interested in designing UI/UX and back-end engineering.',
            "hobby" => ['Ngoding', 'Main Futsal'],
            "matkul" => ['Web Programming', 'Software Engineering'],
            "gambar" => 'pics/rafi.jpg',
            "umur" => 21,
        ],
        [
            "nama" => 'Umar Siddiq Gege Khoiruddin',
            "summary" => 'Hello, my name is Umar Siddiq Gege Khoiruddin, now I m studying at Bina Nusantara University majoring in computer science and statistics since 2020 ',
            "hobby" => ['Membaca buku'],
            "matkul" => ['Computer network'],
            "gambar" => 'pics/umar.jpg',
            "umur" => 20
        ],
        [
            "nama" => 'Sekar Azalea',
            "summary" => 'Hello, my name is Sekar Azalea. I am in my 20s and always eager to learn anything. Adaptive is one word that describes me the most. Currently, I am studying computer science and statistics at Bina Nusantara University. In addition, I am interested in designing UI/UX and back-end engineering.',
            "hobby" => ['Yoga'],
            "matkul" => ['Human and Computer Interaction'],
            "gambar" => 'pics/sekar.jpg',
            "umur" => 20
        ]
    ];

    $activeData = array();

    foreach ($dataDiri as $value) {
        if ($value['nama'] == $nama) {
            array_push($activeData, $value);
            $activeData[0]['hobby'] = implode(' & ', $activeData[0]['hobby']);
            $activeData[0]['matkul'] = implode(' & ', $activeData[0]['matkul']);
            break;
        }
    }

    $activeData = (object)$activeData;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url(asset('css/profile.css')) }}">
    {{-- CDN Bulma --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Profile</title>
</head>
<body>
    {{-- <h1>{{ $nama }}</h1> --}}
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <div class="navbar-item" href="#">
                {{-- <img class="navbar-logo" src="{{ asset('pics/logo_binus.png') }}" width="100%" height="100%" alt="Binus Logo"> --}}
                <strong>WEB PROG</strong>
            </div>
        </div>

        <div class="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item">
                    <a class="button is-link is-rounded is-hovered is-size-7" href="{{ route('home') }}">
                        Home
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div>
            <img id="picture" src="" alt="">
        </div>
        <div>
            <input id="name" class="input" type="text" value="{{ $nama }}" disabled>
            <input id="summary" type="text" value="">
            <input id="hobby" type="text" value="">
            <input id="matkul" type="text">
        </div>
    </main>
    <footer>
        <div class="has-text-centered">
            <p>
                Copyrights 2023
            </p>
        </div>
    </footer>
</body>
</html>