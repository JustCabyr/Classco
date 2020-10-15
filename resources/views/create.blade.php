 @extends('layouts.app')

 @section('content')
    <h1>Create new Assignment</h1>
    <form method="post" action="/assignment">
        @csrf
        <div class="form-group">
            <label for="course_code">Course Code</label>
            <input type="text" class="form-control" name="course_code" id="course_code" placeholder="Enter Course Code" value="{{ old('course_code') }}">
        </div>
        <div class="form-group">
            <label for="lecturer">Lecturer</label>
            <input type="text" class="form-control" name="lecturer" id="lecturer" placeholder="Enter Lecturer" value="{{ old('lecturer') }}">
        </div>
        <div class="form-group">
            <label for="question">Question</label>
            <input type="text" class="form-control" name="question" id="question" placeholder="Enter Question" value="{{ old('question') }}"> 
        </div>
        <div class="form-group">
            <label for="deadline">Deadline</label>
            <input type="date" class="form-control" name="deadline" id="deadline" placeholder="Enter Deadline" value="{{ old('deadline') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
 @endsection