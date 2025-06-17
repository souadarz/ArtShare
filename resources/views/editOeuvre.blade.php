<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Modifier une Œuvre</title>
</head>

<body>
    <div class="m-8 rounded-lg w-[850px] mx-auto ">
        <header class="bg-white shadow-md py-6 px-8 flex items-center justify-between">
            <h1 class="text-3xl font-bold bg-gradient-to-tr from-pink-500 to-purple-700 bg-clip-text text-transparent">Modifier l'Œuvre</h1>
            <a href="{{ url()->previous() }}" class="text-sm text-purple-600 hover:underline">← Retour</a>
        </header>

        <main class="mx-auto">
            <section class="mx-auto bg-white p-8 shadow-lg">
                <!-- <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Exprimez votre art</h2> -->
                <form action="{{ route('oeuvre.update', $oeuvre) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Titre de l’œuvre</label>
                        <input type="text" id="title" name="title" required value="{{ $oeuvre->title }}"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500">
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" rows="4" required value="{{ $oeuvre->description }}"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500">{{ $oeuvre->description }}</textarea>
                    </div>

                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700">Catégorie</label>
                        <select id="category_id" name="category_id" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                @if ($category->id == $oeuvre->category_id) selected @endif>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="h-96 flex-shrink-0">
                        <img src="{{Storage::url($oeuvre->image)}}" alt="" class="mt-4 w-full h-full object-cover rounded-lg">
                    </div>
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Image de l’œuvre</label>
                        <input type="file" id="image" name="image" accept="image/*"
                            class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-pink-50 file:text-pink-700 hover:file:bg-pink-100">
                    </div>

                    <div class="text-center">
                        <button type="submit"
                            class="bg-gradient-to-tr from-pink-500 to-purple-700 text-white px-6 py-3 rounded-full shadow-md hover:shadow-lg transition">Modifier l’œuvre</button>
                    </div>
                </form>
            </section>
        </main>
    </div>
</body>

</html>