<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pas todo aan
        </h2>
        <x-slot name="slot">
            <div class="single-container">

                <form method="POST" action="{{ route('admin-update', $admin->id)}}" enctype="multipart/form-data">
                    @csrf

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <!-- Name -->
                    <div>
                        <x-label for="title" value="{{$admin->title}}"/>

                        <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus/>
                    </div>

                    <!-- Name -->
                    <div>
                        <x-label for="description" value="{{$admin->description}}"/>

                        <x-input id="description" class="block h-20 mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus/>
                    </div>

                    <div>
                        <x-label for="afbeelding" value="Foto"/>

                        <x-input id="afbeelding" class="block h-20 mt-1 w-full" type="file" name="afbeelding"  required autofocus/>
                    </div>

                    <div class="flex items-center justify-end mt-4">


                        <x-button class="ml-4">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </x-slot>
</x-app-layout>
