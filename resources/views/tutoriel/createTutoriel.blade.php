<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ajouter un Tutoriel</title>
</head>

<body>
    <div class="m-8 rounded-lg w-[850px] mx-auto">
        <header class="bg-white shadow-md py-6 px-8 flex items-center justify-between">
            <h1 class="text-3xl font-bold bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent">Ajouter un Tutoriel</h1>
            <a href="{{ url()->previous() }}" class="text-sm text-purple-600 hover:underline">← Retour</a>
        </header>

        <main class="mx-auto">
            <section class="mx-auto bg-white p-8 shadow-lg">
                <form action="{{ route('tutoriels.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Titre du tutoriel</label>
                        <input type="text" id="title" name="title" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500">
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700">Contenu du tutorial</label>
                        <textarea id="editor" name="content" rows="8"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500"></textarea>
                    </div>

                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Image illustrative</label>
                        <input type="file" id="image" name="image" accept="image/*" required
                            class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-pink-50 file:text-pink-700 hover:file:bg-pink-100">
                    </div>

                    <!-- <div>
                        <label for="duree" class="block text-sm font-medium text-gray-700">Durée estimée (minutes)</label>
                        <input type="number" id="duree" name="duree" min="1" 
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500">
                    </div> -->

                    <div class="text-center">
                        <button type="submit"
                            class="bg-gradient-to-tr from-pink-500 to-purple-700 text-white px-6 py-3 rounded-full shadow-md hover:shadow-lg transition">Publier le tutoriel</button>
                    </div>
                </form>
            </section>
        </main>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.6.0/tinymce.min.js" referrerpolicy="origin"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        tinymce.init({
            selector: '#editor',
            height: 400,
            menubar: true,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family:Arial,sans-serif; font-size:16px }',
            setup: function(editor) {
                editor.on('init', function() {
                    console.log('TinyMCE initialized successfully');
                });
            }
        });

        document.querySelector('form').addEventListener('submit', function() {
            tinymce.triggerSave();
        });
    });
</script>

</html>