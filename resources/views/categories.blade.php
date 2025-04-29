<x-header />
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
    <section class="py-12 antialiased">
        <div class="mx-auto max-w-7xl px-4 2xl:px-0">

            <div class="mb-8 flex items-center justify-between">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Gestion des Catégories</h2>
                <button id="add_categorie_button" class="bg-purple-600 hover:bg-purple-700 text-white px-5 py-3 rounded-full transition cursur-pointer">
                    + Ajouter Catégorie
                </button>

            </div>

            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach($categories as $category)
                <div class="category_box flex flex-col justify-between rounded-xl border border-gray-200 bg-white p-6 shadow hover:shadow-md transition" data-category-id="{{ $category->id }}">
                    <div class="flex justify-between items-start mb-6">
                        <button class="text-sm text-purple-500 hover:underline edit_category_button"
                            data-id="{{ $category->id }}"
                            data-name="{{ $category->name }}">Modifier</button>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm text-pink-500 hover:underline">Supprimer</button>
                        </form>
                    </div>

                    <h3 class="text-xl font-semibold text-gray-900 break-words">
                        {{ $category->name }}
                    </h3>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>

<div id="category_modal" class="fixed inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center hidden">
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

<script>
    const title = document.getElementById('modal_title');
    const form = document.getElementById('category_form');
    const nameInput = document.getElementById('category_name');
    const idInput = document.getElementById('category_id');

    function openModal(mode = 'create', category = null) {
        document.getElementById('category_modal').classList.remove('hidden');

        if (mode === 'edit' && category) {
            title.innerText = 'Modifier la Catégorie';
            nameInput.value = category.name;
            idInput.value = category.id;
            form.action = `categories/update/${category.id}`;
        } else {
            title.innerText = 'Ajouter une Catégorie';
            nameInput.value = '';
            idInput.value = '';
            form.action = `/categories/store`;
        }
    }

    document.querySelectorAll('.edit_category_button').forEach(button => {
        button.addEventListener('click', () => {
            const category = {
                id: button.dataset.id,
                name: button.dataset.name
            };
            openModal('edit', category);
        });
    });

    function closeModal() {
        document.getElementById('category_modal').classList.add('hidden');
    }

    document.getElementById('add_categorie_button').addEventListener('click', () => openModal());
</script>
<x-footer />