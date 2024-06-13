@props(['info'])

<x-listing-cardbckground>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            {{-- Picture --}}
            src="{{$info->logo? asset('storage/' . $info->logo):asset('images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/list/{{$info->id}}">{{$info->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$info->company}}</div>
            {{-- Listing Tag --}}
            <x-listing-tag :tagsStr="$info->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$info->location}}
            </div>
        </div>
    </div>
</x-listing-cardbckground>