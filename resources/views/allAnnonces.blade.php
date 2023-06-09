@extends('layouts.app')
@section('title', "Toutes annonces")
@section('content')
<div class="mt-4 bg-white w-4/5 mx-auto rounded-lg shadow-md">
    <h1 class="text-3xl font-bold bg-blue-900 rounded-t-lg text-white text-center">Toutes annonces</h1>

    <div class="grid grid-cols-2 gap-4 p-4">
        @foreach ($annonces as $annonce)
            <div class="bg-white px-4 py-2 shadow-md rounded-lg border border-solid flex flex-col justify-between">
                <div>
                    <h2 class="text-2xl text-center font-bold">{{ $annonce->title }}</h2>
                    @if ($annonce->content)
                        <div class="text-xl bg-gray-50 border border-gray-200 rounded-md py-2 px-6">{!! $annonce->content !!}</div>
                    @endif

                    @if ($annonce->image)
                        <div class="mt-4">
                            <img src="{{ asset('storage/annoncesImages/' . $annonce->image) }}" alt="Annonce Image" class="w-full h-64">
                        </div>
                    @endif
                </div>

                <div class="mt-2 px-8 flex justify-between items-center">
                    <div>
                        <p class="text-md text-gray-700"><b>Créée par:</b> {{ $annonce->publication->user->name }}</p>
                        <p class="text-md text-gray-700"><b>Créée le:</b> {{ $annonce->created_at->format('Y-m-d H:i:s') }}</p>
                    </div>
                    <a href="{{ route('annonces.show', $annonce->id) }}" class="no-underline bg-blue-500 hover:bg-blue-600 text-white text-center font-bold py-1 px-2 rounded">
                        <i class="fas fa-eye fa-lg mr-1"></i> Voir
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    
    @if ($annonces->isEmpty())
        <div class="mt-4 bg-blue-100 border border-blue-400 text-center text-blue-900 px-4 py-2 rounded relative" role="alert">
            <span class="block sm:inline">Pas encore d'annonces.</span>
        </div>
    @else
    <div class="my-2 mx-auto px-4 pb-4">
        {{ $annonces->links() }}
    </div>       
    @endif
</div>

@endsection
