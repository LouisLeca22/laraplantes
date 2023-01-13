<x-layout>
<x-card class="p-10  max-w-lg mx-auto mt-24"
                >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Ajouter une plante
                        </h2>
                        <p class="mb-4">Poster une nouvelle plante pour partager avec la communauté</p>
                    </header>

                    <form action="/listings" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label
                                for="family"
                                class="inline-block text-lg mb-2"
                                >Famille</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="family"
                                value="{{old('family')}}"
                            />
                            @error('family')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="name" class="inline-block text-lg mb-2"
                                >Nom de la plante</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="name"
                                placeholder="Example: Senior Laravel Developer"
                                value="{{old('name')}}"

                            />
                            @error('name')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="vernacular"
                                class="inline-block text-lg mb-2"
                                >Nom vernaculaire</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="vernacular"
                                placeholder="Example: Remote, Boston MA, etc"
                                value="{{old('vernacular')}}"

                            />

                            @error('vernacular')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <label for="use" class="inline-block text-lg mb-2"
                                >Utilisation médicinale</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="use"
                                value="{{old('use')}}"

                            />
                            @error('use')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="wikipedia"
                                class="inline-block text-lg mb-2"
                            >
                                Wikipeida
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="wikipedia"
                                value="{{old('wikipedia')}}"

                            />

                            @error('wikipedia')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <label for="tags" class="inline-block text-lg mb-2">
                                Catégories (Séparées par une virgule)
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="tags"
                                placeholder="Example: Laravel, Backend, Postgres, etc"
                                value="{{old('tags')}}"

                            />
                            @error('tags')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <label for="logo" class="inline-block text-lg mb-2">
                                Photo de la plante
                            </label>
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="logo"
                            />
                            @error('logo')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="description"
                                class="inline-block text-lg mb-2"
                            >
                                Description de la plante
                            </label>
                            <textarea
                                class="border border-gray-200 rounded p-2 w-full"
                                name="description"
                                rows="10"
                                placeholder="Include tasks, requirements, salary, etc"
                            >{{old('description')}}</textarea>
                            @error('description')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        </div>

                        <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Ajouter la plante
                            </button>

                            <a href="/" class="text-black ml-4"> Retour </a>
                        </div>
                    </form>
</x-card>
</x-layout>