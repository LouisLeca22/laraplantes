@props(['listing'])
<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('/images/image-null.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->name}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->family}}</div>
            <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="text-lg mt-4">
                 {{$listing->vernacular}}
            </div>
        </div>
    </div>
</x-card>