
@extends('front.layout.template')
@section('main-content')

    <div class="site__body"><!-- .block-slideshow -->
        <div class="block-slideshow block-slideshow--layout--with-departments block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block"></div>
                    <div class="col-12 col-lg-9">
                        <div class="block-slideshow__body">
                            <div class="owl-carousel"><a class="block-slideshow__slide" href="#">
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('images/slides/slide-1.jpg')"></div>
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('images/slides/slide-1-mobile.jpg')"></div>
                                    <div class="block-slideshow__slide-content">
                                        <div class="block-slideshow__slide-title">Big choice of<br>Plumbing products</div>
                                        <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.</div>
                                        <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Shop Now</span></div>
                                    </div>
                                </a><a class="block-slideshow__slide" href="#">
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('images/slides/slide-2.jpg')"></div>
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('images/slides/slide-2-mobile.jpg')"></div>
                                    <div class="block-slideshow__slide-content">
                                        <div class="block-slideshow__slide-title">Screwdrivers<br>Professional Tools</div>
                                        <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.</div>
                                        <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Shop Now</span></div>
                                    </div>
                                </a><a class="block-slideshow__slide" href="#">
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('images/slides/slide-3.jpg')"></div>
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('images/slides/slide-3-mobile.jpg')"></div>
                                    <div class="block-slideshow__slide-content">
                                        <div class="block-slideshow__slide-title">One more<br>Unique header</div>
                                        <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.</div>
                                        <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Shop Now</span></div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .block-slideshow / end --><!-- .block-features -->
        <div class="block block-features block-features--layout--classic">
            <div class="container">
                <div class="block-features__list">
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg width="48px" height="48px">
                                <use xlink:href="images/sprite.svg#fi-free-delivery-48"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">Free Shipping</div>
                            <div class="block-features__subtitle">For orders from $50</div>
                        </div>
                    </div>
                    <div class="block-features__divider"></div>
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg width="48px" height="48px">
                                <use xlink:href="images/sprite.svg#fi-24-hours-48"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">Support 24/7</div>
                            <div class="block-features__subtitle">Call us anytime</div>
                        </div>
                    </div>
                    <div class="block-features__divider"></div>
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg width="48px" height="48px">
                                <use xlink:href="images/sprite.svg#fi-payment-security-48"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">100% Safety</div>
                            <div class="block-features__subtitle">Only secure payments</div>
                        </div>
                    </div>
                    <div class="block-features__divider"></div>
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg width="48px" height="48px">
                                <use xlink:href="images/sprite.svg#fi-tag-48"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">Hot Offers</div>
                            <div class="block-features__subtitle">Discounts up to 90%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .block-features / end --><!-- .block-products-carousel -->
        <div class="block block-products-carousel" data-layout="grid-4">
            <div class="container">
                <div class="block-header"><h3 class="block-header__title">Featured Products</h3>
                    <div class="block-header__divider"></div>
                    <ul class="block-header__groups-list">
                        <li>
                            <button type="button" class="block-header__group block-header__group--active">All</button>
                        </li>
                        <li>
                            <button type="button" class="block-header__group">Power Tools</button>
                        </li>
                        <li>
                            <button type="button" class="block-header__group">Hand Tools</button>
                        </li>
                        <li>
                            <button type="button" class="block-header__group">Plumbing</button>
                        </li>
                    </ul>
                    <div class="block-header__arrows-list">
                        <button class="block-header__arrow block-header__arrow--left" type="button">
                            <svg width="7px" height="11px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                            </svg>
                        </button>
                        <button class="block-header__arrow block-header__arrow--right" type="button">
                            <svg width="7px" height="11px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="block-products-carousel__slider">
                    <div class="block-products-carousel__preloader"></div>
                    <div class="owl-carousel">
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--new">New</div>
                                    </div>
                                    <div class="product-card__image"><a href="product.html"><img src="images/products/product-1.jpg" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a></div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$749.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--hot">Hot</div>
                                    </div>
                                    <div class="product-card__image"><a href="product.html"><img src="images/products/product-2.jpg" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Undefined Tool IRadix DPS3000SY 2700 Watts</a></div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">11 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$1,019.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img src="images/products/product-3.jpg" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Drill Screwdriver Brandix ALX7054 200 Watts</a></div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$850.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--sale">Sale</div>
                                    </div>
                                    <div class="product-card__image"><a href="product.html"><img src="images/products/product-4.jpg" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Drill Series 3 Brandix KSR4590PQS 1500 Watts</a></div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">7 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                        <div class="product-card__prices"><span class="product-card__new-price">$949.00</span> <span class="product-card__old-price">$1189.00</span></div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img src="images/products/product-5.jpg" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Router Power Tool 2017ERXPK</a></div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$1,700.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img src="images/products/product-6.jpg" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Drilling Machine DM2019KW4 4kW</a></div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">7 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$3,199.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img src="images/products/product-7.jpg" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Pliers</a></div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">4 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$24.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img src="images/products/product-8.jpg" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Water Hose 40cm</a></div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">4 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$15.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img src="images/products/product-9.jpg" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Spanner Wrench</a></div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$19.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img src="images/products/product-10.jpg" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Water Tap</a></div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">11 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$15.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img src="images/products/product-11.jpg" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Hand Tool Kit</a></div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$149.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img src="images/products/product-12.jpg" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Ash's Chainsaw 3.5kW</a></div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">11 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$666.99</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img src="images/products/product-13.jpg" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Angle Grinder KZX3890PQW</a></div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">4 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$649.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img src="images/products/product-14.jpg" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Air Compressor DELTAKX500</a></div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">7 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$1,800.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img src="images/products/product-15.jpg" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Electric Jigsaw JIG7000BQ</a></div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">4 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$290.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__image"><a href="product.html"><img src="images/products/product-16.jpg" alt=""></a></div>
                                    <div class="product-card__info">
                                        <div class="product-card__name"><a href="product.html">Brandix Screwdriver SCREW1500ACC</a></div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">11 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$1,499.00</div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .block-products-carousel / end --><!-- .block-banner -->
        <div class="block block-banner">
            <div class="container"><a href="#" class="block-banner__body">
                    <div class="block-banner__image block-banner__image--desktop" style="background-image: url('images/banners/banner-1.jpg')"></div>
                    <div class="block-banner__image block-banner__image--mobile" style="background-image: url('images/banners/banner-1-mobile.jpg')"></div>
                    <div class="block-banner__title">Hundreds<br class="block-banner__mobile-br">Hand Tools</div>
                    <div class="block-banner__text">Hammers, Chisels, Universal Pliers, Nippers, Jigsaws, Saws</div>
                    <div class="block-banner__button"><span class="btn btn-sm btn-primary">Shop Now</span></div>
                </a></div>
        </div><!-- .block-banner / end --><!-- .block-products -->
        <div class="block block-products block-products--layout--large-first">
            <div class="container">
                <div class="block-header"><h3 class="block-header__title">Bestsellers</h3>
                    <div class="block-header__divider"></div>
                </div>
                <div class="block-products__body">
                    <div class="block-products__featured">
                        <div class="block-products__featured-item">
                            <div class="product-card">
                                <button class="product-card__quickview" type="button">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span></button>
                                <div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--new">New</div>
                                </div>
                                <div class="product-card__image"><a href="product.html"><img src="images/products/product-1.jpg" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a></div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card__rating-legend">9 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                    <div class="product-card__prices">$749.00</div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-products__list">
                        <div class="block-products__list-item">
                            <div class="product-card">
                                <button class="product-card__quickview" type="button">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span></button>
                                <div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--hot">Hot</div>
                                </div>
                                <div class="product-card__image"><a href="product.html"><img src="images/products/product-2.jpg" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="product.html">Undefined Tool IRadix DPS3000SY 2700 Watts</a></div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card__rating-legend">11 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                    <div class="product-card__prices">$1,019.00</div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products__list-item">
                            <div class="product-card">
                                <button class="product-card__quickview" type="button">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span></button>
                                <div class="product-card__image"><a href="product.html"><img src="images/products/product-3.jpg" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="product.html">Drill Screwdriver Brandix ALX7054 200 Watts</a></div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card__rating-legend">9 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                    <div class="product-card__prices">$850.00</div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products__list-item">
                            <div class="product-card">
                                <button class="product-card__quickview" type="button">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span></button>
                                <div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--sale">Sale</div>
                                </div>
                                <div class="product-card__image"><a href="product.html"><img src="images/products/product-4.jpg" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="product.html">Drill Series 3 Brandix KSR4590PQS 1500 Watts</a></div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card__rating-legend">7 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                    <div class="product-card__prices"><span class="product-card__new-price">$949.00</span> <span class="product-card__old-price">$1189.00</span></div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products__list-item">
                            <div class="product-card">
                                <button class="product-card__quickview" type="button">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span></button>
                                <div class="product-card__image"><a href="product.html"><img src="images/products/product-5.jpg" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="product.html">Brandix Router Power Tool 2017ERXPK</a></div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card__rating-legend">9 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                    <div class="product-card__prices">$1,700.00</div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products__list-item">
                            <div class="product-card">
                                <button class="product-card__quickview" type="button">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span></button>
                                <div class="product-card__image"><a href="product.html"><img src="images/products/product-6.jpg" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="product.html">Brandix Drilling Machine DM2019KW4 4kW</a></div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card__rating-legend">7 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                    <div class="product-card__prices">$3,199.00</div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products__list-item">
                            <div class="product-card">
                                <button class="product-card__quickview" type="button">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span></button>
                                <div class="product-card__image"><a href="product.html"><img src="images/products/product-7.jpg" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="product.html">Brandix Pliers</a></div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card__rating-legend">4 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                    <div class="product-card__prices">$24.00</div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .block-products / end --><!-- .block-categories -->
    </div><!-- site__body / end --><!-- site__footer -->

@endsection

@section('others')
    <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content"></div>
        </div>
    </div>
    <div class="header-nav container-vertical-wapper">
        <div class="header-nav-inner">
            <div class="box-header-nav">
                <div class=" container-wapper">
                    <a href="#" class="header-top-menu-mobile"><span class="fa fa-cog" aria-hidden="true"></span></a>
                    <ul id="menu-main-menu" class="main-menu clone-main-menu ovic-clone-mobile-menu box-has-content">
                        <li class="menu-item">
                            <a href="index.html" class="kt-item-title ovic-menu-item-title" title="Home">HOME</a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#" class="kt-item-title ovic-menu-item-title" title="Sắt">Sắt</a>
                            <ul class="sub-menu mega-menu">
                                <li class="col-xs-12 col-sm-12 col-md-12 col-lg-15">
                                    <a href="index.html" class="sub-menu--title"><span class="number">1. </span>Thợ cơ khí</a>
                                    <div class="sub-menu--content clearfix">
                                        <a href="index.html">
                                            <div class="sub-menu--item">
                                                <img src="images/home1.jpg" alt="">
                                                <span class="sub-menu--item--title">Home default Home default</span>
                                            </div>
                                        </a>
                                        <a href="index.html">
                                            <div class="sub-menu--item">
                                                <img src="images/home1.jpg" alt="">
                                                <span class="sub-menu--item--title">Home default</span>
                                            </div>
                                        </a>
                                        <a href="index.html">
                                            <div class="sub-menu--item">
                                                <img src="images/home1.jpg" alt="">
                                                <span class="sub-menu--item--title">Home default Home default Home default</span>
                                            </div>
                                        </a>
                                        <a href="index.html">
                                            <div class="sub-menu--item">
                                                <img src="images/home1.jpg" alt="">
                                                <span class="sub-menu--item--title">Máy aaa</span>
                                            </div>
                                        </a>
                                        <a href="index.html">
                                            <div class="sub-menu--item">
                                                <img src="images/home1.jpg" alt="">
                                                <span class="sub-menu--item--title">Máy aaa</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-12 col-lg-15 demo-item">
                                    <a href="index2.html" class="demo-title"><span class="number">2. </span>Thợ mộc</a>
                                    <a href="index2.html"><img src="images/home2.jpg" alt=""></a>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-12 col-lg-15 demo-item">
                                    <a href="index3.html" class="demo-title"><span class="number">3. </span> Digital Store</a>
                                    <a href="index3.html"><img src="images/home3.jpg" alt=""></a>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-12 col-lg-15 demo-item">
                                    <a href="index4.html" class="demo-title"><span class="number">4. </span>Digital Store</a>
                                    <a href="index4.html"><img src="images/home4.jpg" alt=""></a>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-12 col-lg-15 demo-item">
                                    <a href="index5.html" class="demo-title"><span class="number">5. </span>Dark Version</a>
                                    <a href="index5.html"><img src="images/home5.jpg" alt=""></a>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-12 col-lg-15 demo-item">
                                    <a href="index6.html" class="demo-title"><span class="number">6. </span>Digital Store</a>
                                    <a href="index6.html"><img src="images/home6.jpg" alt=""></a>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-12 col-lg-15 demo-item">
                                    <a href="index7.html" class="demo-title"><span class="number">7. </span>Digital Store</a>
                                    <a href="index7.html"><img src="images/home7.jpg" alt=""></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#" class="kt-item-title ovic-menu-item-title" title="PAGES">PAGES</a>
                            <ul class="sub-menu">
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="detail.html">Detail</a></li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="grid.html" class="kt-item-title ovic-menu-item-title" title="Grid">Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="grid.html">Grid</a></li>
                                        <li><a href="grid-right.html">Grid Right</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="list.html" class="kt-item-title ovic-menu-item-title" title="List">List</a>
                                    <ul class="sub-menu">
                                        <li><a href="list.html">List</a></li>
                                        <li><a href="list-right.html">List Right</a></li>
                                    </ul>
                                </li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="search-result.html">Search Result</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#" class="kt-item-title ovic-menu-item-title" title="Sub Menu"> Sub Menu </a>
                            <ul class="sub-menu">
                                <li><a href="#">Cameras</a></li>
                                <li><a href="#">Tv & Audi0</a></li>
                                <li><a href="#">Laptop & Computer</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li class="menu-item menu-item-has-children">
                                    <a class="kt-item-title ovic-menu-item-title" title="Smartphone & Table" href="#">Smartphone & Table</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Phone Batteries</a></li>
                                        <li><a href="#">Phone Charger</a></li>
                                        <li><a href="#">Phone Screen</a></li>
                                        <li><a href="#">HeadSet</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Printer & ink</a></li>
                                <li><a href="#">Game & Consoles</a></li>
                                <li><a href="#">Memory Stick</a></li>
                                <li><a href="#">Headphone</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#" class="kt-item-title ovic-menu-item-title" title="Megamenu">Megamenu </a>
                            <div class="sub-menu mega-menu mega-menu1">
                                <div class="row">
                                    <div class="widget-custom-menu col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                        <h5 class="title widgettitle">Laptop & Tablet</h5>
                                        <ul>
                                            <li><a href="#">Laptops, Desktops & Monitors</a></li>
                                            <li><a href="#">Printers & Ink</a></li>
                                            <li><a href="#">Computer Accessories</a></li>
                                            <li><a href="#">Software</a></li>
                                            <li><a href="#">Macbook</a></li>
                                            <li><a href="#">Macbook Air</a></li>
                                            <li><a href="#">Laptop Pro</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget-custom-menu col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                        <h5 class="title widgettitle">TV & Audio</h5>
                                        <ul>
                                            <li><a href="#">Mouse</a></li>
                                            <li><a href="#">Printer and Accessories</a></li>
                                            <li><a href="#">Network Equipment</a></li>
                                            <li><a href="#">Computer Components</a></li>
                                            <li><a href="#">Memory Stick</a></li>
                                            <li><a href="#">Selfie Stick</a></li>
                                            <li><a href="#">Binoculars</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget-custom-menu col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                        <h5 class="title widgettitle">Smartphone</h5>
                                        <ul>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Phone Batteries</a></li>
                                            <li><a href="#">Phone Charger</a></li>
                                            <li><a href="#">Phone Screen</a></li>
                                            <li><a href="#">Head Set</a></li>
                                            <li><a href="#">Software</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="widget-custom-menu col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                        <h5 class="title widgettitle">Headphone</h5>
                                        <ul>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Phone Batteries</a></li>
                                            <li><a href="#">Phone Charger</a></li>
                                            <li><a href="#">Phone Screen</a></li>
                                            <li><a href="#">Head Set</a></li>
                                            <li><a href="#">Software</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget-custom-menu col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                        <h5 class="title widgettitle">Camera</h5>
                                        <ul>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Phone Batteries</a></li>
                                            <li><a href="#">Phone Charger</a></li>
                                            <li><a href="#">Phone Screen</a></li>
                                            <li><a href="#">Head Set</a></li>
                                            <li><a href="#">Software</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget-custom-menu col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                        <h5 class="title widgettitle">Printer & ink</h5>
                                        <ul>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Phone Batteries</a></li>
                                            <li><a href="#">Phone Charger</a></li>
                                            <li><a href="#">Phone Screen</a></li>
                                            <li><a href="#">Head Set</a></li>
                                            <li><a href="#">Software</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item"><a href="contact.html">Contact US</a></li>
                        <li class="menu-item menu-item-has-children">
                            <a href="ourblog.html" class="kt-item-title ovic-menu-item-title" title="Blog">BLOG</a>
                            <ul class="sub-menu">
                                <li><a href="ourblog.html">Our Blog</a></li>
                                <li><a href="blogpost.html">Blog Post</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button><!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
@endsection