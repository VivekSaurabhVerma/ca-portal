@extends('dashboard.layout')

@section('content')
<div class="container">
    @foreach ($tasks as $task)
        <div class="row m-3">
            <div class="col-md-10"><h5>{{$task->title}}</h5></div>
            <div class="col-md-2"><a href="{{ route('viewTaskUpload', ['id'=> $task->id]) }}" class="btn btn-primary">View Uploads</a></div>
        </div>
    @endforeach
</div>
@endsection
