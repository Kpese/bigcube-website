@extends('admin.layout.app')

@section('content')

<section class="section">
    <div class="row">

      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit Section</h5>

            <!-- Vertical Form -->
            <form class="row g-3" action="{{ route('section.update', $section->id) }}" method="post">
                @csrf

                <div class="col-lg-6 col-sm-12">
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Section Name</label>
                        <input type="text" name="name" value="{{ $section->name }}" class="form-control">
                      </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Section Icons</label>
                        <input type="text" name="icon" value="{{ $section->icon }}" class="form-control">
                      </div>
                </div>


              <div class="col-12 mt-3 text-center">
                <button type="submit" class="btn btn-primary btn-md">Update Section</button>
              </div>
            </form><!-- Vertical Form -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
