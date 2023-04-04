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

            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </thead>
                    </table>
                    <tbody>
                        @foreach ($data as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->image_file_url }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>

    </main>
@endsection
