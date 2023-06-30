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
                    <li class="breadcrumb-item active">Article</li>
                </ol>
            </nav>

            <a href="{{ route('articles.create') }}" enctype="multipart/form-data" type="button"
                class="btn btn-primary mb-3"><i class="bi bi-plus-circle"></i> Add new</a>
            <div class="card">
                <div class="card-body">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Images</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        @foreach (json_decode($item->image_file_url) as $imageUrl)
                                            <img src="{{ asset($imageUrl) }}" alt="" width="250">
                                        @endforeach
                                    </td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <a href="{{ route('articles.show', $item->id) }}" class="btn btn-primary"><i
                                                class="bi bi-eye"></i></a>
                                        <a href="{{ route('articles.edit', $item->id) }}" class="btn btn-warning"><i
                                                class="bi bi-pen"></i></a>

                                        <a class="btn btn-danger"
                                            onclick="showDeleteConfirmation('delete-Article-{{ $item->id }}'); { document.getElementById('delete-Article-{{ $item->id }}').submit() }"><i
                                                class="bi bi-trash"></i></a>
                                        <form id="delete-Article-{{ $item->id }}"
                                            action="{{ route('articles.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>
@endsection
