@extends('layouts.app')
@section('dashboard nav', 'collapsed')
@section('portfolio nav', 'collapsed')
@section('services nav', '')
@section('profile nav', 'collapsed')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Services</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Services</li>
                </ol>
            </nav>

            @include('_modules.alert')

            <a href="{{ route('services.create') }}" enctype="multipart/form-data" type="button"
                class="btn btn-primary mb-3"><i class="bi bi-plus-circle"></i> Add new</a>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <h5 class="card-title">Portfolio's Services</h5>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($services as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <a href="{{ route('services.edit', $item->id) }}" class="btn btn-warning"><i
                                                class="bi bi-pen"></i> Edit</a>
                                        <a class="btn btn-danger"
                                            onclick="showDeleteConfirmation('delete-service-{{ $item->id }}'); { document.getElementById('delete-service-{{ $item->id }}').submit() }"><i
                                                class="bi bi-trash"></i> Delete</a>
                                        <form id="delete-service-{{ $item->id }}"
                                            action="{{ route('services.destroy', $item->id) }}" method="post">
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
