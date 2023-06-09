@extends('layouts.app')
@section('title', "Liste des utilisateurs")
@section('content')

    
<div class="my-2 pb-8 bg-white mx-auto rounded-lg shadow-md">
    <h1 class="text-2xl font-bold bg-green-500 rounded-t-lg text-white text-center">Responsables</h1>
            <div class="grid grid-cols-3 gap-4 p-2">
            @foreach ($responsables as $user)
                <div class="bg-white rounded-lg shadow-md px-4 py-2 border border-solid">
                    <h3 class="text-center font-sans">{{ $user->name }}</h3>
                    <hr>
                    <div class="flex flex-row gap-2 justify-between">
                        <div>
                            <p class="font-semibold">Email:</p>
                            <p class="font-semibold">CIN:</p>
                            <p class="font-semibold">Rôle:</p>
                            <p class="font-semibold">Autoriser:</p>
                        </div>
                        <div>
                            <p class="font-medium">{{ $user->email }}</p>
                            <p class="font-medium">{{ $user->CIN }}</p>
                            <p class="font-medium">{{ $user->role }}</p>
                            @if ($user->authorized)
                                <p class="font-medium"><span class="bg-green-500 font-semibold text-white px-2 rounded-lg">Oui</span></p>
                            @else
                                <p class="font-medium"><span class="bg-red-500 font-semibold text-white px-2 rounded-lg">Non</span></p>
                            @endif
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="{{ route('userProfile', ['id' => $user->id]) }}"
                           class="no-underline bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded"><i
                                class="fas fa-user fa-lg mr-1"></i>Voir Profile</a>
                    </div>
                </div>
            @endforeach
        </div>
</div>
<div class="my-4 pb-8 bg-white mx-auto rounded-lg shadow-md">
    <h1 class="text-2xl font-bold bg-blue-500 rounded-t-lg text-white text-center">Admins</h1>
            <div class="grid grid-cols-3 gap-4 p-2">
            @foreach ($admins as $user)
                <div class="bg-white rounded-lg shadow-md px-4 py-2 border border-solid">
                    <h3 class="text-center font-sans">{{ $user->name }}</h3>
                    <hr>
                    <div class="flex flex-row gap-2 justify-between">
                        <div>
                            <p class="font-semibold">Email:</p>
                            <p class="font-semibold">CIN:</p>
                            <p class="font-semibold">Rôle:</p>
                            <p class="font-semibold">Autoriser:</p>
                        </div>
                        <div>
                            <p class="font-medium">{{ $user->email }}</p>
                            <p class="font-medium">{{ $user->CIN }}</p>
                            <p class="font-medium">{{ $user->role }}</p>
                            @if ($user->authorized)
                                <p class="font-medium"><span class="bg-green-500 font-semibold text-white px-2 rounded-lg">Oui</span></p>
                            @else
                                <p class="font-medium"><span class="bg-red-500 font-semibold text-white px-2 rounded-lg">Non</span></p>
                            @endif
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="{{ route('userProfile', ['id' => $user->id]) }}"
                           class="no-underline bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded"><i
                                class="fas fa-user fa-lg mr-1"></i>Voir Profile</a>
                    </div>
                </div>
            @endforeach
        </div>
</div>
<div class="my-4 pb-8 bg-white mx-auto rounded-lg shadow-md">
    <h1 class="text-2xl font-bold bg-gray-500 rounded-t-lg text-white text-center">Membres</h1>
            <div class="grid grid-cols-3 gap-4 p-2">
            @foreach ($membres as $user)
                <div class="bg-white rounded-lg shadow-md px-4 py-2 border border-solid">
                    <h3 class="text-center font-sans">{{ $user->name }}</h3>
                    <hr>
                    <div class="flex flex-row gap-2 justify-between">
                        <div>
                            <p class="font-semibold">Email:</p>
                            <p class="font-semibold">CIN:</p>
                            <p class="font-semibold">Rôle:</p>
                            <p class="font-semibold">Autoriser:</p>
                        </div>
                        <div>
                            <p class="font-medium">{{ $user->email }}</p>
                            <p class="font-medium">{{ $user->CIN }}</p>
                            <p class="font-medium">{{ $user->role }}</p>
                            @if ($user->authorized)
                                <p class="font-medium"><span class="bg-green-500 font-semibold text-white px-2 rounded-lg">Oui</span></p>
                            @else
                                <p class="font-medium"><span class="bg-red-500 font-semibold text-white px-2 rounded-lg">Non</span></p>
                            @endif
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="{{ route('userProfile', ['id' => $user->id]) }}"
                           class="no-underline bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded"><i class="fas fa-user fa-lg mr-1"></i>Voir Profile</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
    
