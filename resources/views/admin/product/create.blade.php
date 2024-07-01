@extends('admin.layout.app')

@section('content')


    <div class="row p-5">

        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add New Product</h5>
                    <!-- Vertical Form -->
                    <form class="row" action="{{ route('product.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12 mb-3">
                            <label for="inputNanme4" class="form-label">Product Name</label>
                            <input type="text" class="w-100 py-1" name="name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="w-100 py-1" name="image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" class="w-100 py-1" name="price">
                            @error('price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Section_menu</label> <br>
                            <select name="section_id" >
                                <option value="">Choose Section</option>
                                @foreach ($section as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('section_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>

        </div>
    </div>

@endsection
