@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
                <p>This is my dashboard</p>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                    <p>See</p>

                </div>
            </div>
        </div>
    </div>

    <div>
        @if(auth()->user()->type == 'admin')
        <a class="btn btn-success mt-2" href="assignment/create">Create new assignment</a>
        @endif
        <h2></h2>
        <p>Assignment list</p>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Course Code</th>
                <th scope="col">Lecturer</th>
                <th scope="col">Question</th>
                <th scope="col">Deadline</th>
                @if(auth()->user()->type == 'admin')
                <th scope="col">#</th>
                @endif
            </tr>
        </thead>
            <tbody>
                @if (count($assignments) > 0)
                @foreach ($assignments as $assignment)
                <tr>
                    <td>{{ $assignment->course_code }}</td>
                    <td>{{ $assignment->lecturer }}</td>
                    <td>{{ $assignment->question }}</td>
                    <td>{{ $assignment->deadline }}</td>
                    @if(auth()->user()->type == 'admin')
                    
                    <td>
                        <a href="/assignment/{{ $assignment->id }}/edit" class="btn btn-primary mt-2">Edit</a>
                        <form method="post" action="/assignment/{{ $assignment->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger float-right">Delete</button>
                        </form>
                    </td>
                    @endif
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <div>
        @if(auth()->user()->type == 'students')
        <a class="btn btn-success mt-2" href="solution/create">Submit a solution</a>
        @endif
        <h2></h2>
        <p>Solution list</p>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Assignment Course Code</th>
                <th scope="col">Email</th>
                <th scope="col">Content</th>
                <th scope="col">Snapshot</th>
                @if(auth()->user()->type == 'student')
                <th scope="col">#</th>
                @endif
            </tr>
        </thead>
            <tbody>
                @if (count($solutions) > 0)
                @foreach ($solutions as $solution)
                <tr>
                    <td>{{ $solution->first_name }}</td>
                    <td>{{ $solution->last_name }}</td>
                    <td>{{ $solution->assignment_course_code }}</td>
                    <td>{{ $solution->email }}</td>
                    <td>{{ $solution->content }}</td>
                    <td><img src="{{ $solution->snapshot }}" alt="Snapshot"></td>
                    @if(auth()->user()->type == 'students')
                    <td>
                        <a href="/solution/{{ $solution->id }}/edit" class="btn btn-primary mt-2">Edit</a>
                        <form method="post" action="/solution/{{ $solution->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger float-right">Delete</button>
                        </form>
                    </td>
                    @endif
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>

</div>
@endsection
