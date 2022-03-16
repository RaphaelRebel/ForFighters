<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overzicht') }}
        </h2>
    </x-slot>
    {{ $todos->links() }}
    <ol class="slides">
        @foreach($todos as $todo)
            <div><h3>{{$todo->title}}</h3> <p>{{$todo->description}}</p></div>
        @endforeach
    </ol>
    {{ $todos->links() }}

</x-app-layout>
