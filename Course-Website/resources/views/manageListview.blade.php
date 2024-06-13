@extends('layout')

@section('content')

{{-- <a href="/list" class="inline-block text-black ml-4 mb-4">
    <i class="fa-solid fa-arrow-left"></i> Back
</a> --}}
<div class="mx-4">
    <x-listing-cardbckground class="!p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage Gigs
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @foreach ($listOfInfo as $info)
                <tr class="border-gray-300">
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                        <a href="/list/{{$info->id}}">
                            {{$info->title}}
                        </a>
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                        <a
                            href="/list/{{$info->id}}/edit"
                            class="text-blue-400 px-6 py-2 rounded-xl"
                            ><i
                                class="fa-solid fa-pen-to-square"
                            ></i>
                            Edit</a
                        >
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        {{-- Delete must appear as a form to send a request --}}
                        <form method="POST" action="/list/{{$info->id}}/delete">
                            @csrf 
                            @method('DELETE') 
                            <button class="text-red-500">
                                <i class="fa-solid fa-trash"></i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-listing-cardbckground>
</div>
@endsection