<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.menus.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white"> Menus</a>
            </div>

                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form action="{{route('admin.menus.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                      <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                        <div class="mt-1">
                          <input type="name" id="name" name="name" class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') @enderror"  />
                        </div>
                        @error('name')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="sm:col-span-6">
                        <label for="title" class="block text-sm font-medium text-gray-700"> Image </label>
                        <div class="mt-1">
                          <input type="file" id="image" name="image" class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('image') @enderror" />
                        </div>
                        @error('image')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Price </label>
                        <div class="mt-1">
                          <input type="price" id="price" name="price" class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('price') @enderror" />
                        </div>
                        @error('price')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="sm:col-span-6 pt-5">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                          <textarea id="description" rows="3" name="description" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm @error('description') @enderror"></textarea>
                        </div>
                        @error('description')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="sm:col-span-6 pt-5">
                        <label for="body" class="block text-sm font-medium text-gray-700">Categories</label>
                        <div class="mt-1">
                          <select id="categories" name="categories[]" class="form-multiselect block w-full mt-1" multiple>
                            @foreach ($categories as $category )
                                    <option value="{{$category->id}}">{{ $category->name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="mt-6 px-4">
                        <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                      </div>
                    </form>

                  </div>


        </div>
    </div>
</x-admin-layout>
