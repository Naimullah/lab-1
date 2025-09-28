@extends('layouts.app')
@section('content')
        <main class="container mx-auto mt-6 flex justify-center">
            <section class="w-3/5 bg-white p-6 shadow-md rounded-lg">
                <h1 class="text-2xl font-bold mb-4">Edit Contact</h1>
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Name:</label>
                        <input type="text" name="name" id="name" class="w-full border border-gray-300 p-2 rounded" value="{{ old('name', $contact->name) }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email:</label>
                        <input type="email" name="email" id="email" class="w-full border border-gray-300 p-2 rounded" value="{{ old('email', $contact->email) }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="subject" class="block text-gray-700">Subject:</label>
                        <input type="text" name="subject" id="subject" class="w-full border border-gray-300 p-2 rounded" value="{{ old('subject', $contact->subject) }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700">Message:</label>
                        <textarea name="message" id="message" class="w-full border border-gray-300 p-2 rounded" rows="5" required>{{ old('message', $contact->message) }}</textarea>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
                </form>
            </section>
        </main>
@endsection
