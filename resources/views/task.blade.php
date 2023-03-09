@extends('layout.main')

@section('container')
    <div class="content w-[80%] px-[10%] h-[100%] m-auto bg-white shadow-2xl rounded p-3">
        <h1>{{ $task->todo }}</h1>
        <p class="mt-4">{{ $task->created_at->diffForHumans() }}</p>
        <a href="/" class="mt-3 underline text-[#2F58CD]">Back</a>
    </div>
@endsection