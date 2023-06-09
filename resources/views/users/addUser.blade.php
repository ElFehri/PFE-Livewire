@extends('layouts.app')
@section('title', "Nouveau utilisateur")
@section('content')
    <div class="bg-white mt-2 rounded-lg w-3/4 mx-auto">
        <h2 class="text-2xl text-center text-white bg-blue-900 rounded-t-lg font-bold my-2 p-2">Ajouter utilisateur</h2>
        {{-- affichage des messages --}}
        <div class="text-center">
            @if (session('message'))
                <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded relative session-alert" role="alert">
                    <span class="block sm:inline">{{ session('message') }}</span>
                </div>
            @endif
            @if (session('error'))
                <div class="mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative session-alert" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif
        </div>
        <div class="px-16 py-2">
            <form action="{{ route('storeUser') }}" method="POST" class="">
                @csrf
                <div class="my-4">
                    <label for="name" class="block font-bold mb-2 text-lg">Nom & prenom</label>
                    <input type="text" name="name" placeholder="Nom & Prenom" value="{{old('name')}}" required class="form-control">
                </div>
                <div class="mb-4">
                    <label for="email" class="block font-bold mb-2 text-lg">Email</label>
                    <input type="email" name="email" placeholder="exemple123@gmail.com" value="{{old('email')}}" required class="form-control">
                    @error('email')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="CIN" class="block font-bold mb-2 text-lg">CIN</label>
                    <input type="text" name="CIN" placeholder="CIN" value="{{old('CIN')}}" required class="form-control">
                    @error('CIN')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-10">
                    <label for="role" class="block font-bold mb-2 text-lg">Role</label>
                    <select name="role" class="form-control" required>
                        <option value="">--role--</option>
                        <option value="Member">Membre</option>
                        <option value="Admin">Admin</option>
                        <option value="Responsable">Responsable</option>
                    </select>
                </div>
                <div class="flex flex-row justify-between mb-2">
                    <a href="{{route('home')}}" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white font-bold rounded-md no-underline">
                        Retourner
                    </a>
                    <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-md">Creer</button>
                </div>
            </form>
        </div>
    </div>
<script src="{{asset('/js/messageTimeSet.js')}}"></script>

@endsection
