<x-layout>
    <x-card class="p-10  max-w-lg mx-auto mt-24"
                    >
                        <header class="text-center">
                            <h2 class="text-2xl font-bold uppercase mb-1">
                                Modifier la plante
                            </h2>
                            <p class="mb-4">Modifier : {{$listing->title}}</p>
                        </header>
    
                        <form action="/listings/{{$listing->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
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
                                    value="{{$listing->family}}"
                                />
                                @error('family')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
    
                            <div class="mb-6">
                                <label for="name" class="inline-block text-lg mb-2"
                                    >Nom</label
                                >
                                <input
                                    type="text"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="name"
                                    placeholder="Example: Senior Laravel Developer"
                                    value="{{$listing->name}}"
    
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
                                    value="{{$listing->vernacular}}"
    
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
                                    value="{{$listing->use}}"
    
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
                                    value="{{$listing->wikipedia}}"
    
                                />
    
                                @error('wikipedia')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
    
                            <div class="mb-6">
                                <label for="tags" class="inline-block text-lg mb-2">
                                    Catégories (Sépaées par des virgules)
                                </label>
                                <input
                                    type="text"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="tags"
                                    placeholder="Example: Laravel, Backend, Postgres, etc"
                                    value="{{$listing->tags}}"
    
                                />
                                @error('tags')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
    
                            <div class="mb-6">
                                <label for="logo" class="inline-block text-lg mb-2">
                                    Image de la plante
                                </label>
                                <input
                                    type="file"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="logo"
                                />
                                <img
                                class="w-48 mr-6 mb-6"
                                src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('/images/no-image.png')}}"
                                alt=""
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
                                  Description
                                </label>
                                <textarea
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="description"
                                    rows="10"
                                    placeholder="Include tasks, requirements, salary, etc"
                                >{{$listing->description}}</textarea>
                                @error('description')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
    
                            <div class="mb-6">
                                <button
                                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                                >
                                   Modifier
                                </button>
    
                                <a href="/" class="text-black ml-4"> Retour </a>
                            </div>
                        </form>
    </x-card>
    </x-layout>