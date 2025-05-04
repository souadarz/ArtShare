<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }

        .mobile-menu.active {
            max-height: 300px;
        }
    </style>
</head>

<body>
    <header class="container mx-auto px-4 py-4">

        <div class="flex items-center justify-between md:hidden">
            <h1 class="text-3xl font-bold bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent">Art Share</h1>
            <button id="menu-toggle" class="focus:outline-none">
                <i data-feather="menu" class="h-6 w-6"></i>
            </button>
        </div>


        <div id="mobile-menu" class="mobile-menu md:hidden w-full">
            <nav class="mt-4">
                <ul class="flex flex-col space-y-3">
                    <li><a href="/" class="block py-2 text-gray-600 hover:text-black" style="color: #781c1c;">Accueil</a></li>
                    <li><a href="{{ route('oeuvre.index') }}" class="block py-2 text-gray-600 hover:text-black">Galerie</a></li>
                    <li><a href="{{ route('artists.index') }}" class="block py-2 text-gray-600 hover:text-black">Artistes</a></li>
                    <li><a href="{{ route('tutoriels.index') }}" class="block py-2 text-gray-600 hover:text-black">Tutoriels</a></li>
                    <li><a href="/notreVision" class="block py-2 text-gray-600 hover:text-black">Notre Vision</a></li>
                </ul>
            </nav>

            <div class="flex flex-col space-y-3 mt-4">
                @guest
                <a href="/register" class="text-center py-3 rounded-full bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent border border-fuchsia-600">S'inscrire</a>
                <a href="/login" class="text-center text-white py-3 rounded-full bg-gradient-to-tr from-pink-500 to-purple-700">Se connecter</a>
                @endguest
                @auth
                    @if(auth()->user()->role === "admin")
                    <a href="{{ route('dashboardAdmin.index') }}" class="text-center py-3 rounded-full bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent border border-fuchsia-600">Dashboard</a>
                    @elseif(auth()->user()->role === "artiste")
                    <a href="{{ route('dashboardArtist') }}" class="text-center py-3 rounded-full bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent border border-fuchsia-600">Dashboard</a>
                    @endif

                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="w-full text-white py-3 rounded-full bg-gradient-to-tr from-pink-500 to-purple-700">Se déconnecter</button>
                </form>
                @endauth
            </div>
            
        </div>

        <div class="hidden md:flex items-center justify-between w-full">
            <div class="flex items-center justify-between w-full">
                <h1 class="text-3xl font-bold bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent md:text-2xl">Art Share</h1>

                <nav class="mx-4 flex-grow">
                    <ul class="flex justify-center space-x-6 md:space-x-3">
                        <li><a href="/" class="text-gray-600 hover:text-black transition-colors duration-300 font-medium" style="color: #781c1c;">Accueil</a></li>
                        <li><a href="{{ route('oeuvre.index') }}" class="text-gray-600 hover:text-black transition-colors duration-300 font-medium">Galerie</a></li>
                        <li><a href="{{ route('artists.index') }}" class="text-gray-600 hover:text-black transition-colors duration-300 font-medium">Artistes</a></li>
                        <li><a href="{{ route('tutoriels.index') }}" class="text-gray-600 hover:text-black transition-colors duration-300 font-medium">Tutoriels</a></li>
                        <li><a href="/notreVision" class="text-gray-600 hover:text-black transition-colors duration-300 font-medium">Notre-Vision</a></li>
                    </ul>
                </nav>

                <div class="flex space-x-3">
                    @guest
                    <a href="/register" class="px-4 py-3 rounded-full bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent border border-fuchsia-600">S'inscrire</a>
                    <a href="/login" class="text-white px-2 py-3 rounded-full bg-gradient-to-tr from-pink-500 to-purple-700">Se Connecter</a>
                    @endguest
                    @auth
                        @if(auth()->user()->role === "admin")
                        <a href="{{ route('dashboardAdmin.index') }}" class="text-center py-3 px-1 rounded-full bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent border border-fuchsia-600">Dashboard</a>
                        @elseif(auth()->user()->role === "artiste")
                        <a href="{{ route('dashboardArtist') }}" class="text-center py-3 px-1 rounded-full bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent border border-fuchsia-600">Dashboard</a>
                        @endif
                    <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="w-full text-white py-3 px-1 rounded-full bg-gradient-to-tr from-pink-500 to-purple-700">Se déconnecter</button>
                </form>
                @endauth
                </div>
            </div>
        </div>
    </header>

    <script>
        feather.replace();

        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
        });
    </script>