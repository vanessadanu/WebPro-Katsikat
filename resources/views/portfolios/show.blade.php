@extends('layouts.app')

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
                                <img src="{{ asset('$data->image_file_url') }}" alt="" width="w-full" class="w-100 border-radius-lg shadow-sm">
                                <p class="text-xs text-secondary mb-0" style="font-size: 9px">
                                    {{ $data->image_file_url }}&nbsp;&nbsp;&nbsp;</p>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $data->title }}</h5>
                                    <p class="card-text">{{ $data->description }}</p>
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
