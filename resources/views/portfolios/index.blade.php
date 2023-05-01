@extends('layouts.app')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Portfolio</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Portfolio</li>
                </ol>
            </nav>

            <a href="{{ route('portfolios.create') }}" enctype="multipart/form-data" type="button" class="btn btn-primary mb-3"><i
                    class="bi bi-plus-circle"></i> Add new</a>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td><img src="{{ asset($item->image_file_url) }}" alt="" width="250">
                                        <p class="text-xs text-secondary mb-0" style="font-size: 9px">
                                            {{ $item->image_file_url }}</p>
                                    </td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <a href="{{ route('portfolios.show', $item->id) }}" class="btn btn-primary"><i
                                                class="bi bi-eye"></i></a>
                                        <a href="{{ route('portfolios.edit', $item->id) }}" class="btn btn-warning"><i
                                                class="bi bi-pen"></i></a>

                                        <a class="btn btn-danger"
                                            onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this item?')){ document.getElementById('delete-portfolio-{{ $item->id }}').submit() }"><i
                                                class="bi bi-trash"></i> </a>

                                        <form id="delete-portfolio-{{ $item->id }}"
                                            action="{{ route('portfolios.destroy', $item->id) }}" method="post">
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
