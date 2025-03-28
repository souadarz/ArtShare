<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="container mx-auto px-4 py-4 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center">
            <h1 class="text-3xl font-bold bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent">Art Share</h1>
        </div>

        <!-- Navigation Menu -->
        <nav>
            <ul class="flex space-x-6">
                <li><a href="#" class="text-gray-600 hover:text-black transition-colors duration-300 font-medium" style="color: #781c1c;">Accueil</a></li>
                <li><a href="#" class="text-gray-600 hover:text-black transition-colors duration-300 font-medium">Galerie</a></li>
                <li><a href="#" class="text-gray-600 hover:text-black transition-colors duration-300 font-medium">Artistes</a></li>
                <li><a href="#" class="text-gray-600 hover:text-black transition-colors duration-300 font-medium">Collections</a></li>
                <li><a href="#" class="text-gray-600 hover:text-black transition-colors duration-300 font-medium">Contact</a></li>
            </ul>
        </nav>

        <!-- Search Bar -->
        <div class="relative gap-2">
            <!-- <input 
                type="text" 
                placeholder="Rechercher une oeuvre..." 
                class="border border-gray-300 rounded-md px-3 py-2 pl-8 w-64 focus:outline-none focus:ring-2 focus:ring-gray-200"
            />
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-2 top-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg> -->
            <a href="" class="text-white px-6 py-3 rounded-full bg-gradient-to-tr from-pink-500 to-purple-700">S'inscrire</a>
            <a href="" class="text-white px-6 py-3 rounded-full bg-gradient-to-tr from-pink-500 to-purple-700">Se Connecter</a>
        </div>
    </header>