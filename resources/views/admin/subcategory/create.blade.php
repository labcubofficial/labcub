@extends('admin.master.admin_master')
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
@section('content')
<div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
    <h1 class="text-xl text-white">Add Sub Category</h1>
</div>
<div class="-mt-12 mx-6 mb-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-12 xl:grid-cols-12">
    <div class="card h-full shadow">
        <div class="border-b border-gray-300 px-5 py-4 flex items-center w-full justify-between">
            <form class="w-full" action="{{ route('subcategory.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- input -->

                <div class="mb-6 inline-flex md:flex md:items-center gap-3 flex-col md:flex-row w-full">
                    <label for="fullName" class="flex-1 text-gray-800 font-semibold">Category Name</label>
                    <div class="flex-[3] w-full">
                        <x-input name="category_name" placeholder="Enter Category Name" value="{{ old('category_name') }}" />
                    </div>
                </div>

                <!-- input -->

                <div class="mb-6 inline-flex md:flex md:items-center gap-3 flex-col md:flex-row w-full">
                    <label for="fullName" class="flex-1 text-gray-800 font-semibold">Parent Category</label>
                    <div class="flex-[3] w-full">
                        <select name="parent_category" class="py-2 px-4 pe-9 block w-full border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none">
                            @foreach($subcategory as $item)
                                <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- input -->
                <div class="mb-6 inline-flex md:flex md:items-center gap-3 flex-col md:flex-row w-full">
                    <label for="email" class="flex-1 text-gray-800 font-semibold">Status</label>
                    <div class="flex-[3] w-full">
                        <input type="checkbox" id="category_status" value="1" name="status" class="toggle relative w-[2.3rem] h-5 p-px bg-gray-200 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-indigo-600 checked:border-indigo-600 focus:checked:border-indigo-600 before:inline-block before:w-4 before:h-4 before:bg-white checked:before:bg-indigo-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200" checked />
                        <label for="switch-default1" class="sr-only">switch</label>
                    </div>
                </div>
                <!-- input -->
                <div class="mb-6 inline-flex md:flex md:items-center gap-3 flex-col md:flex-row w-full">
                    <label for="phone" class="flex-1 text-gray-800 font-semibold">Image</label>
                    <div class="flex-[3] w-full">
                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <div class="preview-image" style="display: none;">
                                    <img src="" alt="" class="previewImage" style="width: 100px; height: 100px;">
                                </div>
                                <div class="preview-svg">
                                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="image" type="file" class="image-input sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-6 inline-flex md:flex md:items-center gap-3 flex-col md:flex-row w-full">
                    <div class="flex-1 text-gray-800 font-semibold"></div>
                    <div class="flex-[3]">
                        <button type="submit" class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300">Upload</button>
                        <a href="{{ url('admin/subcategory') }}" type="submit" class="btn gap-x-2 bg-gray-400 text-gray-800 border-gray-400 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-600 hover:border-gray-600 active:bg-gray-600 active:border-gray-600 focus:outline-none focus:ring-4 focus:ring-gray-300">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection