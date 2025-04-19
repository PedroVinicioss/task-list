<h1>
    The list of tasks
</h1>

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

    <br>
    <br>

    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>
        </div>
        <hr>
    @empty
        <div>There are no tasks!</div>
    @endforelse
</div>
