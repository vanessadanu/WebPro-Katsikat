@extends('layouts.app')
@section('dashboard nav', 'collapsed')
@section('portfolio nav', 'collapsed')
@section('services nav', '')
@section('profile nav', 'collapsed')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Service</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </nav>

            @include('_modules.alert')

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Service</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" method="post" action="{{ route('services.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter service name">
                            </div>
                            <div class="col-12">
                                <label for="inputDesc" class="form-label">Description</label>
                                <input type="text" class="form-control"
                                    name="description"placeholder="Add description for your service">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <a type="cancel" href="{{ route('services.index') }}"
                                    class="btn btn-danger ml-2">Cancel</a>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>
        </div><!-- End Page Title -->

    </main>
@endsection
