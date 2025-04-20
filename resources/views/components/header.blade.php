<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <header class="container mx-auto px-4 py-4 flex items-center justify-between">

        <div class="flex items-center w-full md:w-auto justify-between">
      <h1 class="ml-2 text-3xl font-bold bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent">Art Share</h1>
      <button id="menu-toggle" class="md:hidden text-3xl focus:outline-none">
        <i data-feather="menu"></i>
      </button>
    </div>

        <nav>
            <ul class="flex space-x-6">
                <li><a href="#" class="text-gray-600 hover:text-black transition-colors duration-300 font-medium" style="color: #781c1c;">Accueil</a></li>
                <li><a href="#" class="text-gray-600 hover:text-black transition-colors duration-300 font-medium">Galerie</a></li>
                <li><a href="#" class="text-gray-600 hover:text-black transition-colors duration-300 font-medium">Artistes</a></li>
                <li><a href="#" class="text-gray-600 hover:text-black transition-colors duration-300 font-medium">Collections</a></li>
                <li><a href="#" class="text-gray-600 hover:text-black transition-colors duration-300 font-medium">Contact</a></li>
            </ul>
        </nav>

        <div class="relative gap-2">
            <a href="" class="text-white px-6 py-3 rounded-full bg-gradient-to-tr from-pink-500 to-purple-700">S'inscrire</a>
            <a href="/register" class="px-6 py-3 rounded-full bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent border border-fuchsia-600">S'inscrire</a>
            <a href="" class="px-6 py-3 rounded-full bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent">Se Connecter</a>
            <a href="/login" class=" text-white px-4 py-3 rounded-full bg-gradient-to-tr from-pink-500 to-purple-700 ">Se Connecter</a>
        </div>
    </header>



  