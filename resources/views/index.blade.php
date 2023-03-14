<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url(asset('css/style.css')) }}">
    {{-- CDN Bulma --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Home</title>
</head>
<body>
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
                    <a class="button is-link is-rounded is-hovered is-size-7">
                        Bingung naro apa di navbarnya
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <main class="is-flex container is-fluid" style="color: white;">
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
                <button class="button is-warning is-rounded mt-5 mb-5" type="button" onclick="window.location='{{ route('profile', ['Rafi Muhammad']) }}'">Profile</button>
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
                <button class="button is-warning is-rounded mt-5 mb-5" type="button" onclick="window.location='{{ route('profile', ['Sekar Azalea']) }}'">Profile</button>
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
                <button class="button is-warning is-rounded mt-5 mb-5" type="button" onclick="window.location='{{ route('profile', ['Umar Siddiq Gege Khoiruddin']) }}'">Profile</button>
                {{-- <a class="button is-warning is-rounded mt-5 mb-5" href="">Profile</a> --}}
            </div>
        </div>
    </main>
    <footer>
        <div class="has-text-centered">
            <p>
                Copyrights 2023
            </p>
        </div>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>