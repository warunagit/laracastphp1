TASKS LIST

<div>
    @if(count($tasks))
        <div><b>Are tasks</b></div>
        @foreach($tasks as $task)
            <div>{{$task->title}}</div>
        @endforeach
    @else
        <div>No tasks</div>
    @endif
</div>
