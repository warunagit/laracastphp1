<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources\css\app.css')
    @vite('resources\js\bootstrap.css')
</head>
<body>
    <h1>Homeeexe</h1>
    <a href='{{ url("/namedroute") }}'>named-route link</a>
    {{-- {{}} is use for blade to get the access to the laravel environment --}}

    <a href='{{ route("namedroutewithparam") }}'>named-route link</a>
    {{-- namedroutewithparam --}}

@forelse ($tasks as $task)
    <div>
        <a href="{{route('tasks.show',['id'=>$task->title])}}">{{$task->title}}</a>
    </div>
    @empty
        <div>No tasks</div>
@endforelse
</body>
</html>
