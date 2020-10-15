@extends('layouts.app')

@section('content')
    <h1>Edit assignment</h1>
    <form method="post" action="/assignment/{{ $assignment->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="course_code">Course Code</label>
            <input type="text" class="form-control" name="course_code" id="course_code" placeholder="Enter Course Code" value="{{ $assignment->course_code }}">
        </div>
        <div class="form-group">
            <label for="lecturer">Lecturer</label>
            <input type="text" class="form-control" name="lecturer" id="lecturer" placeholder="Enter Lecturer" value="{{ $assignment->lecturer }}">
        </div>
        <div class="form-group">
            <label for="question">Question</label>
            <input type="text" class="form-control" name="question" id="question" placeholder="Enter Question" value="{{ $assignment->question }}"> 
        </div>
        <div class="form-group">
            <label for="deadline">Deadline</label>
            <input type="date" class="form-control" name="deadline" id="deadline" placeholder="Enter Deadline" value="{{ $assignment->deadline }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection