@extends('admin.layout.app')

@section('content')


    <div class="row p-5">

        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add New Section</h5>

                    <form class="row" action="{{ route('section.create') }}" method="post">
                        @csrf
                        <div class="col-12 mb-3">
                            <label for="inputNanme4" class="form-label">Section Name</label>
                            <input type="text" required class="w-100 py-1" name="name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label for="inputNanme4" class="form-label">Section Icons</label>
                            <input type="text" required class="w-100 py-1" name="icon">
                            @error('icon')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Add Section</button>
                        </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>

        </div>
    </div>

@endsection
