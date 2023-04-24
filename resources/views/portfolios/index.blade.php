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

            <a href="{{ route('portfolios.create') }}" type="button" class="btn btn-primary mb-3"><i
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
                                    <td><img src="{{ asset($item->image_file_url) }}" alt="" width="200"></td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <a href="{{ route('portfolios.edit', $item->id) }}" class="btn btn-warning"><i
                                                class="bi bi-pen"></i>
                                            Edit</a>

                                        <a class="btn btn-danger"
                                            onclick="event.preventDefault(); document.getElementById('delete-portfolio-{{ $item->id }}').submit()"><i
                                                class="bi bi-trash"></i> Delete</a>

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
