<x-header />

<style>
    :root {
        --purple-700: #6D28D9;
        --purple-600: #7C3AED;
        --purple-200: #DDD6FE;
        --pink-600: #DB2777;
        --pink-500: #EC4899;
        --pink-50: #FDF2F8;
        --purple-50: #F5F3FF;
    }

    .art-gradient {
        background: linear-gradient(to top right, var(--pink-500), var(--purple-700));
    }

    .bg-art-gradient {
        background: linear-gradient(to top right, var(--pink-500), var(--purple-700));
    }

    .bg-art-gradient-light {
        background: linear-gradient(to top right, var(--pink-50), var(--purple-50));
    }

    .art-quote-bg {
        background: linear-gradient(to top right, var(--pink-50), var(--purple-50));
    }
</style>

<main class="container mx-auto px-4 py-10">
    <section class="mb-12 flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-2/3 text-center md:text-left mb-8 md:mb-0">
            <h2 class="text-4xl font-bold mb-4">Mon Profil</h2>
            <p class="text-lg text-gray-600 mb-6">Personnalisez votre expérience et partagez qui vous êtes avec le monde entier.</p>
            <!-- <button class="bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 transition">
          Modifier mon profil
        </button> -->
        </div>
        <div class="md:w-1/3 flex justify-center">
            <div class="relative w-40 h-40 rounded-full overflow-hidden border-4 border-purple-200">
                <img src="/api/placeholder/400/400" alt="Photo de profil" class="object-cover w-full h-full" />
                <div
                    class="absolute bottom-0 right-0 bg-gradient-to-tr from-pink-500 to-purple-700 rounded-full p-2 text-white">
                </div>
            </div>
        </div>
    </section>
    <!-- selection du role-->
    <!-- <section class="mb-10">
        <div class="flex justify-center">
            <div class="inline-flex bg-white rounded-full shadow-md p-1 border border-gray-100">
                <button id="userRoleBtn"
                    class="flex items-center px-6 py-3 rounded-full bg-art-gradient text-white font-medium transition duration-300">
                    <i data-feather="user" class="mr-2 h-5 w-5"></i>
                    <span>Utilisateur</span>
                </button>
                <button id="artistRoleBtn"
                    class="flex items-center px-6 py-3 rounded-full text-gray-700 font-medium hover:bg-gray-100 transition duration-300">
                    <i data-feather="palette" class="mr-2 h-5 w-5"></i>
                    <span>Artiste</span>
                </button>
            </div>
        </div>
    </section> -->

    <form class="profileForm" action="{{ route('profile.store') }} " method="POST">
        @csrf
        <div class="space-y-8">
            <div class="bg-white shadow-lg rounded-xl p-8 border border-gray-100">
                <h2 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                    <i data-feather="user" class="mr-3 text-purple-600"></i>
                    Informations personnelles
                </h2>
                <!-- info commun entre utilisateur et artiste -->
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nom complet</label>
                        <input type="text" name="name"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition"
                            placeholder="Votre nom" value="{{ $user->name }}">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" name="email"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition"
                            placeholder="votre.email@example.com" value="{{ $user->email }}">
                    </div>
                </div>

            </div>

            <!-- info pour l'artiste -->
            <div id="artistSection" class="hidden space-y-8">

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Biographie</label>
                    <textarea name="biographie" rows="4"
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition"
                        placeholder="Partagez quelques informations sur vous..."></textarea>
                </div>

                <div class="bg-white shadow-lg rounded-xl p-8 border border-gray-100">
                    <h2 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                        <i data-feather="map" class="mr-3 text-pink-600"></i>
                        Parcours artistique
                    </h2>
                    <textarea name="parcoursArtistique" rows="4"
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-600 focus:border-pink-600 transition"
                        placeholder="Décrivez votre parcours en tant qu'artiste..."></textarea>
                </div>

                <div class="bg-white shadow-lg rounded-xl p-8 border border-gray-100">
                    <h2 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                        <i data-feather="feather" class="mr-3 text-purple-600"></i>
                        Style artistique
                    </h2>
                    <textarea name="styleArtistique" rows="4"
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition"
                        placeholder="Décrivez votre style artistique..."></textarea>
                </div>

                <div class="bg-white shadow-lg rounded-xl p-8 border border-gray-100">
                    <h2 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                        <i data-feather="star" class="mr-3 text-pink-600"></i>
                        Inspirations
                    </h2>
                    <textarea name="inspirations" rows="4"
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-600 focus:border-pink-600 transition"
                        placeholder="Qui ou quoi vous inspire dans votre art..."></textarea>
                </div>
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit"
                    class="bg-gradient-to-tr from-pink-500 to-purple-700 text-white px-6 py-3 rounded-full hover:shadow-lg transition flex items-center">
                    <i data-feather="save" class="mr-2 h-5 w-5"></i>
                    Enregistrer mon profil
                </button>
            </div>
        </div>
    </form>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        feather.replace();

        const artistSection = document.getElementById('artistSection');
        const profileForm = document.getElementById('profileForm');

        // Variable PHP injectée en JavaScript
        let userRole = @JSON($user);
        console.log(userRole.role);

        if (userRole.role == 'artiste') {
            // profileForm.classList.remove('hidden');
            artistSection.classList.remove('hidden');

        } else if (userRole.role == 'utilisateur') {
            artistSection.classList.add('hidden');
            profileForm.classList.add('hidden');
        }
    });
</script>
<x-footer />