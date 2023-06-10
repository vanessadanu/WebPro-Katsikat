@extends('layouts.app')
@section('dashboard nav', 'collapsed')
@section('portfolio nav', 'collapsed')
@section('categories nav', '')
@section('profile nav', 'collapsed')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Categories</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Categories</li>
                </ol>
            </nav>

            @include('_modules.alert')

            <a href="{{ route('categories.create') }}" enctype="multipart/form-data" type="button" class="btn btn-primary mb-3"><i
                    class="bi bi-plus-circle"></i> Add new</a>
            <div class="card">
                <div class="card-body">
                    <table class="table datatable">
                        <h5 class="card-title">Portfolio's Categories</h5>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', $item->id) }}" class="btn btn-warning"><i
                                                class="bi bi-pen"></i> Edit</a>

                                        <a class="btn btn-danger"
                                            onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this item?')){ document.getElementById('delete-category-{{ $item->id }}').submit() }"><i
                                                class="bi bi-trash"></i> Delete</a>
                                        <form id="delete-category-{{ $item->id }}"
                                            action="{{ route('categories.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" align="center">No Data</td>
                                  </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>
@endsection
