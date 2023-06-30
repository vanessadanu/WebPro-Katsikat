@extends('layouts.app')

@section('dashboard nav', 'collapsed')
@section('portfolio nav', 'collapsed')
@section('services nav', 'collapsed')
@section('articles nav', '');
@section('profile nav', 'collapsed')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Article</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </nav>

            <div class="col-lg-12">
                @include('_modules.alert')

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Article</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" method="post" action="{{ route('articles.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label for="inputTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter title">
                            </div>
                            <div class="col-12">
                                <label for="inputDesc" class="form-label">Description</label>
                                <textarea type="text" class="form-control"
                                    name="description"placeholder="Write your article here"></textarea>
                            </div>
                            <div class="col-12">
                                <label for="inputImage" class="form-label">Image</label>
                                <input class="form-control" type="file" name="image_file_url[]" id="image_file_url" multiple required accept="image/*">
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
