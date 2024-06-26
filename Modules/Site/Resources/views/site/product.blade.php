@extends('site::layouts.master')

@section('content')

    <main class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-5 responsive-sidebar">
                    <div class="ui-sticky ui-sticky-top">
                        <div class="ui-box bg-white p-3 mb-5">
                            <!-- start of seller-info -->
                            <div class="ui-box-content seller-info">
                                <div class="seller-avatar">
                                    <i class="ri-store-3-fill icon"></i>
                                </div>
                                <div class="seller-username">بهرامی راد</div>
                                <div class="registrations-date mb-2">یک سال پیش</div>
                                <div class="d-flex align-items-center mb-2">
                                    <a href="#" class="link">٪۸۵ درصد رضایت از کالاها</a>
                                    <span class="text-muted mx-2">|</span>
                                    <span class="text-secondary">۱,۵۵۵ رای</span>
                                </div>
                                <div class="seller-statistics-container fa-num">
                                    <div class="seller-statistics">
                                        <div class="value">% 100</div>
                                        <div class="label">تامین به موقع</div>
                                    </div>
                                    <div class="seller-statistics">
                                        <div class="value">% 100</div>
                                        <div class="label">تعهد ارسال</div>
                                    </div>
                                    <div class="seller-statistics">
                                        <div class="value">% 100</div>
                                        <div class="label">بدون مرجوعی</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of seller-info -->
                        </div>
                        <div class="ui-box sidebar-widgets">
                            <!-- start of widget -->
                            <div class="widget p-0 mb-3">
                                <div class="widget-content widget--free-shipping">
                                    <div class="free-shipping--detail">
                                        <div class="title">ارسال رایگان سفارش</div>
                                        <div class="subtitle">سفارش‌های بالای ۳۰۰ هزار تومان</div>
                                    </div>
                                    <div class="free-shipping--banner">
                                        <img src="./theme-assets/images/theme/free-shipping--banner.png"
                                             alt="ارسال رایگان سفارش">
                                    </div>
                                </div>
                            </div>
                            <!-- end of widget -->
                            <!-- start of widget -->
                            <div class="widget mb-3">
                                <div class="widget-title">دسته‌بندی نتایج</div>
                                <div class="widget-content widget--category-results">
                                    <ul>
                                        <li class="category--arrow-left">
                                            <a href="#">کالای دیجیتال</a>
                                            <ul>
                                                <li class="category--arrow-down">
                                                    <a href="#">موبایل</a>
                                                    <ul>
                                                        <li class="current">گوشی موبایل</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end of widget -->
                            <!-- start of widget -->
                            <div class="widget mb-3">
                                <div class="widget-title">جستجو در نتایج:</div>
                                <div class="widget-content widget--search">
                                    <form action="#">
                                        <div class="form-element-row">
                                            <input type="text" name="s" class="form-control"
                                                   placeholder="نام محصول یا…">
                                            <i class="ri-search-line icon"></i>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end of widget -->
                            <!-- start of widget -->
                            <div class="widget widget-collapse mb-3">
                                <div class="widget-title widget-title--collapse-btn" data-bs-toggle="collapse"
                                     data-bs-target="#collapseBrandFilter" aria-expanded="false"
                                     aria-controls="collapseBrandFilter" role="button">برند</div>
                                <div class="widget-content widget--search collapse" id="collapseBrandFilter">
                                    <form action="#" class="pt-2">
                                        <div class="form-element-row">
                                            <input type="text" name="s" class="form-control"
                                                   placeholder="جستجوی نام برند...">
                                            <i class="ri-search-line icon"></i>
                                        </div>
                                        <div class="filter-options do-simplebar border-top pt-2 mt-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="brandOption1">
                                                <label class="form-check-label d-block" for="brandOption1">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>شیائومی</span>
                                                            <span class="text-muted en_text fs-7">Xiaomi</span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="brandOption2">
                                                <label class="form-check-label d-block" for="brandOption2">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>سامسونگ</span>
                                                            <span class="text-muted en_text fs-7">Samsung</span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="brandOption3">
                                                <label class="form-check-label d-block" for="brandOption3">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>اپل</span>
                                                            <span class="text-muted en_text fs-7">Apple</span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="brandOption4">
                                                <label class="form-check-label d-block" for="brandOption4">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>نوکیا</span>
                                                            <span class="text-muted en_text fs-7">Nokia</span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="brandOption5">
                                                <label class="form-check-label d-block" for="brandOption5">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>هوآوی</span>
                                                            <span class="text-muted en_text fs-7">Huawei</span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="brandOption6">
                                                <label class="form-check-label d-block" for="brandOption6">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>موتورولا</span>
                                                            <span class="text-muted en_text fs-7">Motorola</span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="brandOption7">
                                                <label class="form-check-label d-block" for="brandOption7">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>آنر</span>
                                                            <span class="text-muted en_text fs-7">Honor</span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="brandOption8">
                                                <label class="form-check-label d-block" for="brandOption8">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>ال جی</span>
                                                            <span class="text-muted en_text fs-7">LG</span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="brandOption9">
                                                <label class="form-check-label d-block" for="brandOption9">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>جی پلاس</span>
                                                            <span class="text-muted en_text fs-7">G Plus</span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="brandOption10">
                                                <label class="form-check-label d-block" for="brandOption10">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>مایکروسافت</span>
                                                            <span class="text-muted en_text fs-7">Microsoft</span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="brandOption11">
                                                <label class="form-check-label d-block" for="brandOption11">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>بلک بری</span>
                                                            <span class="text-muted en_text fs-7">BlackBerry</span>
                                                        </span>
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end of widget -->
                            <!-- start of widget -->
                            <div class="widget py-1 mb-3">
                                <div class="widget-content widget--filter-switcher">
                                    <div class="d-flex border-bottom pb-1 mb-2">
                                        <i class="ri-user-2-fill text-primary me-2"></i>
                                        <span class="fs-7">با خرید از کالاهایی با امکان ارسال توسط فروشنده سفارش خود
                                                را
                                                زودتر تحویل بگیرید </span>
                                    </div>
                                    <div class="form-check form-switch mb-0">
                                        <input class="form-check-input" type="checkbox" id="has_ship_by_seller">
                                        <label class="form-check-label" for="has_ship_by_seller">امکان ارسال توسط
                                            فروشنده</label>
                                    </div>
                                </div>
                            </div>
                            <!-- end of widget -->
                            <!-- start of widget -->
                            <div class="widget py-1 mb-3">
                                <div class="widget-content widget--filter-switcher">
                                    <div class="form-check form-switch mb-0">
                                        <input class="form-check-input" type="checkbox" id="has_jet_delivery">
                                        <label class="form-check-label" for="has_jet_delivery">فقط ارسال
                                            فوری</label>
                                    </div>
                                </div>
                            </div>
                            <!-- end of widget -->
                            <!-- start of widget -->
                            <div class="widget py-1 mb-3">
                                <div class="widget-content widget--filter-switcher">
                                    <div class="form-check form-switch mb-0">
                                        <input class="form-check-input" type="checkbox" id="has_selling_stock">
                                        <label class="form-check-label" for="has_selling_stock">فقط کالاهای
                                            موجود</label>
                                    </div>
                                </div>
                            </div>
                            <!-- end of widget -->
                            <!-- start of widget -->
                            <div class="widget widget-collapse mb-3">
                                <div class="widget-title widget-title--collapse-btn" data-bs-toggle="collapse"
                                     data-bs-target="#collapseColorFilter" aria-expanded="false"
                                     aria-controls="collapseColorFilter" role="button">رنگ ها</div>
                                <div class="widget-content widget--search collapse" id="collapseColorFilter">
                                    <form action="#" class="pt-2">
                                        <div class="form-element-row">
                                            <input type="text" name="s" class="form-control"
                                                   placeholder="جستجوی نام برند...">
                                            <i class="ri-search-line icon"></i>
                                        </div>
                                        <div class="filter-options do-simplebar border-top pt-2 mt-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="colorOption1">
                                                <label class="form-check-label d-block" for="colorOption1">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>مشکی</span>
                                                            <span class="color-preview"
                                                                  style="background-color: rgb(43,43,43);"></span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="colorOption2">
                                                <label class="form-check-label d-block" for="colorOption2">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>آبی</span>
                                                            <span class="color-preview"
                                                                  style="background-color: rgb(0,0,255);"></span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="colorOption3">
                                                <label class="form-check-label d-block" for="colorOption3">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>سفید</span>
                                                            <span class="color-preview"
                                                                  style="background-color: rgb(255,255,255);"></span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="colorOption4">
                                                <label class="form-check-label d-block" for="colorOption4">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>خاکستری</span>
                                                            <span class="color-preview"
                                                                  style="background-color: rgb(128,128,128);"></span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="colorOption5">
                                                <label class="form-check-label d-block" for="colorOption5">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>سبز</span>
                                                            <span class="color-preview"
                                                                  style="background-color: rgb(0,128,0);"></span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="colorOption6">
                                                <label class="form-check-label d-block" for="colorOption6">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>بنفش</span>
                                                            <span class="color-preview"
                                                                  style="background-color: rgb(128,0,128);"></span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="colorOption7">
                                                <label class="form-check-label d-block" for="colorOption7">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>نقره ای</span>
                                                            <span class="color-preview"
                                                                  style="background-color: rgb(222,222,222);"></span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="colorOption8">
                                                <label class="form-check-label d-block" for="colorOption8">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>طلایی</span>
                                                            <span class="color-preview"
                                                                  style="background-color: rgb(201,146,18);"></span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="colorOption9">
                                                <label class="form-check-label d-block" for="colorOption9">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>آبی تیره</span>
                                                            <span class="color-preview"
                                                                  style="background-color: rgb(76,94,116);"></span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="colorOption10">
                                                <label class="form-check-label d-block" for="colorOption10">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>آبی روشن</span>
                                                            <span class="color-preview"
                                                                  style="background-color: rgb(64,170,255);"></span>
                                                        </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="colorOption11">
                                                <label class="form-check-label d-block" for="colorOption11">
                                                        <span class="d-flex align-items-center justify-content-between">
                                                            <span>زرد</span>
                                                            <span class="color-preview"
                                                                  style="background-color: rgb(255,255,0);"></span>
                                                        </span>
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end of widget -->
                            <!-- start of widget -->
                            <div class="widget widget-collapse">
                                <div class="widget-title widget-title--collapse-btn" data-bs-toggle="collapse"
                                     data-bs-target="#collapsePriceFilter" aria-expanded="false"
                                     aria-controls="collapsePriceFilter" role="button">محدوده قیمت</div>
                                <div class="widget-content widget--search fa-num collapse" id="collapsePriceFilter">
                                    <form action="#" class="pt-2">
                                        <div class="filter-price">
                                            <div class="filter-slider">
                                                <div id="slider-non-linear-step" class="price-slider"></div>
                                            </div>
                                            <ul class="filter-range mb-4">
                                                <li>
                                                    <input type="text" data-value="0" value="0" name="price[min]"
                                                           data-range="0" class="js-slider-range-from"
                                                           id="skip-value-lower" disabled>
                                                    <span>تومان</span>
                                                </li>
                                                <li class="label fw-bold">تا</li>
                                                <li>
                                                    <input type="text" data-value="17700000" value="17700000"
                                                           name="price[max]" data-range="17700000"
                                                           class="js-slider-range-to" id="skip-value-upper" disabled>
                                                    <span>تومان</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end of widget -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <!-- start of breadcrumb -->
                    <nav class="mb-2" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item"><a href="#">کالای دیجیتال</a></li>
                            <li class="breadcrumb-item"><a href="#">موبایل</a></li>
                            <li class="breadcrumb-item"><a href="#">گوشی موبایل</a></li>
                        </ol>
                    </nav>
                    <!-- end of breadcrumb -->
                    <button class="btn btn-primary mb-3 d-md-none toggle-responsive-sidebar">فیلتر پیشرفته
                        <i class="ri-equalizer-fill ms-1"></i></button>
                    <div class="listing-products">
                        <div class="listing-products-content">
                            <!-- start of nav-tabs -->
                            <ul class="nav nav-pills nav-tabs align-items-center mb-4" id="sort-tab" role="tablist">
                                <li class="d-inline-flex align-items-center nav-item me-3 text-muted">
                                    <i class="ri-equalizer-line me-2"></i>
                                    مرتب سازی بر اساس:
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="most-visited-tab" data-bs-toggle="tab"
                                            data-bs-target="#most-visited" type="button" role="tab"
                                            aria-controls="most-visited" aria-selected="true">پربازدید ترین</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="best-selling-tab" data-bs-toggle="tab"
                                            data-bs-target="#best-selling" type="button" role="tab"
                                            aria-controls="best-selling" aria-selected="false">پرفروش
                                        ترین</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="most-popular-tab" data-bs-toggle="tab"
                                            data-bs-target="#most-popular" type="button" role="tab"
                                            aria-controls="most-popular" aria-selected="false">محبوب
                                        ترین</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="newest-tab" data-bs-toggle="tab"
                                            data-bs-target="#newest" type="button" role="tab" aria-controls="newest"
                                            aria-selected="false">جدید ترین</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="cheapest-tab" data-bs-toggle="tab"
                                            data-bs-target="#cheapest" type="button" role="tab" aria-controls="cheapest"
                                            aria-selected="false">ارزان ترین</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="most-expensive-tab" data-bs-toggle="tab"
                                            data-bs-target="#most-expensive" type="button" role="tab"
                                            aria-controls="most-expensive" aria-selected="false">گران
                                        ترین</button>
                                </li>
                            </ul>
                            <!-- end of nav-tabs -->
                            <!-- start of tab-content -->
                            <div class="tab-content" id="sort-tabContent">
                                <!-- start of tab-pane -->
                                <div class="tab-pane fade show active" id="most-visited" role="tabpanel"
                                     aria-labelledby="most-visited-tab">
                                    <div class="ui-box pt-3 pb-0 px-0 mb-4">
                                        <div class="ui-box-content">
                                            <div class="row mx-0">
                                                <!-- start of product-card -->
                                                @foreach($products as $product)
                                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                        <!-- start of product-card -->
                                                        <div class="product-card">
                                                            <div class="product-thumbnail">
                                                                <a href="#">
                                                                    <img src="{{$product->image}}" alt="{{$product->name}}">
                                                                </a>
                                                            </div>
                                                            <div class="product-card-body">
                                                                <h2 class="product-title">
                                                                    <a href="#">گوشی موبایل شیائومی مدل 11 lite 5G NE
                                                                        2109119DG
                                                                        دو
                                                                        سیم‌ کارت
                                                                        ظرفیت 256 گیگابایت و رم 8 گیگابایت</a>
                                                                </h2>
                                                                <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #4d5b63;"></span>
                                                                    <span class="color"
                                                                          style="background-color: #57415f;"></span>
                                                                    <span class="color"
                                                                          style="background-color: #984638;"></span>
                                                                    <span>+</span>
                                                                </div>
                                                                <div class="product-price fa-num">
                                                                    <span class="price-now">{{$product->price}}
                                                                        <span class="currency">تومان</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="product-card-footer">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                    <div class="product-actions">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#" data-bs-toggle="tooltip"
                                                                                   data-bs-placement="top" title=""
                                                                                   data-bs-original-title="افزودن به سبد خرید"
                                                                                   aria-label="افزودن به سبد خرید"><i
                                                                                        class="ri-shopping-cart-line"></i></a>
                                                                            </li>
                                                                            <li><a href="#" data-bs-toggle="tooltip"
                                                                                   data-bs-placement="top" title=""
                                                                                   data-bs-original-title="مشاهده سریع"
                                                                                   aria-label="مشاهده سریع"
                                                                                   data-remodal-target="quick-view-modal"><i
                                                                                        class="ri-search-line"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <form action="{{route('favourite.product.select' , $product->id)}}" method="post">
                                                                                    @csrf
                                                                                        <a href="#" data-bs-toggle="tooltip"
                                                                                           data-bs-placement="top" title=""
                                                                                           data-bs-original-title="افزودن به علاقمندی"
                                                                                           aria-label="افزودن به علاقمندی">
                                                                                            <i class="ri-heart-3-line"></i>
                                                                                        </a>
                                                                                </form>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-rating fa-num">
                                                                        <i class="ri-star-fill star"></i>
                                                                        <strong>۴.۴</strong>
                                                                        <span>(۴۳۶)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end of product-card -->
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of tab-pane -->
                                <!-- start of tab-pane -->
                                <div class="tab-pane fade" id="best-selling" role="tabpanel"
                                     aria-labelledby="best-selling-tab">
                                    <div class="ui-box pt-3 pb-0 px-0 mb-4">
                                        <div class="ui-box-content">
                                            <div class="row mx-0">
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/05.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل اپل مدل iPhone 12 Pro Max
                                                                    A2412 دو
                                                                    سیم‌
                                                                    کارت
                                                                    ظرفیت
                                                                    256 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #d4d4d4;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e86841;"></span>
                                                                <span class="color"
                                                                      style="background-color: #b82c32;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">36,300,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/06.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل Mi 11i 5G
                                                                    M2012K11G دو
                                                                    سیم‌
                                                                    کارت
                                                                    ظرفیت
                                                                    256 گیگابایت و 8 گیگابایت رم</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #4d5b63;"></span>
                                                                <span class="color"
                                                                      style="background-color: #57415f;"></span>
                                                                <span class="color"
                                                                      style="background-color: #984638;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">16,199,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/01.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل اپل مدل iPhone 13 A2634 دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 128
                                                                    گیگابایت و رم 4 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #d4d4d4;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e86841;"></span>
                                                                <span class="color"
                                                                      style="background-color: #b82c32;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                <div class="d-flex align-items-center">
                                                                    <del class="price-old">26,900,000</del>
                                                                    <span class="discount ms-2">%2</span>
                                                                </div>
                                                                <span class="price-now">26,249,000 <span
                                                                        class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/02.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل 11 lite 5G NE
                                                                    2109119DG
                                                                    دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 256 گیگابایت و رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #4d5b63;"></span>
                                                                <span class="color"
                                                                      style="background-color: #57415f;"></span>
                                                                <span class="color"
                                                                      style="background-color: #984638;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">8,239,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/03.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل Redmi Note 10
                                                                    pro
                                                                    M2101K6G
                                                                    دو سیم‌
                                                                    کارت
                                                                    ظرفیت 128 گیگابایت و رم 6</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">7,599,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/04.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Z Flip3
                                                                    5G ظرفیت
                                                                    256
                                                                    گیگابایت
                                                                    و
                                                                    رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">22,499,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/07.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy S9 Plus
                                                                    دو سیم
                                                                    کارت
                                                                    ظرفیت 64
                                                                    گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">12,890,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/08.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Note 20
                                                                    5G
                                                                    SM-N981B/DS دو سیم
                                                                    کارت ظرفیت 256 گیگابایت و رم 8</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                <div class="d-flex align-items-center">
                                                                    <del class="price-old">23,570,000</del>
                                                                    <span class="discount ms-2">%3</span>
                                                                </div>
                                                                <span class="price-now">22,799,000 <span
                                                                        class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/01.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل اپل مدل iPhone 13 A2634 دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 128
                                                                    گیگابایت و رم 4 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #d4d4d4;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e86841;"></span>
                                                                <span class="color"
                                                                      style="background-color: #b82c32;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                <div class="d-flex align-items-center">
                                                                    <del class="price-old">26,900,000</del>
                                                                    <span class="discount ms-2">%2</span>
                                                                </div>
                                                                <span class="price-now">26,249,000 <span
                                                                        class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/02.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل 11 lite 5G NE
                                                                    2109119DG
                                                                    دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 256 گیگابایت و رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #4d5b63;"></span>
                                                                <span class="color"
                                                                      style="background-color: #57415f;"></span>
                                                                <span class="color"
                                                                      style="background-color: #984638;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">8,239,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/03.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل Redmi Note 10
                                                                    pro
                                                                    M2101K6G
                                                                    دو سیم‌
                                                                    کارت
                                                                    ظرفیت 128 گیگابایت و رم 6</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">7,599,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/04.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Z Flip3
                                                                    5G ظرفیت
                                                                    256
                                                                    گیگابایت
                                                                    و
                                                                    رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">22,499,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of tab-pane -->
                                <!-- start of tab-pane -->
                                <div class="tab-pane fade" id="most-popular" role="tabpanel"
                                     aria-labelledby="most-popular-tab">
                                    <div class="ui-box pt-3 pb-0 px-0 mb-4">
                                        <div class="ui-box-content">
                                            <div class="row mx-0">
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/05.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل اپل مدل iPhone 12 Pro Max
                                                                    A2412 دو
                                                                    سیم‌
                                                                    کارت
                                                                    ظرفیت
                                                                    256 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #d4d4d4;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e86841;"></span>
                                                                <span class="color"
                                                                      style="background-color: #b82c32;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">36,300,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/06.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل Mi 11i 5G
                                                                    M2012K11G دو
                                                                    سیم‌
                                                                    کارت
                                                                    ظرفیت
                                                                    256 گیگابایت و 8 گیگابایت رم</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #4d5b63;"></span>
                                                                <span class="color"
                                                                      style="background-color: #57415f;"></span>
                                                                <span class="color"
                                                                      style="background-color: #984638;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">16,199,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/01.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل اپل مدل iPhone 13 A2634 دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 128
                                                                    گیگابایت و رم 4 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #d4d4d4;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e86841;"></span>
                                                                <span class="color"
                                                                      style="background-color: #b82c32;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                <div class="d-flex align-items-center">
                                                                    <del class="price-old">26,900,000</del>
                                                                    <span class="discount ms-2">%2</span>
                                                                </div>
                                                                <span class="price-now">26,249,000 <span
                                                                        class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/02.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل 11 lite 5G NE
                                                                    2109119DG
                                                                    دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 256 گیگابایت و رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #4d5b63;"></span>
                                                                <span class="color"
                                                                      style="background-color: #57415f;"></span>
                                                                <span class="color"
                                                                      style="background-color: #984638;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">8,239,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/03.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل Redmi Note 10
                                                                    pro
                                                                    M2101K6G
                                                                    دو سیم‌
                                                                    کارت
                                                                    ظرفیت 128 گیگابایت و رم 6</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">7,599,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/08.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Note 20
                                                                    5G
                                                                    SM-N981B/DS دو سیم
                                                                    کارت ظرفیت 256 گیگابایت و رم 8</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                <div class="d-flex align-items-center">
                                                                    <del class="price-old">23,570,000</del>
                                                                    <span class="discount ms-2">%3</span>
                                                                </div>
                                                                <span class="price-now">22,799,000 <span
                                                                        class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/01.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل اپل مدل iPhone 13 A2634 دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 128
                                                                    گیگابایت و رم 4 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #d4d4d4;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e86841;"></span>
                                                                <span class="color"
                                                                      style="background-color: #b82c32;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                <div class="d-flex align-items-center">
                                                                    <del class="price-old">26,900,000</del>
                                                                    <span class="discount ms-2">%2</span>
                                                                </div>
                                                                <span class="price-now">26,249,000 <span
                                                                        class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/04.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Z Flip3
                                                                    5G ظرفیت
                                                                    256
                                                                    گیگابایت
                                                                    و
                                                                    رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">22,499,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/07.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy S9 Plus
                                                                    دو سیم
                                                                    کارت
                                                                    ظرفیت 64
                                                                    گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">12,890,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/02.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل 11 lite 5G NE
                                                                    2109119DG
                                                                    دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 256 گیگابایت و رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #4d5b63;"></span>
                                                                <span class="color"
                                                                      style="background-color: #57415f;"></span>
                                                                <span class="color"
                                                                      style="background-color: #984638;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">8,239,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/03.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل Redmi Note 10
                                                                    pro
                                                                    M2101K6G
                                                                    دو سیم‌
                                                                    کارت
                                                                    ظرفیت 128 گیگابایت و رم 6</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">7,599,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/04.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Z Flip3
                                                                    5G ظرفیت
                                                                    256
                                                                    گیگابایت
                                                                    و
                                                                    رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">22,499,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of tab-pane -->
                                <!-- start of tab-pane -->
                                <div class="tab-pane fade" id="newest" role="tabpanel" aria-labelledby="newest-tab">
                                    <div class="ui-box pt-3 pb-0 px-0 mb-4">
                                        <div class="ui-box-content">
                                            <div class="row mx-0">
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/03.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل Redmi Note 10
                                                                    pro
                                                                    M2101K6G
                                                                    دو سیم‌
                                                                    کارت
                                                                    ظرفیت 128 گیگابایت و رم 6</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">7,599,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/04.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Z Flip3
                                                                    5G ظرفیت
                                                                    256
                                                                    گیگابایت
                                                                    و
                                                                    رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">22,499,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/05.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل اپل مدل iPhone 12 Pro Max
                                                                    A2412 دو
                                                                    سیم‌
                                                                    کارت
                                                                    ظرفیت
                                                                    256 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #d4d4d4;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e86841;"></span>
                                                                <span class="color"
                                                                      style="background-color: #b82c32;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">36,300,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/01.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل اپل مدل iPhone 13 A2634 دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 128
                                                                    گیگابایت و رم 4 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #d4d4d4;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e86841;"></span>
                                                                <span class="color"
                                                                      style="background-color: #b82c32;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                <div class="d-flex align-items-center">
                                                                    <del class="price-old">26,900,000</del>
                                                                    <span class="discount ms-2">%2</span>
                                                                </div>
                                                                <span class="price-now">26,249,000 <span
                                                                        class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/02.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل 11 lite 5G NE
                                                                    2109119DG
                                                                    دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 256 گیگابایت و رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #4d5b63;"></span>
                                                                <span class="color"
                                                                      style="background-color: #57415f;"></span>
                                                                <span class="color"
                                                                      style="background-color: #984638;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">8,239,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/06.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل Mi 11i 5G
                                                                    M2012K11G دو
                                                                    سیم‌
                                                                    کارت
                                                                    ظرفیت
                                                                    256 گیگابایت و 8 گیگابایت رم</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #4d5b63;"></span>
                                                                <span class="color"
                                                                      style="background-color: #57415f;"></span>
                                                                <span class="color"
                                                                      style="background-color: #984638;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">16,199,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/07.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy S9 Plus
                                                                    دو سیم
                                                                    کارت
                                                                    ظرفیت 64
                                                                    گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">12,890,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/08.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Note 20
                                                                    5G
                                                                    SM-N981B/DS دو سیم
                                                                    کارت ظرفیت 256 گیگابایت و رم 8</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                <div class="d-flex align-items-center">
                                                                    <del class="price-old">23,570,000</del>
                                                                    <span class="discount ms-2">%3</span>
                                                                </div>
                                                                <span class="price-now">22,799,000 <span
                                                                        class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/01.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل اپل مدل iPhone 13 A2634 دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 128
                                                                    گیگابایت و رم 4 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #d4d4d4;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e86841;"></span>
                                                                <span class="color"
                                                                      style="background-color: #b82c32;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                <div class="d-flex align-items-center">
                                                                    <del class="price-old">26,900,000</del>
                                                                    <span class="discount ms-2">%2</span>
                                                                </div>
                                                                <span class="price-now">26,249,000 <span
                                                                        class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/02.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل 11 lite 5G NE
                                                                    2109119DG
                                                                    دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 256 گیگابایت و رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #4d5b63;"></span>
                                                                <span class="color"
                                                                      style="background-color: #57415f;"></span>
                                                                <span class="color"
                                                                      style="background-color: #984638;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">8,239,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/03.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل Redmi Note 10
                                                                    pro
                                                                    M2101K6G
                                                                    دو سیم‌
                                                                    کارت
                                                                    ظرفیت 128 گیگابایت و رم 6</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">7,599,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/04.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Z Flip3
                                                                    5G ظرفیت
                                                                    256
                                                                    گیگابایت
                                                                    و
                                                                    رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">22,499,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of tab-pane -->
                                <!-- start of tab-pane -->
                                <div class="tab-pane fade" id="cheapest" role="tabpanel"
                                     aria-labelledby="cheapest-tab">
                                    <div class="ui-box pt-3 pb-0 px-0 mb-4">
                                        <div class="ui-box-content">
                                            <div class="row mx-0">
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/03.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل Redmi Note 10
                                                                    pro
                                                                    M2101K6G
                                                                    دو سیم‌
                                                                    کارت
                                                                    ظرفیت 128 گیگابایت و رم 6</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">7,599,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/06.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل Mi 11i 5G
                                                                    M2012K11G دو
                                                                    سیم‌
                                                                    کارت
                                                                    ظرفیت
                                                                    256 گیگابایت و 8 گیگابایت رم</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #4d5b63;"></span>
                                                                <span class="color"
                                                                      style="background-color: #57415f;"></span>
                                                                <span class="color"
                                                                      style="background-color: #984638;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">16,199,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/01.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل اپل مدل iPhone 13 A2634 دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 128
                                                                    گیگابایت و رم 4 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #d4d4d4;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e86841;"></span>
                                                                <span class="color"
                                                                      style="background-color: #b82c32;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                <div class="d-flex align-items-center">
                                                                    <del class="price-old">26,900,000</del>
                                                                    <span class="discount ms-2">%2</span>
                                                                </div>
                                                                <span class="price-now">26,249,000 <span
                                                                        class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/04.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Z Flip3
                                                                    5G ظرفیت
                                                                    256
                                                                    گیگابایت
                                                                    و
                                                                    رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">22,499,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/05.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل اپل مدل iPhone 12 Pro Max
                                                                    A2412 دو
                                                                    سیم‌
                                                                    کارت
                                                                    ظرفیت
                                                                    256 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #d4d4d4;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e86841;"></span>
                                                                <span class="color"
                                                                      style="background-color: #b82c32;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">36,300,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/02.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل 11 lite 5G NE
                                                                    2109119DG
                                                                    دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 256 گیگابایت و رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #4d5b63;"></span>
                                                                <span class="color"
                                                                      style="background-color: #57415f;"></span>
                                                                <span class="color"
                                                                      style="background-color: #984638;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">8,239,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/07.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy S9 Plus
                                                                    دو سیم
                                                                    کارت
                                                                    ظرفیت 64
                                                                    گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">12,890,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/08.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Note 20
                                                                    5G
                                                                    SM-N981B/DS دو سیم
                                                                    کارت ظرفیت 256 گیگابایت و رم 8</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                <div class="d-flex align-items-center">
                                                                    <del class="price-old">23,570,000</del>
                                                                    <span class="discount ms-2">%3</span>
                                                                </div>
                                                                <span class="price-now">22,799,000 <span
                                                                        class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/01.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل اپل مدل iPhone 13 A2634 دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 128
                                                                    گیگابایت و رم 4 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #d4d4d4;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e86841;"></span>
                                                                <span class="color"
                                                                      style="background-color: #b82c32;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                <div class="d-flex align-items-center">
                                                                    <del class="price-old">26,900,000</del>
                                                                    <span class="discount ms-2">%2</span>
                                                                </div>
                                                                <span class="price-now">26,249,000 <span
                                                                        class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/02.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل 11 lite 5G NE
                                                                    2109119DG
                                                                    دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 256 گیگابایت و رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #4d5b63;"></span>
                                                                <span class="color"
                                                                      style="background-color: #57415f;"></span>
                                                                <span class="color"
                                                                      style="background-color: #984638;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">8,239,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/03.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل Redmi Note 10
                                                                    pro
                                                                    M2101K6G
                                                                    دو سیم‌
                                                                    کارت
                                                                    ظرفیت 128 گیگابایت و رم 6</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">7,599,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/04.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Z Flip3
                                                                    5G ظرفیت
                                                                    256
                                                                    گیگابایت
                                                                    و
                                                                    رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">22,499,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of tab-pane -->
                                <!-- start of tab-pane -->
                                <div class="tab-pane fade" id="most-expensive" role="tabpanel"
                                     aria-labelledby="most-expensive-tab">
                                    <div class="ui-box pt-3 pb-0 px-0 mb-4">
                                        <div class="ui-box-content">
                                            <div class="row mx-0">
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/01.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل اپل مدل iPhone 13 A2634 دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 128
                                                                    گیگابایت و رم 4 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #d4d4d4;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e86841;"></span>
                                                                <span class="color"
                                                                      style="background-color: #b82c32;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                <div class="d-flex align-items-center">
                                                                    <del class="price-old">26,900,000</del>
                                                                    <span class="discount ms-2">%2</span>
                                                                </div>
                                                                <span class="price-now">26,249,000 <span
                                                                        class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/02.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل 11 lite 5G NE
                                                                    2109119DG
                                                                    دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 256 گیگابایت و رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #4d5b63;"></span>
                                                                <span class="color"
                                                                      style="background-color: #57415f;"></span>
                                                                <span class="color"
                                                                      style="background-color: #984638;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">8,239,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/07.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy S9 Plus
                                                                    دو سیم
                                                                    کارت
                                                                    ظرفیت 64
                                                                    گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">12,890,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/08.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Note 20
                                                                    5G
                                                                    SM-N981B/DS دو سیم
                                                                    کارت ظرفیت 256 گیگابایت و رم 8</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                <div class="d-flex align-items-center">
                                                                    <del class="price-old">23,570,000</del>
                                                                    <span class="discount ms-2">%3</span>
                                                                </div>
                                                                <span class="price-now">22,799,000 <span
                                                                        class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/01.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل اپل مدل iPhone 13 A2634 دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 128
                                                                    گیگابایت و رم 4 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #d4d4d4;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e86841;"></span>
                                                                <span class="color"
                                                                      style="background-color: #b82c32;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                <div class="d-flex align-items-center">
                                                                    <del class="price-old">26,900,000</del>
                                                                    <span class="discount ms-2">%2</span>
                                                                </div>
                                                                <span class="price-now">26,249,000 <span
                                                                        class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/03.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل Redmi Note 10
                                                                    pro
                                                                    M2101K6G
                                                                    دو سیم‌
                                                                    کارت
                                                                    ظرفیت 128 گیگابایت و رم 6</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">7,599,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/04.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Z Flip3
                                                                    5G ظرفیت
                                                                    256
                                                                    گیگابایت
                                                                    و
                                                                    رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">22,499,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/05.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل اپل مدل iPhone 12 Pro Max
                                                                    A2412 دو
                                                                    سیم‌
                                                                    کارت
                                                                    ظرفیت
                                                                    256 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #d4d4d4;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e86841;"></span>
                                                                <span class="color"
                                                                      style="background-color: #b82c32;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">36,300,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/06.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل Mi 11i 5G
                                                                    M2012K11G دو
                                                                    سیم‌
                                                                    کارت
                                                                    ظرفیت
                                                                    256 گیگابایت و 8 گیگابایت رم</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #4d5b63;"></span>
                                                                <span class="color"
                                                                      style="background-color: #57415f;"></span>
                                                                <span class="color"
                                                                      style="background-color: #984638;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">16,199,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/02.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل 11 lite 5G NE
                                                                    2109119DG
                                                                    دو
                                                                    سیم‌ کارت
                                                                    ظرفیت 256 گیگابایت و رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #4d5b63;"></span>
                                                                <span class="color"
                                                                      style="background-color: #57415f;"></span>
                                                                <span class="color"
                                                                      style="background-color: #984638;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">8,239,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/03.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل شیائومی مدل Redmi Note 10
                                                                    pro
                                                                    M2101K6G
                                                                    دو سیم‌
                                                                    کارت
                                                                    ظرفیت 128 گیگابایت و رم 6</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">7,599,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <!-- start of product-card -->
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="#">
                                                                <img src="./theme-assets/images/products/04.jpg"
                                                                     alt="product title">
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="#">گوشی موبایل سامسونگ مدل Galaxy Z Flip3
                                                                    5G ظرفیت
                                                                    256
                                                                    گیگابایت
                                                                    و
                                                                    رم 8 گیگابایت</a>
                                                            </h2>
                                                            <div class="product-variant">
                                                                    <span class="color"
                                                                          style="background-color: #24476e;"></span>
                                                                <span class="color"
                                                                      style="background-color: #12505b;"></span>
                                                                <span class="color"
                                                                      style="background-color: #e4a793;"></span>
                                                                <span>+</span>
                                                            </div>
                                                            <div class="product-price fa-num">
                                                                    <span class="price-now">22,499,000 <span
                                                                            class="currency">تومان</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-card-footer">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between border-top mt-2 py-2">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به سبد خرید"
                                                                               aria-label="افزودن به سبد خرید"><i
                                                                                    class="ri-shopping-cart-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="مشاهده سریع"
                                                                               aria-label="مشاهده سریع"
                                                                               data-remodal-target="quick-view-modal"><i
                                                                                    class="ri-search-line"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-bs-toggle="tooltip"
                                                                               data-bs-placement="top" title=""
                                                                               data-bs-original-title="افزودن به علاقمندی"
                                                                               aria-label="افزودن به علاقمندی"><i
                                                                                    class="ri-heart-3-line"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>۴.۴</strong>
                                                                    <span>(۴۳۶)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of product-card -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of tab-pane -->
                            </div>
                            <!-- end of tab-content -->
                            <div class="row">
                                <div class="col-12">
                                    <nav class="border-top py-4">
                                        <!-- start of pagination -->
                                        <ul class="pagination justify-content-center fa-num">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="ri-arrow-right-s-line"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <i class="ri-arrow-left-s-line"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- end of pagination -->
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="responsive-sidebar-overlay"></div>
                </div>
            </div>
        </div>
        <!-- start of quick-view-modal -->
        <div class="remodal remodal-lg" data-remodal-id="quick-view-modal"
             data-remodal-options="hashTracking: false">
            <div class="remodal-header">
                <button data-remodal-action="close" class="remodal-close"></button>
            </div>
            <div class="remodal-content">
                <div class="product-detail-container">
                    <div class="row">
                        <div class="col-md-5 mb-md-0 mb-4">
                            <!-- start of product-gallery -->
                            <div class="product-gallery">
                                <div class="gallery-img-container">
                                    <!-- Slider main container -->
                                    <div class="swiper gallery-swiper-slider">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">
                                            <!-- Slides -->
                                            <div class="swiper-slide">
                                                <div class="gallery-img">
                                                    <img src="./theme-assets/images/gallery/01.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="gallery-img">
                                                    <img src="./theme-assets/images/gallery/02.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="gallery-img">
                                                    <img src="./theme-assets/images/gallery/03.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="gallery-img">
                                                    <img src="./theme-assets/images/gallery/04.png" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- If we need navigation buttons -->
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                    <!-- Slider main container -->
                                    <div class="swiper gallery-thumbs-swiper-slider">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">
                                            <!-- Slides -->
                                            <div class="swiper-slide">
                                                <div class="gallery-thumb">
                                                    <img src="./theme-assets/images/gallery/01.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="gallery-thumb">
                                                    <img src="./theme-assets/images/gallery/02.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="gallery-thumb">
                                                    <img src="./theme-assets/images/gallery/03.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="gallery-thumb">
                                                    <img src="./theme-assets/images/gallery/04.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of product-gallery -->
                        </div>
                        <div class="col-md-7 mb-md-0 mb-4">
                            <!-- start of breadcrumb -->
                            <nav class="mb-2" aria-label="breadcrumb">
                                <ol class="breadcrumb fs-7">
                                    <li class="breadcrumb-item"><a href="#">اپل</a></li>
                                    <li class="breadcrumb-item"><a href="#">گوشی موبایل اپل</a></li>
                                </ol>
                            </nav>
                            <!-- end of breadcrumb -->
                            <!-- start of product-detail -->
                            <h2 class="product-title">گوشی موبایل اپل مدل iPhone 13 A2634 دو سیم کارت ظرفیت 128
                                گیگابایت و رم 4 گیگابایت</h2>
                            <div class="product-en mb-3">
                                <span>Apple iPhone 13 A2634 Dual SIM 128GB And 4GB RAM Mobile Phone</span>
                            </div>
                            <div class="product-user-suggestion mb-2">
                                <i class="ri-thumb-up-fill text-success me-1"></i>
                                <span class="fs-7 me-2">۷۹٪ (۱۷۰ نفر) از خریداران، این کالا را پیشنهاد کرده
                                        اند.</span>
                                <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                      title="خریداران کالا با انتخاب یکی از گزینه‌های پیشنهاد یا عدم پیشنهاد، تجربه خرید خود را با کاربران به اشتراک می‌گذارند."><i
                                        class="ri-information-line"></i></span>
                            </div>
                            <div class="product-user-meta fa-num mb-4">
                                    <span class="product-users-rating">
                                        <i class="ri-star-fill icon me-1"></i>
                                        <span class="fw-bold me-1">4.4</span>
                                        <span class="text-muted fs-7">(742)</span>
                                    </span>
                                <span class="divider"></span>
                                <a href="#" class="link border-bottom-0 fs-7">۶۳۷ دیدگاه کاربران</a>
                                <span class="divider"></span>
                                <a href="#" class="link border-bottom-0 fs-7">۴۰۵ پرسش و پاسخ</a>
                            </div>
                            <div class="product-variants-container mb-3">
                                <div class="product-variant-selected-container">
                                    <span class="product-variant-selected-label">رنگ:</span>
                                    <span class="product-variant-selected">آبی</span>
                                </div>
                                <div class="product-variants">
                                    <div class="product-variant-item">
                                        <div class="custom-radio-circle">
                                            <input type="radio" class="custom-radio-circle-input"
                                                   name="productColor" id="productColor01" checked>
                                            <label for="productColor01" class="custom-radio-circle-label"
                                                   data-variant-label="آبی">
                                                    <span class="color" style="background-color: #2196f3;"
                                                          data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                          title="آبی"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="product-variant-item">
                                        <div class="custom-radio-circle">
                                            <input type="radio" class="custom-radio-circle-input"
                                                   name="productColor" id="productColor02">
                                            <label for="productColor02" class="custom-radio-circle-label"
                                                   data-variant-label="سفید">
                                                    <span class="color" style="background-color: #fff;"
                                                          data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                          title="سفید"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="product-variant-item">
                                        <div class="custom-radio-circle">
                                            <input type="radio" class="custom-radio-circle-input"
                                                   name="productColor" id="productColor03">
                                            <label for="productColor03" class="custom-radio-circle-label"
                                                   data-variant-label="صورتی">
                                                    <span class="color" style="background-color: #ff80ab;"
                                                          data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                          title="صورتی"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="expandable-text mb-3" style="height: 95px;">
                                <div class="expandable-text_text">
                                    <div class="product-params">
                                        <ul>
                                            <li>
                                                <span class="label">حافظه داخلی:</span>
                                                <span class="title">128 گیگابایت</span>
                                            </li>
                                            <li>
                                                <span class="label">مقدار RAM:</span>
                                                <span class="title">چهار گیگابایت</span>
                                            </li>
                                            <li>
                                                <span class="label">بازه‌ی اندازه صفحه نمایش:</span>
                                                <span class="title">6.0 اینچ و بزرگتر</span>
                                            </li>
                                            <li>
                                                <span class="label">شبکه های ارتباطی:</span>
                                                <span class="title">2G، 3G، 4G، 5G</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="expandable-text-expand-btn">
                                        <span class="show-more">
                                            بیشتر بخوانید <i class="ri-arrow-down-s-line"></i>
                                        </span>
                                    <span class="show-less d-none">
                                            بستن <i class="ri-arrow-up-s-line"></i>
                                        </span>
                                </div>
                            </div>
                            <!-- end of product-detail -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="remodal-footer">
                <button data-remodal-action="cancel" class="btn btn-sm btn-outline-light px-3 me-2">بستن</button>
                <a href="#" class="btn btn-sm btn-primary px-3">دیدن محصول</a>
            </div>
        </div>
        <!-- end of quick-view-modal -->
    </main>

@endsection
