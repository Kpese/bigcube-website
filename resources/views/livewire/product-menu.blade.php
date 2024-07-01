<div>
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
        <h1 class="mb-5">Most Popular Items</h1>
    </div>
    <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
        <div class="tab-content">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                @foreach ($sections as $section)
                <li class="nav-item mb-3">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 {{ $sectionId == $section->id ? 'active' : '' }}" href="javascript:void(0);" wire:click="filterProducts({{ $section->id }})">
                        {!! $section->icon !!}
                        <div class="ps-3">
                            <h6 class="mt-n1 mb-0">{{ $section->name }}</h6>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
            <div id="products-container">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($products as $product)
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('images/products/'.$product->image)}}" width="90px" height="90px" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>{{ $product->name }}</span>
                                        <span class="text-primary">₦{{ $product->price }}</span>
                                    </h5>

                                    <div>
                                        <form action="{{ route('add_cart', $product->id) }}" method="post">
                                            @csrf
                                            <div class="input-group mb-3" style="max-width: 150px;">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                                </div>
                                                <input type="text" name="quantity" class="form-control text-center" value="1" placeholder=""
                                                    aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                                </div>
                                            </div>
                                            <button class="buy-now btn btn-sm px-3 py-2 btn-primary">Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-5">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
