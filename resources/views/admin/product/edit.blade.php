@extends('admin.layout.app')

@section('content')

<section class="section">
    <div class="row">

      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit Product</h5>

            <!-- Vertical Form -->
            <form class="row g-3" action="{{ route('product.update', $product->slug) }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="col-lg-6 col-sm-12">
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Product Name</label>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                      </div>

                      <div class="col-12 mb-3">
                          <label class="form-label fw-bold">Product Image</label>
                          <input type="file" name="image" class="form-control">
                        <div class="mt-2">
                            @if($product->image)
                            <img src="{{ asset('images/products/'.$product->image) }}" style="border-radius: 10px" width="100px" height="100px" alt="">
                            @endif
                        </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" required class="w-100 py-1" value="{{ $product->price }}" name="price">
                            @error('price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                </div>


              <div class="col-12 mt-3 text-center">
                <button type="submit" class="btn btn-primary btn-md">Update Product</button>
              </div>
            </form><!-- Vertical Form -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
