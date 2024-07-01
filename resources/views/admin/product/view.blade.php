@extends('admin.layout.app')

@section('content')


<div class="col-12">
    @include('sweetalert::alert')
    <div class="card">
        <div class="card-body">

            <h5 class="card-title">Product Page</h5>

<table class="table table-bordered">
<thead>
<tr>
    <th scope="col">Name</th>
    <th scope="col">Section_Menu</th>
    <th scope="col">Image</th>
    <th scope="col">Price</th>
    <th scope="col">Created Time</th>
    <th scope="col">Action</th>
</tr>
</thead>
<tbody>
@forelse ($product as $item)
  <tr>
<td>{{ $item->name }}</td>
<td>{{ $item->section_id }}</td>
<td>
  @if ($item->image)
  <img src="{{ asset('images/products/'.$item->image) }}" width="70px" height="70px" style="border-radius: 10px" alt="product image">
  @endif
</td>
<td>{{ $item->price }}</td>
<td>{{ $item->created_at->diffForHumans() }}</td>
<td>
  <form action="{{ route('product.delete', $item->id) }}" class="d-flex" method="post">
  @method('delete')
  @csrf
  <a href="{{ route('product.edit', $item->slug) }}" class="btn btn-primary px-4 pt-2 text-center">EDIT</a><br> <br>
  <button type="submit" onclick=" return confirm('Are you sure you want to delete product?')" class="btn btn-danger ms-2">DELETE</button>
  </form>
 </td>
@empty
<td>record is empty</td>
</tr>

@endforelse
</tbody>
</table>

</div>
</div>

</div>


@endsection
