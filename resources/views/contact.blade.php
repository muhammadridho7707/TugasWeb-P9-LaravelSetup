@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-blue-700">Contact</h1>
    
    <div class="bg-white p-6 rounded shadow-md max-w-md">
        <p class="mb-4 text-gray-600">Silakan hubungi saya melalui tautan di bawah ini:</p>
        <ul class="space-y-3">
            <li>
                <span class="font-bold text-gray-800">Email:</span> 
                <a href="mailto:emailkamu@gmail.com" class="text-blue-600 hover:underline">ridosaurus@example.com</a>
            </li>
            <li>
                <span class="font-bold text-gray-800">GitHub:</span> 
                <a href="https://github.com/muhammadridho7707" target="_blank" class="text-blue-600 hover:underline">github.com/muhammadridho7707</a>
            </li>
        </ul>
    </div>
@endsection