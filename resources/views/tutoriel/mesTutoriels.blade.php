<x-header />

<div class="bg-gray-100 text-gray-900">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-gray-900 text-center mb-8">Tutoriels et Ressources</h1>

        <a href="{{ route('tutoriels.create') }}" class="absolute right-5 px-6 py-3 mb-8 bg-black text-white rounded-full hover:bg-gray-800 transition-colors">
            Ajouter tutoriel</a>

        <section class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Tutoriels</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($tutoriels as $tutoriel)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ Storage::url($tutoriel->image) }}" alt="Tutoriel" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">{{ $tutoriel->title }}</h3>
                        <!-- <p class="text-sm text-gray-600">Apprenez les bases pour débuter en peinture acrylique.</p> -->
                        <div class="flex justify-end space-x-2">
                            <a href="{{ route('tutoriels.edit', $tutoriel) }}" class="px-4 py-2 bg-black text-white rounded-full hover:bg-gray-800 transition-colors">Modifier</a>
                            <form action="{{ route('tutoriels.destroy', $tutoriel) }}" method="POST" class="inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce tutoriel?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-2 rounded-full border border-gray-300 hover:border-purple-600 hover:text-purple-600 transition-colors">supprimer</button>
                            </form>
                        </div>
                        <a href="{{ route('tutoriels.show', $tutoriel) }}" class="text-purple-600 hover:underline">Lire plus</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>

<x-footer />