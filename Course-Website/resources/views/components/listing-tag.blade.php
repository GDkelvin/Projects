@props(['tagsStr'])

@php
   $listTags = explode(',',$tagsStr);
@endphp


<ul class="flex"> 
    @foreach($listTags as $tag)
    <li
        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
    >
        <a href="/list/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>