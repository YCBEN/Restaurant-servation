




<x-admin-layout>
  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("!! Menus") }}
                </div>
            </div>
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.menus.create') }}" 
                    clasa="px-4 py-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">New Menu</a>
            </div>
            <div class="overflow-x-auto relative">
                @if ( $menus->count() >=1)
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
                            <th scope="col" class="py-3 px-6">
                                Price
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                   
                    <tbody>
                     
                        @foreach ($menus as $menu )
                            
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="py-4 px-6">
                                <img src="{{ asset('menus/'.$menu->image) }}" class="w-16 h-16 rounded">
                            </td>
                            <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               {{ $menu->name }}
                            </td>
                           
                            <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $menu->description}}
                                
                                
                            
                            </td>
                                
                            <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $menu->price}}
                                
                                
                            
                            </td>
                            <td>
                                <div class="flex space-x-2 ">
                                    <a href="{{ route('admin.menus.edit',$menu->id)}}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
                                    
                                    <form  method="POST" action="{{ route('admin.menus.destroy',$menu->id) }} " onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white">Delete</button>
                
                                    </div> 
                
                
                                    </form>
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
