<h3>if</h3>
@if ('a'=='a')
    A == A
@endif

<h3>if/else</h3>
@if ('a'=='b')
    A == b
@elseif ('c'=='k')
    C == C
@else
    ELSE
@endif

<h3>TASKS LIST</h3>
<div>
    @if(count($tasks))
        <div><b>Have tasks</b></div>
        @foreach($tasks as $task)
            <div>{{$task->title}}</div>
        @endforeach
    @else
        <div>No tasks</div>
    @endif
</div>

@forelse ($tasks as $task)
    <div>
        <a href="{{route('tasks-show',['id'=>$task->id])}}">{{$task->title}}</a>
    </div>
    @empty
        <div>No tasks</div>
@endforelse


