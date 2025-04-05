<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Ajouter une Œuvre</title>
</head>

<body>
    <div class="m-8 rounded-lg">
        <header class="bg-white shadow-md py-6 px-8 flex items-center justify-between">
            <h1 class="text-3xl font-bold bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent">Ajouter une Œuvre</h1>
            <a href="/dashboardArtist" class="text-sm text-purple-600 hover:underline">Retour au Dashboard</a>
        </header>

        <main class="mx-auto">
            <section class="mx-auto bg-white p-8 shadow-lg">
                <!-- <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Exprimez votre art</h2> -->
                <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">

                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Titre de l’œuvre</label>
                        <input type="text" id="title" name="title" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500">
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" rows="4" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500"></textarea>
                    </div>

                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700">Catégorie</label>
                        <select id="category" name="category" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500">
                            <option value="">Choisir une catégorie</option>
                            <option value="abstrait">Art Abstrait</option>
                            <option value="sculpture">Sculpture</option>
                            <option value="photographie">Photographie</option>
                            <option value="numerique">Art Numérique</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Image de l’œuvre</label>
                        <input type="file" id="image" name="image" accept="image/*" required
                            class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-pink-50 file:text-pink-700 hover:file:bg-pink-100">
                    </div>

                    <div class="text-center">
                        <button type="submit"
                            class="bg-gradient-to-tr from-pink-500 to-purple-700 text-white px-6 py-3 rounded-full shadow-md hover:shadow-lg transition">Publier l’œuvre</button>
                    </div>

                </form>
            </section>
        </main>
    </div>
</body>

</html>