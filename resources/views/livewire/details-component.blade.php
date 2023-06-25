<div>
<main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Fashion
                    <span></span> Abstract Print Patchwork Dress
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/shop/product-') }}{{$product->id}}-2.jpg" alt="product image">
                                            </figure>

                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Share this:</strong></li>
                                            <li class="social-facebook"><a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a></li>
                                            <li class="social-twitter"> <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{$product->name}}</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span> marque : <a href="shop.html">{{$product->marque}}</a></span>
                                            </div>
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">${{$product->regular_price}}</span></ins>

                                            </div>
                                        </div>
                                        <div class="attr-detail attr-color mb-15">
                                            <strong class="mr-10">Color</strong>
                                            <ul class="list-filter color-filter">
                                                <li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>
                                                <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>
                                                <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
                                                <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
                                                <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
                                                <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>
                                                <li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="attr-detail attr-size">
                                            <strong class="mr-10">Size</strong>
                                            <ul class="list-filter size-filter font-small">
                                                <li><a href="#">S</a></li>
                                                <li class="active"><a href="#">M</a></li>
                                                <li><a href="#">L</a></li>
                                                <li><a href="#">XL</a></li>
                                                <li><a href="#">XXL</a></li>
                                            </ul>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-30 mb-4"></div>
                                        <div class="detail-extralink">
                                            <div class="detail-qty border radius">
                                                <a href="#" class="qty-down" wire:click.prevent="decrementQuantity"><i class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val" wire:model="Quantité">{{ max(1, $Quantité) }}</span>
                                                <a href="#" class="qty-up" wire:click.prevent="incrementQuantity"><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                            <div class="product-extra-link2">
                                                    <button wire:click="addToCart" type="submit" class="button button-add-to-cart ">Add to cart</button>
                                            </div>
                                        </div>
                                        <ul class="product-meta font-xs color-grey mt-10">
                                            <li class="mb-5">SKU: <a href="#">{{$product->SKU}}</a></li>
                                            <li class="mb-5">Poids: <a href="#">{{$product->poids}}</a></li>
                                            <li class="mb-5">TVA: <a href="#">{{$product->tva}}</a></li>
                                            <li class="mb-5">Featured: <a href="#">{{$product->featured}}</a></li>
                                            <li class="mb-5">slug: <a href="#" rel="tag">{{$product->slug}}</a>, <a href="#" rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li>
                                            <li>Availability:<span class="in-stock text-success ml-5">{{$product->quantity}} products In Stock</span></li>
                                        </ul>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                        <div class="">
                                            {{$product->description}}
                                    </div>


                </div>
            </div>
        </section>
    </main>
</div>
