




<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Categories :)") }}
                </div>
            </div>
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.categories.create') }}" 
                    clasa="px-4 py-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">New Category</a>
            </div>
            
<div class="overflow-x-auto relative">
    @if ( $categories->count() >=1)
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                   Title
                </th>
               
                <th scope="col" class="py-3 px-6">
                    Image
                </th>
                <th scope="col" class="py-3 px-6">
                    Description
                </th>
            </tr>
        </thead>
       
        <tbody>
         
            @foreach ($categories as $category )
                
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="py-4 px-6">
                    <img src="{{ asset('categories/'.$category->image) }}" class="w-16 h-16 rounded">
                </td>
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{ $category->name }}
                </th>
               
                <td class="py-4 px-6">
                    {{ $category->description}}
                </td>
                
            </tr>
            
            @endforeach
        </tbody>
        @else
        <div class="flex justify-center m-2 p-2">
            <h1 clasa="px-4 py-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Nothing to show</a>
        </div>
        @endif
    </table>
</div>

        </div>
    </div>
</x-admin-layout>
