<x-header />

<div class="bg-gray-100 text-gray-900">
    <div class="max-w-4xl mx-auto px-4 py-8">
        <a href="{{ url()->previous() }}" class="text-purple-600 hover:underline mb-4 inline-block">← Retour</a>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ Storage::url($tutoriel->image) }}" alt="Image du tutoriel" class="w-full h-96 object-cover">
            <div class="p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $tutoriel->title }}</h1>

                <div class="prose max-w-none text-gray-800">
                    {!! $tutoriel->content !!}
                </div>
            </div>
        </div>
    </div>
</div>

<x-footer />
