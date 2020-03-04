@extends('front.layout.template')

@section('main-content')
    <div class="site__body">
        <div class="page-header">
            <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Breadcrumb</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $product['name'] }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="product product--layout--standard" data-layout="standard">
                    <div class="product__content"><!-- .product__gallery -->
                        <div class="product__gallery">
                            <div class="product-gallery">
                                <div class="product-gallery__featured">
                                    <button class="product-gallery__zoom">
                                        <svg width="24px" height="24px">
                                            <use xlink:href="{{ asset('images/sprite.svg#zoom-in-24') }}"></use>
                                        </svg>
                                    </button>
                                    <div class="owl-carousel" id="product-image">
                                        <a href="images/products/product-16.jpg" target="_blank">
                                            <img src="{{ $product['feather_image'] }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .product__gallery / end --><!-- .product__info -->
                        <div class="product__info">
                            <div class="product__wishlist-compare">
                                <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip"
                                        data-placement="right" title="Wishlist">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip"
                                        data-placement="right" title="Compare">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                    </svg>
                                </button>
                            </div>
                            <h1 class="product__name">{{ $product['name'] }}</h1>
                            <div class="product__description">
                                {{ $product['sort_description'] }}
                            </div>
                        </div><!-- .product__info / end --><!-- .product__sidebar -->
                        <div class="product__sidebar">
                            <div class="product__availability">Availability: <span class="text-success">In Stock</span>
                            </div>
                            <div class="product__prices">$1,499.00</div><!-- .product__options -->
                            <form class="product__options">
                                <div class="form-group product__option"><label class="product__option-label"
                                                                               for="product-quantity">Quantity</label>
                                    <div class="product__actions">
                                        <div class="product__actions-item">
                                            <div class="input-number product__quantity"><input id="product-quantity"
                                                                                               class="input-number__input form-control form-control-lg"
                                                                                               type="number" min="1"
                                                                                               value="1">
                                                <div class="input-number__add"></div>
                                                <div class="input-number__sub"></div>
                                            </div>
                                        </div>
                                        <div class="product__actions-item product__actions-item--addtocart">
                                            <button class="btn btn-primary btn-lg">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                </div>
                </div>
                <div class="product-tabs">
                    <div class="product-tabs__list"><a href="#tab-description"
                                                       class="product-tabs__item product-tabs__item--active">Mô tả</a>
                    </div>
                    <div class="product-tabs__content">
                        <div class="product-tabs__pane product-tabs__pane--active" id="tab-description">
                            {!!  $product['description'] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .block-products-carousel -->
    </div>
@endsection