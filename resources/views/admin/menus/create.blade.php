<x-admin-layout>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                  {{ __('!! New Menu !! :)') }}
              </div>

              <form method="POST" action="{{ route('admin.menus.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-6">
                      <label for="title"
                          class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                      <input type="text" id="title" name="title"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Title" required>
                  </div>
                  <div class="mb-6">
                    <label for="price"
                        class="block mb-2 text-sm font-medium text-gray-900 ">Price</label>
                    <input type="number" id="price" name="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="10000.00" required>
                </div>
                  
                  <div class="mb-6">

                      <label class=" mb-2  text-sm font-medium text-gray-900 "
                          for="image">Upload file</label>
                          <input name="image" id="image" type="file" class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" >
                      <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">it is good to have an image</div>
                  </div>
                  <div class="mb-6">
                    <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 ">Category:</label>
                    <select name="categories" id="categories[]"class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" multiple>

                      @foreach ($categories as $category )
                        <option value={{ $category->id }}>{{ $category->name }}</option>
                      @endforeach

                    </select>
                  </div>
                                   
                       <div>  
          <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
<textarea name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
</div>
               
                    
                  </div>
                  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
                </form>
      </div>
  </div>
</x-admin-layout>
