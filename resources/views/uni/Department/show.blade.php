@extends('layouts.app')
@section('content')
    <div class="container">
     <h1>Department Details</h1>
     <div class="mb-3">
         <label class="form-label"><strong>Department Code:</strong></label>
         <p>{{ $department->code }}</p>
        </div>
        <div class="mb-3">
         <label class="form-label"><strong>Department Name:</strong></label>
         <p>{{ $department->name }}</p> 
        </div>
        <a href="{{ route('departments.index') }}" class="btn btn-secondary">Back to List</a>
        <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-primary">Edit</a>
    </div>  
@endsection 