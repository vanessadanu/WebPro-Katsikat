@extends('layouts.app')
@section('dashboard nav', 'collapsed')
@section('portfolio nav', 'collapsed')
@section('categories nav', '')
@section('profile nav', 'collapsed')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Category</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Update</li>
                </ol>
            </nav>

            @include('_modules.alert')
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Category</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" method="post" action="{{ route('categories.update', $category->id) }}"
                            enctype="multipart/form-category">
                            @csrf
                            @method('put')
                            <div class="col-12">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name"
                                    value="{{ $category->name }}">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <a type="cancel" href="{{ route('categories.index') }}"
                                    class="btn btn-danger ml-2">Cancel</a>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>
        </div><!-- End Page Title -->

    </main>
@endsection
