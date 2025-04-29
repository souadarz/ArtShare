<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ajouter un utilisateur</title>
</head>

<body>
    <div class="m-8 rounded-lg w-[850px] mx-auto">
        <header class="bg-white shadow-md py-6 px-8 flex items-center justify-between">
            <h1 class="text-3xl font-bold bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent">Ajouter un utilisateur</h1>
            <a href="/dashboardAdamin" class="text-sm text-purple-600 hover:underline">Retour au Dashboard</a>
        </header>

        <main class="mx-auto">
            <section class="mx-auto bg-white p-8 shadow-lg">
                <!-- <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Exprimez votre art</h2> -->
                <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nom complet de l'utilisateur</label>
                        <input type="text" id="name" name="name" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500">
                    </div>

                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700">Role</label>
                        <select id="role" name="role" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500">
                            <option value="">Choisir un role</option>
                            <option value="artiste">Artiste</option>
                            <option value="utilisateur">Utilisateur</option>
                        </select>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email de l'utilisateur</label>
                        <input type="email" id="email" name="email" rows="4" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Mot de pass</label>
                        <input type="password" id="password" name="password" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500">
                    </div>

                    <div class="text-center">
                        <button type="submit"
                            class="bg-gradient-to-tr from-pink-500 to-purple-700 text-white px-6 py-3 rounded-full shadow-md hover:shadow-lg transition">Ajouter</button>
                    </div>
                </form>
            </section>
        </main>
    </div>
</body>

</html>