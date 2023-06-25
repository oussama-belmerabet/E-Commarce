

<div>
<main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center  my-4 mx-4 rounded-md border-gray-900">
            <div class="search-style-1 p-3 rounded-pill">
                <input wire:model="search" type="text" class="form-control border rounded-lg  border-black text-black bold text-bold placeholder-custom" placeholder="Search for products...">
            </div>
        </div>

        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p> We found <strong class="text-brand">{{$products->count()}}</strong> product for you!</p>
                            </div>
                            <div class="sort-by-product-area">
                                <div class="sort-by-cover mr-10">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps"></i>Show:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">50</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sort-by-cover">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">Featured</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-3">

                            @foreach($products as $product)
                            <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            @auth
                                            <a href="{{route('product.details',['slug'=>$product->slug])}}">
                                                <img class="default-img" src="{{ asset('assets/imgs/shop/product-')}}{{$product->id}}-1.jpg" alt="{{$product->name}}">
                                                <img class="hover-img" src="{{ asset('assets/imgs/shop/product-')}} {{$product->id}}-2.jpg" alt="{{$product->name}}">
                                            </a>
                                            @else
                                            <a href="{{ route('login') }}">
                                                <img class="default-img" src="{{ asset('assets/imgs/shop/product-') }}{{ $product->id }}-1.jpg" alt="{{ $product->name }}">
                                                <img class="hover-img" src="{{ asset('assets/imgs/shop/product-') }} {{ $product->id }}-2.jpg" alt="{{ $product->name }}">
                                            </a>
                                            @endauth

                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Music</a>
                                        </div>
                                        <h2><a href="product-details.html">{{$product->name}}</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>{{$product->regular_price}}</span>
                                           {{-- <span class="old-price">$245.8</span> --}}
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            {{$products->links()}}
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
</div>
