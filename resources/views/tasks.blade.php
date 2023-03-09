@extends('layout.main')

@section('container')
    <div class="content">
        @auth
            <h1 class="font-bold text-center text-2xl text-[#3A1078]">Hello, {{ auth()->user()->name }} have tasks?</h1>
        @endauth
        @foreach ($todos as $todo)
            <div class="card w-[80%] bg-white mx-[10%] my-5 p-5 rounded-md relative">
                <a href="/detail/{{ $todo->slug }}" class=" text-[#3A1078] py-3 font-medium">{{ $todo->slug }}</a>
                <p class=" absolute bottom-1 right-2 text-xs">{{ $todo->created_at->diffForHumans() }}</p>
            </div>
        @endforeach
        {{ $todos->links() }}
    </div>
@endsection
