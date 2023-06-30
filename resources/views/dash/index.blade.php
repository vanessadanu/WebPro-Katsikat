@extends('layouts.app')

@section('dashboard nav', '')
@section('portfolio nav', 'collapsed')
@section('services nav', 'collapsed')
@section('articles nav', 'collapsed')
@section('profile nav', 'collapsed')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($data as $item)
                            <div class="col-xxl-4 col-md-4">
                                <div class="card">
                                    <img src="{{ asset($item->image_file_url) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->title }}</h5>
                                        <p class="card-text">{{ $item->description }}</p>
                                        <span class="badge bg-light text-dark">{{ $item->service->name }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        </section>

    </main><!-- End #main -->
@endsection
