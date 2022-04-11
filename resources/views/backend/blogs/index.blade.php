@extends('backend.layouts.app')
@section('content')
    <section class="bg-gray-100">
        <div class="py-32  container mx-auto px-4">
            <div class="w-full py-12">
                <a href="{{ route('blog.create') }}"
                    class="px-6 py-4 hover:bg-green-600 text-white rounded-md bg-green-500 inline-block text-3xl font-semibold">Create
                    Blog</a>
            </div>
            <div class="flex flex-wrap -mx-4 space-x-4">
                @forelse ($blogs as $blog)
                    <div class="md:w-1/3 sm:w-1/2 w-full shadow-lg rounded-lg hover:shadow-2xl transition px-4 py-4">
                        <img src="{{ asset('storage/'. $blog->images) }}" alt="" class="rounded-t-lg w-full">
                        <div class="py-4">
                            <h1
                                class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                                {{ $blog->title }}</h1>
                            <p class="text-gray-700 my-2 hover-text-900 ">{{ $blog->dis }}</p>
                           
                        </div>
                        <div class="flex space-x-2">
                            <div class=""><a href="{{ route('blog.edit', $blog->id) }}"
                                    class="px-3 py-2 hover:bg-green-600 text-white rounded-md bg-green-500 inline-block ">Edit</a>
                            </div>
                            <div class=""><a href="{{route('blog.copypost', $blog->id)}}"
                                    class="px-3 py-2 hover:bg-green-600 text-white rounded-md bg-green-500 inline-block ">Copy</a>
                            </div>
                            <div class=""><a href="{{ route('blog.destroy', $blog->id) }}"
                                    class="px-3 py-2 hover:bg-green-600 text-white rounded-md bg-green-500 inline-block delete-row" data-confirm="Are You Sure To Delete This?">Delete</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="">No Data Found</div>
                @endforelse
            </div>
        </div>
        <div class="flex justify-center py-12">
            {{ $blogs->links() }}
        </div>
    </section>
@endsection
