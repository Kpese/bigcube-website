@extends('admin.layout.app')

@section('content')


<div class="col-12">
    @include('sweetalert::alert')
    <div class="card">
        <div class="card-body">

            <h5 class="card-title">Section Page</h5>

<table class="table table-bordered">
<thead>
<tr>
    <th scope="col">Name</th>
    <th scope="col">Icons</th>
    <th scope="col">Created Time</th>
    <th scope="col">Action</th>
</tr>
</thead>
<tbody>
@forelse ($section as $item)
  <tr>
<td>{{ $item->name }}</td>
<td>{{ $item->icon}}</td>
<td>{{ $item->created_at->diffForHumans() }}</td>
<td>
  <form action="{{ route('section.delete', $item->id) }}" class="d-flex" method="post">
  @method('delete')
  @csrf
  <a href="{{ route('section.edit', $item->id) }}" class="btn btn-primary px-4 pt-2 text-center">EDIT</a><br> <br>
  <button type="submit" onclick=" return confirm('Are you sure you want to delete section?')" class="btn btn-danger ms-2">DELETE</button>
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
