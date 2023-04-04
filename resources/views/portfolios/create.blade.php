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

            <div class="col-lg-6">

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Vertical Form</h5>
      
                    <!-- Vertical Form -->
                    <form class="row g-3">
                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="inputNanme4">
                      </div>
                      <div class="col-12">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                      </div>
                      <div class="col-12">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                      </div>
                      <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                      </div>
                    </form><!-- Vertical Form -->
      
                  </div>
                </div>

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

            <table class="table table-hover table-bordered">
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
        </div><!-- End Page Title -->

    </main>
@endsection
