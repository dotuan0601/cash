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
                            <li class="breadcrumb-item active" aria-current="page">Screwdrivers</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title"><h1>Screwdrivers</h1></div>
            </div>
        </div>
        <div class="container">
            <div class="shop-layout shop-layout--sidebar--start">
                <div class="shop-layout__sidebar">
                    <div class="block block-sidebar block-sidebar--offcanvas--mobile">
                        <div class="block-sidebar__backdrop"></div>
                        <div class="block-sidebar__body">
                            <div class="block-sidebar__header">
                                <div class="block-sidebar__title">Filters</div>
                                <button class="block-sidebar__close" type="button">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="images/sprite.svg#cross-20"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="block-sidebar__item">
                                <div class="widget-filters widget widget-filters--offcanvas--mobile" data-collapse
                                     data-collapse-opened-class="filter--opened"><h4
                                            class="widget-filters__title widget__title">Filters</h4>
                                    <div class="widget-filters__list">
                                        <div class="widget-filters__item">
                                            <div class="filter filter--opened" data-collapse-item>
                                                <button type="button" class="filter__title" data-collapse-trigger>
                                                    Categories
                                                    <svg class="filter__arrow" width="12px" height="7px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                    </svg>
                                                </button>
                                                <div class="filter__body" data-collapse-content>
                                                    <div class="filter__container">
                                                        <div class="filter-categories">
                                                            <ul class="filter-categories__list">
                                                                <li class="filter-categories__item filter-categories__item--parent">
                                                                    <svg class="filter-categories__arrow" width="6px"
                                                                         height="9px">
                                                                        <use xlink:href="images/sprite.svg#arrow-rounded-left-6x9"></use>
                                                                    </svg>
                                                                    <a href="#">Construction & Repair</a>
                                                                    <div class="filter-categories__counter">254</div>
                                                                </li>
                                                                <li class="filter-categories__item filter-categories__item--parent">
                                                                    <svg class="filter-categories__arrow" width="6px"
                                                                         height="9px">
                                                                        <use xlink:href="images/sprite.svg#arrow-rounded-left-6x9"></use>
                                                                    </svg>
                                                                    <a href="#">Instruments</a>
                                                                    <div class="filter-categories__counter">75</div>
                                                                </li>
                                                                <li class="filter-categories__item filter-categories__item--current">
                                                                    <a href="#">Power Tools</a>
                                                                    <div class="filter-categories__counter">21</div>
                                                                </li>
                                                                <li class="filter-categories__item filter-categories__item--child">
                                                                    <a href="#">Drills & Mixers</a>
                                                                    <div class="filter-categories__counter">15</div>
                                                                </li>
                                                                <li class="filter-categories__item filter-categories__item--child">
                                                                    <a href="#">Cordless Screwdrivers</a>
                                                                    <div class="filter-categories__counter">2</div>
                                                                </li>
                                                                <li class="filter-categories__item filter-categories__item--child">
                                                                    <a href="#">Screwdrivers</a>
                                                                    <div class="filter-categories__counter">30</div>
                                                                </li>
                                                                <li class="filter-categories__item filter-categories__item--child">
                                                                    <a href="#">Wrenches</a>
                                                                    <div class="filter-categories__counter">7</div>
                                                                </li>
                                                                <li class="filter-categories__item filter-categories__item--child">
                                                                    <a href="#">Grinding Machines</a>
                                                                    <div class="filter-categories__counter">5</div>
                                                                </li>
                                                                <li class="filter-categories__item filter-categories__item--child">
                                                                    <a href="#">Milling Cutters</a>
                                                                    <div class="filter-categories__counter">2</div>
                                                                </li>
                                                                <li class="filter-categories__item filter-categories__item--child">
                                                                    <a href="#">Electric Spray Guns</a>
                                                                    <div class="filter-categories__counter">9</div>
                                                                </li>
                                                                <li class="filter-categories__item filter-categories__item--child">
                                                                    <a href="#">Jigsaws</a>
                                                                    <div class="filter-categories__counter">4</div>
                                                                </li>
                                                                <li class="filter-categories__item filter-categories__item--child">
                                                                    <a href="#">Jackhammers</a>
                                                                    <div class="filter-categories__counter">0</div>
                                                                </li>
                                                                <li class="filter-categories__item filter-categories__item--child">
                                                                    <a href="#">Planers</a>
                                                                    <div class="filter-categories__counter">12</div>
                                                                </li>
                                                                <li class="filter-categories__item filter-categories__item--child">
                                                                    <a href="#">Glue Guns</a>
                                                                    <div class="filter-categories__counter">7</div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-layout__content">
                    <div class="block">
                        <div class="products-view">
                            <div class="products-view__options">
                                <div class="view-options view-options--offcanvas--mobile">
                                    <div class="view-options__filters-button">
                                        <button type="button" class="filters-button">
                                            <svg class="filters-button__icon" width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#filters-16"></use>
                                            </svg>
                                            <span class="filters-button__title">Filters</span> <span
                                                    class="filters-button__counter">3</span></button>
                                    </div>
                                    <div class="view-options__divider"></div>
                                </div>
                            </div>
                            <div class="products-view__list products-list" data-layout="list" data-with-features="false"
                                 data-mobile-grid-columns="2">
                                <div class="products-list__body">
                                    @foreach($products as $product)

                                        <div class="products-list__item">
                                            <div class="product-card">
                                                <div class="product-card__badges-list">
                                                    <div class="product-card__badge product-card__badge--new">New</div>
                                                </div>
                                                <div class="product-card__image"><a href="product.html">
                                                        <img width="162px" height="162px"
                                                                src="{{ $product['feather_image'] }}" alt=""></a></div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a href="{{ url('product/' . $product['id']) }}">{{ $product['name'] }}</a></div>

                                                    <ul class="product-card__features-list">
                                                        {{ $product['sort_description'] }}
                                                    </ul>
                                                </div>
                                                <div class="product-card__actions">
                                                    <div class="product-card__availability">Availability: <span
                                                                class="text-success">In Stock</span></div>
                                                    <div class="product-card__prices">{{ $product['price'] }}</div>
                                                    <div class="product-card__buttons">
                                                        <button class="btn btn-primary product-card__addtocart"
                                                                type="button">Add To Cart
                                                        </button>
                                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                                type="button">Add To Cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection