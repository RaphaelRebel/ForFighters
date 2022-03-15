<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overzicht') }}
        </h2>
    </x-slot>
    <ol class="slides">
        @foreach($todos as $todo)
            <div><p>{{$todo->title}}</p></div>
        @endforeach
    </ol>
    
</x-app-layout>
