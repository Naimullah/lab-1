@extends('layouts.app ')
 
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
                        <th>ID</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($departments as $department)
                    <tr>
                        <td>{{ $department->id }}</td>
                        <td>{{ $department->code }}</td>
                        <td>{{ $department->name }}</td>
                        <td>
                            <a href="{{ route('departments.show', $department->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
@endsection
