@extends('dashboard.layout')

@section('content')
@if (count($tasks)>0)
@foreach ($tasks as $task)
<div class="container mb-2 p-1" style="border: 2px solid #121212; border-radius: 5px;">
    <div class="row">
        <div class="col-md-4" style="text-align: center">
            <h3>Task No. {{ $task->number }}</h3>
        </div>
        <div class="col-md-8" style="text-align: center">
            <h3>{{ $task->title }}</h3>
        </div>
    </div>
    <p>{!! $task->desc !!}</p>
    <a class="btn btn-secondary" href="{{ route('editTask', ['id' => $task->id]) }}" role="button">Edit</a>
    <a class="btn btn-danger" href="{{ route('deleteTask', ['id' => $task->id]) }}" onclick="event.preventDefault();
        document.getElementById('delete-form').submit();" role="button">Delete</a>
    <form id="delete-form" method="POST" action="{{ route('deleteTask', ['id' => $task->id]) }}">
        @csrf
        @method('DELETE')
    </form>
</div>
@endforeach
@else
<h1>No tasks created yet!</h1>
@endif

@endsection
