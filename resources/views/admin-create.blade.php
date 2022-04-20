<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Creëer project') }}
    </h2>
</x-slot>
    <x-slot name="slot">
        <div class="single-container">

            <form method="POST" action="{{ route('project-store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
                <div>
                    <x-label for="title" :value="__('Titel')"/>

                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus/>
                </div>

                <!-- Eerste descriptie -->
                <div>
                    <x-label for="description_1" :value="__('Eerste descriptie')"/>

                    <x-input id="description_1" class="block h-20 mt-1 w-full" type="text" name="description_1" :value="old('description_1')" required autofocus/>
                </div>

                <!-- Tweede descriptie -->
                <div>
                    <x-label for="description_2" :value="__('Tweede descriptie')"/>

                    <x-input id="description_2" class="block h-20 mt-1 w-full" type="text" name="description_2" :value="old('description_2')"  autofocus/>
                </div>

                <!-- Derde descriptie -->
                <div>
                    <x-label for="description_3" :value="__('Derde descriptie')"/>

                    <x-input id="description_3" class="block h-20 mt-1 w-full" type="text" name="description_3" :value="old('description_3')"  autofocus/>
                </div>
                <!-- Foto -->
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
