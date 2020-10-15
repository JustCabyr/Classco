@extends('layouts.app')

@section('content')
    <h1>Edit solution</h1>
    <form method="post" action="/solution/{{ $solution->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name" value="{{ $solution->first_name }}">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name" value="{{ $solution->last_name }}">
        </div>
        <div class="form-group">
            <label for="assignment_course_code">Assignment Course Code</label>
            <input type="text" class="form-control" name="assignment_course_code" id="assignment_course_code" placeholder="Enter Company Name" value="{{ $solution->assignment_course_code }}"> 
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{ $solution->email }}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Enter Company Name" value="{{ $solution->content }}"> 
        </div>      
        <div class="form-group">
            <label for="snapshot">Upload Snapshot</label>
            <input type="file" class="file" name="snapshot" multiple data-preview-file-type="any" data-upload-url="#" placeholder="Upload snapshot" value="{{ $solution->logo }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection