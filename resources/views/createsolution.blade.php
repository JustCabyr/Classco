 @extends('layouts.app')

 @section('content')
    <h1>Create new solution</h1>
    <form method="post" action="/solution" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name" value="{{ old('first_name') }}">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name" value="{{ old('last_name') }}">
        </div>

        <div class="form-group">
            <label for="assignment_course_code">Assignment Course Code</label>
            <select name="assignment_course_code" id="assignment_course_code" class="form-control">
                <option value="Please select" >
                    Please Select
                </option>
                $assignment = Assignment::all();
                @forelse ($assignment as $ass)
                    <option value="{{ $ass->course_code }}">{{ $ass->course_code }}</option>
                    @empty
                    <option><None/option>
                @endforelse
            </select>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Content" value="{{ old('content') }}"> 
        </div>      
        <div class="form-group">
            <label for="snapshot">Upload Snapshot</label>
            <input type="file" class="file" name="snapshot" multiple data-preview-file-type="any" data-upload-url="#" placeholder="Upload snapshot" value="{{ old('snapshot') }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
 @endsection