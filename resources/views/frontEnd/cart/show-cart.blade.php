@extends('frontEnd.master')
@section('title')
    product Cart

@endsection
@section('header-title')
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{url('/')}}">Home</a><span>|</span></li>
                <li>Prouct Cart</li>
            </ul>
        </div>
    </div>
@endsection
@section('content')
    <!-- banner -->
    <div class="banner">
        <div class="w3l_banner_nav_right">
            <div class="w3l_banner_nav_right_banner3">
                <h3>Best Deals For New Products<span class="blink_me"></span></h3>
            </div>

           <!-- <div style="margin-top: 15px;">
                <h1 class="text text-center text-danger">My Shopping Cart</h1>
            </div>
                <div class="col-sm-12">
                    <div class="panel-body">
                    <table class="table table-bordered">
                        <tr style="background-color: #84c639;">

                            <th style="color:black;">SL NO</th>
                            <th style="color:black;">Product Id</th>
                            <th style="color:black;">Product Name</th>
                            <th style="color:black;">Product Price</th>
                            <th style="color:black;">Product Quantity</th>
                            <th style="color:black;">Total Price</th>
                            <th style="color:black;">Action</th>

                        </tr>
                        {{--@foreach($cartProducts as $cartProduct)--}}
                            {{--@php($i=1)--}}
                        {{--<tr>--}}
                            {{--<td>{{ $i++ }}</td>--}}
                            {{--<td>{{ $cartProduct->id }}</td>--}}
                            {{--<td>{{ $cartProduct->name }}</td>--}}
                            {{--<td>{{ $cartProduct->price }}</td>--}}
                            {{--<td>--}}
                                {{--<form action="{{ url('/update-cart-product') }}" method="POST">--}}
                                    {{--{{ csrf_field() }}--}}
                                    {{--<input type="number" name="qty" value="{{ $cartProduct->qty }}" style="width: 30%"/>--}}
                                    {{--<input type="hidden" name="rowId" value="{{ $cartProduct->rowId }}"/>--}}
                                    {{--<input type="submit" name="btn" value="Update Cart"/>--}}
{{----}}
                                {{--</form>--}}
                            {{--</td>--}}
                            {{--<td>$ {{ $cartProduct->price*$cartProduct->qty }}</td>--}}
                            {{--<td>--}}
                                <a href="">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                            {{--@endforeach--}}
                    </table>
                </div>

            </div>-->


            <div class="privacy about">

            <div class="checkout-right">
                <h4 class="text text-center">Your shopping cart</h4>
                <table class="timetable_sub">
                    <thead>
                    <tr>
                        <th>SL No.</th>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quality</th>
                        <th>Total Price</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cartProducts as $cartProduct)
                        @php( $i = 1 )
                    <tr class="rem1">
                        <td class="invert">{{ $i++ }}</td>
                        <td class="invert-image">{{ $cartProduct->id }}</td>
                        <td class="invert">{{ $cartProduct->name }}</td>
                        <td class="invert">{{ $cartProduct->price }}</td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <form action="{{ url('/update-cart-product') }}" method="POST">
                                        {{ csrf_field() }}
                                    <input type="number" name="qty" value="{{ $cartProduct->qty }}" style="width: 30%"/>
                                    <input type="hidden" name="rowId" value="{{ $cartProduct->rowId }}"/>
                                    <input type="submit" name="btn" value="Update Cart"/>
                                    </form>
                                </div>
                            </div>
                        </td>
                        <td class="invert">$ {{ $cartProduct->price*$cartProduct->qty }}</td>

                        <td class="invert">
                            <div class="rem">
                                <div class="close1"> </div>
                            </div>

                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

            <div class="checkout-left">

                <div class="col-md-12 address_form_agile">
                    <h4>Add a new Details</h4>
                    <form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
                        <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                            <div class="information-wrapper">
                                <div class="first-row form-group">
                                    <div class="controls">
                                        <label class="control-label">Full name: </label>
                                        <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                    </div>
                                    <div class="w3_agileits_card_number_grids">
                                        <div class="w3_agileits_card_number_grid_left">
                                            <div class="controls">
                                                <label class="control-label">Mobile number:</label>
                                                <input class="form-control" type="text" placeholder="Mobile number">
                                            </div>
                                        </div>
                                        <div class="w3_agileits_card_number_grid_right">
                                            <div class="controls">
                                                <label class="control-label">Landmark: </label>
                                                <input class="form-control" type="text" placeholder="Landmark">
                                            </div>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="controls">
                                        <label class="control-label">Town/City: </label>
                                        <input class="form-control" type="text" placeholder="Town/City">
                                    </div>
                                    <div class="controls">
                                        <label class="control-label">Address type: </label>
                                        <select class="form-control option-w3ls">
                                            <option>Office</option>
                                            <option>Home</option>
                                            <option>Commercial</option>

                                        </select>
                                    </div>
                                </div>
                                <button class="submit check_out">Delivery to this Address</button>
                            </div>
                        </section>
                    </form>
                    <div class="checkout-right-basket">
                        <a href="payment.html">Make a Payment <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                    </div>
                </div>

                <div class="clearfix"> </div>

            </div>
        </div>

        </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //banner -->

@endsection