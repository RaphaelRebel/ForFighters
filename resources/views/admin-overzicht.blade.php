<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overzicht') }}
        </h2>
    </x-slot>
    {{ $admin->links() }}
    <ol class="slides">
        @foreach($admin as $admins)
            <div><h3>{{$admins->title}}</h3> <p>{{$admins->aboutus}}</p>

                <button><a href="/admin/{{$admins->id}}">Read more</a></button>
            </div>
        @endforeach
    </ol>
    {{ $admin->links() }}

</x-app-layout>
