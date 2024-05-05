@extends('site::layouts.master')

@section('content')

    <section class="section" id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="left-images">
                    <img src="{{$products->image}}" alt="" style="width: 700px;height: 500px; margin:30px 0 30px 0">

                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4>{{$products->name}}</h4>
                    <span class="price">${{$products->price}}</span>
                    <hr>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor incididunt ut labore.</span>
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6>No. of Orders</h6>
                        </div>
                        <div class="right-content">
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <h4 class="mt-2">Total: $210.00</h4>
{{--                        <button class="main-border-button">--}}
                            <span>
                                <a class="text-black" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="افزودن به سبد خرید" aria-label="افزودن به سبد خرید">
                                    <i class="ri-shopping-cart-line">افزودن به سبد خرید</i>
                                </a>
                            </span>
{{--                        </button>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
