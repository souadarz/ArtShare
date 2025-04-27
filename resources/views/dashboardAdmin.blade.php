<x-header></x-header>
<div class="container mx-auto px-4 py-10">
    <section class="mb-12 flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-2/3 text-center md:text-left mb-8 md:mb-0">
            <h2 class="text-4xl font-bold mb-4">Dashboard Admin</h2>
            <p class="text-lg text-gray-600 mb-6">Gérez les utilisateurs, les catégories et surveillez l'activité de la plateforme.</p>
            <a href="#" class="bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 transition">Modifier mon profil</a>
        </div>
        <div class="md:w-1/3 flex justify-center">
            <div class="relative w-40 h-40 rounded-full overflow-hidden border-4 border-purple-200">
                <img src="" alt="Photo de profil" class="object-cover w-full h-full" />
                <div class="absolute bottom-0 right-0 bg-gradient-to-tr from-pink-500 to-purple-700 rounded-full p-2 text-white">
                </div>
            </div>
        </div>
    </section>

       <!-- statistiques -->
    <section class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
        <div class="bg-white shadow-lg rounded-xl p-6 text-center border border-gray-100 hover:shadow-xl transition">
            <h3 class="text-2xl font-semibold text-purple-700">12</h3>
            <p class="text-gray-500 mt-2">Nombres d'utilisateurs</p>
        </div>
        <div class="bg-white shadow-lg rounded-xl p-6 text-center border border-gray-100 hover:shadow-xl transition">
            <h3 class="text-2xl font-semibold text-pink-600">230</h3>
            <p class="text-gray-500 mt-2">Nonmbres d'attistes</p>
        </div>
        <div class="bg-white shadow-lg rounded-xl p-6 text-center border border-gray-100 hover:shadow-xl transition">
            <h3 class="text-2xl font-semibold text-purple-600">8</h3>
            <p class="text-gray-500 mt-2">Œuvres publiées</p>
        </div>
        <div class="bg-white shadow-lg rounded-xl p-6 text-center border border-gray-100 hover:shadow-xl transition">
            <h3 class="text-2xl font-semibold text-pink-600">4</h3>
            <p class="text-gray-500 mt-2">Catégories</p>
        </div>
    </section>

    <section class="mb-12">
        <h3 class="text-2xl font-bold mb-6">Actions Rapides</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="#"
                class="bg-gradient-to-tr from-pink-500 to-purple-700 text-white text-center py-8 px-4 rounded-lg shadow-lg hover:shadow-xl transition group">
                <div class="text-4xl mb-2">👤</div>
                <h4 class="text-xl font-semibold mb-2">Ajouter un utilisateur</h4>
                <p class="text-sm opacity-80">Créer un nouveau compte utilisateur</p>
            </a>
            <a href="#"
                class="bg-white text-purple-700 border border-purple-200 text-center py-8 px-4 rounded-lg shadow hover:shadow-xl transition group">
                <div class="text-4xl mb-2">🗂️</div>
                <h4 class="text-xl font-semibold mb-2">Gérer les catégories</h4>
                <p class="text-sm text-gray-600">Ajouter, modifier ou supprimer des catégories</p>
            </a>
            <a href="#"
                class="bg-white text-pink-600 border border-pink-200 text-center py-8 px-4 rounded-lg shadow hover:shadow-xl transition group">
                <div class="text-4xl mb-2"></div>
                <h4 class="text-xl font-semibold mb-2">Voir les commentaires</h4>
                <p class="text-sm text-gray-600">Supprimer un commentaire</p>
            </a>
        </div>
    </section>
    
    <section class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-bold">Gestion des Utilisateurs</h3>
        </div>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Utilisateur</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Œuvres</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date d'inscription</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody >
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Nom d'utilisateur</div>
                                        <div class="text-sm text-gray-500">email.utilisateur@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-700">Artiste</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">25</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">27/04/2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                               
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>