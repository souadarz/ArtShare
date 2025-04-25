<x-header />

<div class="bg-gray-100 text-gray-900">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-gray-900 text-center mb-8">Tutoriels et Ressources</h1>


        <section class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Tutoriels</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($tutoriels as $tutoriel)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ Storage::url($tutoriel->image) }}" alt="Tutoriel" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">{{ $tutoriel->title }}</h3>
                        <!-- <p class="text-sm text-gray-600">Apprenez les bases pour débuter en peinture acrylique.</p> -->
                        <a href="#" class="text-purple-600 hover:underline">Lire plus</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
    <x-footer />
