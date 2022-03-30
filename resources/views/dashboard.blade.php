@extends('backend.layouts.app')
@section('content')
    <section class="bg-gray-100">
        <div class="py-32  container mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <div class="md:w-1/3 sm:w-1/2 w-full shadow-lg rounded-lg hover:shadow-2xl transition px-4 py-4">
                    <img src="{{asset('images/1.jpg')}}" alt=""
                        class="rounded-t-lg w-full">
                    <div class="py-4">
                        <h1
                            class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                            This is Amazing for people to visit.</h1>
                        <p class="text-gray-700 my-2 hover-text-900 ">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Praesentium quis.</p>
                    </div>
                    <div class="flex space-x-2">
                      <div class=""><a href="" class="px-3 py-2 hover:bg-green-600 text-white rounded-md bg-green-500 inline-block ">Edit</a></div>
                      <div class=""><a href="" class="px-3 py-2 hover:bg-green-600 text-white rounded-md bg-green-500 inline-block ">Copy</a></div>
                      <div class=""><a href="" class="px-3 py-2 hover:bg-green-600 text-white rounded-md bg-green-500 inline-block ">Delete</a></div>
                  </div>
                </div>
            </div>
        </div>
    </section>
@endsection
