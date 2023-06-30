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
                    <li class="breadcrumb-item active">View</li>
                </ol>
            </nav>

            <div class="col-lg-12">
                @include('_modules.alert')

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">View Article</h5>
                        <div class="row g-0">
                            <div class="col-md-4">
                                @foreach (json_decode($data->image_file_url) as $imageUrl)
                                    <img src="{{ asset($imageUrl) }}" alt="" width="w-full"
                                        class="w-100 border-radius-lg shadow-sm">
                                @endforeach
                                <p class="text-xs text-secondary mb-0" style="font-size: 9px">
                                    {{ $data->image_file_url }}&nbsp;&nbsp;&nbsp;</p>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $data->title }}</h5>
                                    <p class="card-text preserve-line-breaks">{{ $data->description }}</p>
                                    <a href="{{ route('articles.edit', $data->id) }}" class="btn btn-warning"><i
                                            class="bi bi-pen"></i>Edit</a>
                                    <a class="btn btn-danger"
                                        onclick="showDeleteConfirmation('delete-article-{{ $data->id }}'); { document.getElementById('delete-article-{{ $data->id }}').submit() }"><i
                                            class="bi bi-trash"></i>Delete</a>
                                    <form id="delete-article-{{ $data->id }}"
                                        action="{{ route('articles.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                    <br>
                                    <a type="cancel" href="{{ route('articles.index') }}"
                                        class="btn btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
