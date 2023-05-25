@extends('users.notifications')

@section('information')

    <div class="mt-8 bg-white pb-4 rounded-lg">
        <h3 class="text-lg font-bold mb-4 bg-green-900 text-white rounded-t-lg px-4 py-2">Informations validées</h3>
        <div class="m-2">
            @forelse ($validated as $info)
                <div class="bg-white px-4 py-2 mb-3 border border-gray-300 shadow-md rounded-lg">
                    <p class="text-lg bg-gray-100 border border-gray-200 px-4 py2 rounded-md">{{ $info->content }}</p>
                    <div class="flex flex-row justify-between mx-8">
                        <a href="{{route('information.edit', $info->id)}}" class="no-underline font-sans bg-blue-500 hover:bg-blue-600 text-white rounded-md px-3 py-2">Editer</a>
                        @if ($info->Masked)
                            <a href="{{route('publication.unmask', ['id'=>$info->pub_id])}}" class="no-underline font-sans bg-green-500 hover:bg-green-600 text-white rounded-md px-3 py-2">Démasquer</a>
                        @else
                            <a href="{{route('publication.mask', ['id'=>$info->pub_id])}}" class="no-underline font-sans bg-gray-500 hover:bg-gray-600 text-white rounded-md px-3 py-2">Masquer</a>
                        @endif
                    </div>
                </div>
            @empty
            <div class="mt-4 bg-blue-100 border border-blue-400 text-center text-blue-900 px-4 py-2 rounded relative" role="alert">
                <span class="block sm:inline">Vous n'avaiz aucun d'informations validées.
            </div>
            @endforelse
        </div>
    </div><hr>

    <div class="mt-8 bg-white pb-4 rounded-lg">
        <h3 class="text-lg font-bold mb-4 bg-blue-900 text-white rounded-t-lg px-4 py-2">Informations en révision</h3>
        <div class="m-2">
            @forelse ($inReview as $info)
                <div class="bg-white px-4 py-2 mb-3 border border-gray-300 shadow-md rounded-lg">
                    <p class="text-lg bg-gray-100 border border-gray-200 px-4 py2 rounded-md">{{ $info->content }}</p>
                    <div class="flex flex-row justify-between mx-8">
                        <a href="{{route('information.edit', $info->id)}}" class="no-underline font-sans bg-blue-500 hover:bg-blue-600 text-white rounded-md px-3 py-2">Editer</a>
                        <a href="{{route('information.destroy', $info->id)}}" class="no-underline font-sans bg-red-500 hover:bg-red-600 text-white rounded-md px-3 py-2">Supprimer</a>
                    </div>
                </div>
            @empty
            <div class="mt-4 bg-blue-100 border border-blue-400 text-center text-blue-900 px-4 py-2 rounded relative" role="alert">
                <span class="block sm:inline">Vous n'avaiz aucun d'informations en révision.
            </div>
            @endforelse
        </div>
    </div><hr>

    <div class="mt-8 bg-white pb-4 rounded-lg">
        <h3 class="text-lg font-bold mb-4 bg-red-900 text-white rounded-t-lg px-4 py-2">Informations rejetées</h3>
        <div class="m-2">
            @forelse ($rejected as $info)
                <div class="bg-white px-4 py-2 mb-3 border border-gray-300 shadow-md rounded-lg">
                    <p class="text-lg bg-gray-100 border border-gray-200 px-4 py2 rounded-md">{{ $info->content }}</p>
                    <div class="flex flex-row justify-between mx-8">
                        <a href="{{route('information.edit', $info->id)}}" class="no-underline font-sans bg-blue-500 hover:bg-blue-600 text-white rounded-md px-3 py-2">Editer</a>
                        <a href="{{route('information.destroy', $info->id)}}" class="no-underline font-sans bg-red-500 hover:bg-red-600 text-white rounded-md px-3 py-2">Supprimer</a>
                    </div>
                </div>
            @empty
            <div class="mt-4 bg-blue-100 border border-blue-400 text-center text-blue-900 px-4 py-2 rounded relative" role="alert">
                <span class="block sm:inline">Vous n'avaiz aucun d'informations rejetées.
            </div>
            @endforelse
        </div>

    </div>
@endsection
