@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
<div>
    {{-- @if (count($tasks))
        @foreach ($tasks as $task)
            <div>
                <h2>{{ $task->title }}</h2>
            </div>
            <hr>
        @endforeach
    @else
        <div>There are no tasks!</div>
    @endif --}}

    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>There are no tasks!</div>
    @endforelse
</div>
@endsection
