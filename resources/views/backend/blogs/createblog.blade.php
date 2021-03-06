@extends('backend.layouts.app')
@section('content')
    <!-- page -->
    <main class="relative w-full bg-white">
        <!-- component -->
        <div class="p-6">
            <section class=" container max-w-6xl mx-auto my-12">
                <!-- register content -->
                <div class="space-y-4">
                    <h2 class="mb-3 text-2xl font-bold">Create Your Own Blog</h2>
                    <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @include('backend.blogs._form', ["button" => __("Create")])
                    </form>
                </div>
            </section>
        </div>
    </main>
@endsection