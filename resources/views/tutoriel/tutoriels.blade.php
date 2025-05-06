<x-header />
<div>
    <img src="{{ asset('images/64830b5a5c8be68a087b12df_content-jobs-1.jpg') }}" alt="" class="w-full h-80 object-cover rounded-lg shadow-lg">
</div>

<div class="bg-gray-100 text-gray-900">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-gray-900 text-center mb-8">Tutoriels et Ressources</h1>
        <p class="text-xl text-gray-900 max-w-2xl text-center">Développez vos compétences et explorez nos ressources spécialement sélectionnées pour vous.</p>


        <section class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Tutoriels</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($tutoriels as $tutoriel)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ Storage::url($tutoriel->image) }}" alt="Tutoriel" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">{{ $tutoriel->title }}</h3>
                        <a href="{{ route('tutoriels.show', $tutoriel) }}" class="text-purple-600 hover:underline mt-2">Lire plus</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
    <x-footer />
