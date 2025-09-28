@extends('layouts.app')
@section('content')
      <main class="container mx-auto mt-6 flex justify-center">
        <section class="w-3/5 bg-white p-6 shadow-md rounded-lg">
         <h1 class="text-2xl font-bold mb-4">Contact Details</h1>
         <div class="mb-4">
            <strong class="text-gray-700">Name:</strong>
            <p class="text-gray-900">{{ $contact->name }}</p>
            </div>
            <div class="mb-4">
            <strong class="text-gray-700">Email:</strong>
            <p class="text-gray-900">{{ $contact->email }}</p>
            </div>
            <div class="mb-4">
            <strong class="text-gray-700">Subject:</strong>
            <p class="text-gray-900">{{ $contact->subject }}</p>
            </div>
            <div class="mb-4">
            <strong class="text-gray-700">Message:</strong> 
            <p class="text-gray-900">{{ $contact->message }}</p>
            </div>
            <a href="{{ route('contacts.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back to Contacts</a>
        </section>      
    </main>
@endsection 