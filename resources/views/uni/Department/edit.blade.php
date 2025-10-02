@extends('layouts.app')
@section('content')
    <div class="container">
       <h1>Edit Department</h1>
       <form action="{{ route('departments.update', $department->id) }}" method="POST">
           @csrf
           @method('PUT')
           <div class="mb-3">
               <label for="code" class="form-label">Department Code</label>
               <input type="text" class="form-control" id="code" name="code" value="{{ $department->code }}" required>
           </div>
           <div class="mb-3">
               <label for="name" class="form-label">Department Name</label>
               <input type="text" class="form-control" id="name" name="name" value="{{ $department->name }}" required>
           </div>
           <button type="submit" class="btn btn-primary">Update</button>
         </form>
    </div>
@endsection
