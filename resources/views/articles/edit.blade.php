@extends('layouts.app')

@section('dashboard nav', 'collapsed')
@section('portfolio nav', 'collapsed')
@section('services nav', 'collapsed')
@section('articles nav', '')
@section('profile nav', 'collapsed')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Article</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Update</li>
                </ol>
            </nav>

            <div class="col-lg-12">
                @include('_modules.alert')

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Article</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" method="post" action="{{ route('articles.update', $data->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="col-12">
                                <label for="inputTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter title"
                                    value="{{ $data->title }}">
                            </div>
                            <div class="col-12">
                                <label for="inputDesc" class="form-label">Description</label>
                                <textarea class="form-control preserve-line-breaks" style="height: 100px" name="description" placeholder="Write your article here">{{ $data->description }}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="inputNumber" class="form-label">Image</label>
                                <input class="form-control" name="image_file" value="{{ $data->image_file_url }}"
                                    disabled="">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <a type="cancel" href="{{ route('articles.index') }}"
                                    class="btn btn-danger ml-2">Cancel</a>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>
        </div><!-- End Page Title -->

    </main>
@endsection
