@extends('layouts.app')
 
@section('content')
      <main class="container mx-auto mt-6 flex justify-center">
        <section class="w-3/5 bg-white p-6 shadow-md rounded-lg">   
            <h1 class="text-2xl font-bold mb-4">Contacts</h1>
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ route('contacts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mb-4 inline-block">Add New Contact</a>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Name</th>
                        <th class="py-2 px-4 border-b">Email</th>
                        <th class="py-2 px-4 border-b">Subject</th>
                        <th class="py-2 px-4 border-b">Message</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $contact->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $contact->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $contact->subject }}</td>
                        <td class="py-2 px-4 border-b">{{ $contact->message }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('contacts.show', $contact->id) }}" class="text-blue-500 hover:underline">View</a>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="text-yellow-500 hover:underline ml-2">Edit</a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="inline-block ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
@endsection