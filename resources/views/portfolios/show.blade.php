@extends('layouts.app')

@section('dashboard nav', 'collapsed')
@section('portfolio nav', 'collapsed')
@section('categories nav', '')
@section('profile nav', 'collapsed')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Portfolio</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">View</li>
                </ol>
            </nav>

            <div class="col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        There's some error(s):
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">View Portfolio</h5>
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset($data->image_file_url) }}" alt="" width="w-full"
                                    class="w-100 border-radius-lg shadow-sm">
                                <p class="text-xs text-secondary mb-0" style="font-size: 9px">
                                    {{ $data->image_file_url }}&nbsp;&nbsp;&nbsp;</p>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $data->title }}</h5>
                                    <p class="card-text">{{ $data->description }}</p>
                                    <a href="{{ route('portfolios.edit', $data->id) }}" class="btn btn-warning"><i
                                            class="bi bi-pen"></i>Edit</a>
                                    <a class="btn btn-danger"
                                    onclick="showDeleteConfirmation('delete-portfolio-{{$data->id }}'); { document.getElementById('delete-portfolio-{{ $data->id }}').submit() }"><i
                                    class="bi bi-trash"></i>Delete</a>
                                    <form id="delete-portfolio-{{ $data->id }}"
                                        action="{{ route('portfolios.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                    <br>
                                    <a type="cancel" href="{{ route('portfolios.index') }}"
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
