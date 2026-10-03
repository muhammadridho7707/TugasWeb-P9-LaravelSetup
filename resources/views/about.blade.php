@extends('layouts.app')

@section('title', 'Tentang Saya')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-blue-700">Tentang Saya</h1>
    
    <div class="bg-white p-6 border rounded shadow-md mb-8">
        <h2 class="text-2xl font-bold">{{ $profil['nama'] }}</h2>
        <p class="text-gray-600 mt-2">Mahasiswa {{ $profil['Program Studi'] }}, {{ $profil['kampus'] }}.</p>
    </div>

    <h2 class="text-2xl font-bold mb-4 text-blue-700">Hal yang Akan Saya Pelajari</h2>
    <div class="bg-white p-6 border rounded shadow-md">
        <ul class="list-disc list-inside text-gray-700 space-y-2">
            @foreach($rencana_belajar as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endsection