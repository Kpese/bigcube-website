@extends('admin.layout.app')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Product Lists
                  </h5>
                  <div class="table-responsive">
                    <table id="example" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Customer Email</th>
                                        <th scope="col">Customer Address</th>
                                        <th scope="col">Customer Phone</th>
                                        <th scope="col">Product Image</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Receipt</th>
                                        <th scope="col">Payment Status</th>
                                        <th scope="col">Confirm Payment</th>
                                        <th scope="col">Created Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($order as $item)
                                        <tr>
                                            <td class="P-2"> {{ $item->customer_name }}</td>
                                            <td>{{ $item->customer_email}}</td>
                                            <td>{{ $item->customer_address}}</td>
                                            <td>{{ $item->customer_phone}}</td>
                                           <td>
                                             @if (!empty($item->product_image))
                                                <img src="{{ asset('images/products/'.$item->product_image) }}" style="width: 50px; height:50px" alt="">
                                            @endif
                                            </td>
                                            <td>{{ $item->product_name}}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->quantity}}</td>
                                            <td>
                                                @if (!empty($item->receipt))
                                                    <a href="{{ asset('images/receipt/' . $item->receipt) }}" download="{{ $item->receipt }}">
                                                        <img src="{{ asset('images/receipt/' . $item->receipt) }}" style="width: 50px; height:50px" alt="">
                                                    </a>
                                                @endif
                                            </td>

                                            <td>
                                                @if($item->delivery_status === 'Paid')
                                                <p class="text-success">paid</p>
                                                @else
                                                    {{ $item->payment_status }}
                                                @endif
                                                </td>

                                            <td>
                                            @if($item->payment_status === 'Paid')
                                            <p class="text-success">paid</p>
                                            @else
                                            <a href="{{ route('paid', $item->id) }}" onclick="return confirm('Are you sure this product is paid for?')" class="btn btn-primary btn-sm">Confirm Payment</a>

                                            @endif
                                            </td>

                                                <td>{{ $item->created_at->diffForHumans() }}</td>
                                           </tr>
                                    @empty
                                        <tr>
                                            <td colspan="100%">Record not found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
