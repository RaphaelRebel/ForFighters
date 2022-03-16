<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Creëer todo') }}
    </h2>
</x-slot>
<x-slot name="slot">
   <div>
       <form
           action="todo"
       method="POST"
       enctype="multipart/form-data"
       >
           @csrf

           <input type="text"
           name="title"
           placeholder="Title..."
           class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">
           <textarea name="description"
           placeholder="Description..."
           class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

           <div class="bg-grey-lighter pt-15">
               <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                   <span class="mt-2 text-base leading-normal">

                   </span>
               </label>
           </div>
           <button
           type="submit"
           class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg py-4 px-8 rounded-3xl">
               Submit
           </button>
       </form>
   </div>
</x-slot>


</x-app-layout>
