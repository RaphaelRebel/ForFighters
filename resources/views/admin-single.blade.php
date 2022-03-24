<x-app-layout>
    <div>

    </div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="single-container ">
        <h2>{{$admin->title}}</h2>
        <p style="font-size: 12px">{{$admin->created_at}}</p>
        <p>{{$admin->aboutus}}</p>
        <a href="aanpassen/{{$admin->id}}/">Pas kolom aan</a>
    </div>
</x-app-layout>
