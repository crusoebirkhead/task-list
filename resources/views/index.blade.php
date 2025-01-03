Hello i am a blade template

<div>

    {{-- @if (count($tasks)) --}}
        @forelse ($tasks as $task)
            <div>
                <a href="{{ route('task.show', ['id' =>$task->id])}}">{{$task->title}}</a></div>
            @empty
        @endforelse


    {{-- <div> There are no tasks! </div> --}}
    {{-- @endif --}}

</div>
