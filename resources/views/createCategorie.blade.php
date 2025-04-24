<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div id="category_modal" class="fixed inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white w-full max-w-md p-8 rounded-2xl shadow-2xl relative">
            <h2 class="text-3xl font-bold text-center bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent mb-8"
                id="modal_title">
                Ajouter une Catégorie
            </h2>

            <form action="{{ route('categories.store') }}" method="POST" id="category_form" class="space-y-6">
                @csrf
                <input type="hidden" name="id" id="category_id">

                <div>
                    <label for="category_name" class="block text-sm font-medium text-gray-700">Nom de la catégorie</label>
                    <input type="text" name="name" id="category_name" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500">
                </div>

                <div class="flex justify-end gap-4">
                    <button type="button" onclick="closeModal()"
                        class="px-4 py-2 text-sm text-gray-600 bg-gray-100 rounded-full hover:bg-gray-200 transition">
                        Annuler
                    </button>
                    <button type="submit"
                        class="bg-gradient-to-tr from-pink-500 to-purple-700 text-white px-6 py-2 rounded-full shadow-md hover:shadow-lg transition">
                        Enregistrer
                    </button>
                </div>
            </form>

            <button onclick="closeModal()"
                class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 text-xl font-bold">&times;</button>
        </div>
    </div>

</body>

<script>
    function openModal(mode = 'create', category = null) {
        const modal = document.getElementById('category_modal');
        modal.classList.remove('hidden');

        const title = document.getElementById('modal_title');
        const form = document.getElementById('category_form');
        const nameInput = document.getElementById('category_name');
        const idInput = document.getElementById('category_id');

        if (mode === 'edit' && category) {
            title.innerText = 'Modifier la Catégorie';
            nameInput.value = category.name;
            idInput.value = category.id;
            form.action = `/admin/categories/update/${category.id}`;
        } else {
            title.innerText = 'Ajouter une Catégorie';
            nameInput.value = '';
            idInput.value = '';
            form.action = `/admin/categories/store`;
        }
    }

    function closeModal() {
        document.getElementById('category_modal').classList.add('hidden');
    }

    document.getElementById('add_categorie_button').addEventListener('click', () => openModal());
</script>

</html>