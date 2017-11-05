@extends('frontEnd.master')
@section('title')
    product Details

@endsection
@section('header-title')
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{url('/')}}">Home</a><span>|</span></li>
                <li>Prouct Details</li>
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
            <div class="agileinfo_single">
                <h5>{{$productById->product_name}}</h5>
                <div class="col-md-4 agileinfo_single_left">
                    <img id="example" src="{{asset($productById->product_image)}}" alt=" " width="300px;" height="200px" class="img-responsive" />
                </div>
                <div class="col-md-8 agileinfo_single_right">
                    <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
                    </div>
                    <div class="w3agile_description">
                        <h4>Description :</h4>
                        <p><?php echo "$productById->product_description" ?><p>
                    </div>
                    <div class="snipcart-item block">
                        <div class="snipcart-thumb agileinfo_single_right_snipcart">
                            <h4>${{$productById->product_price}}.00</h4>
                        </div>
                        <div class="snipcart-details agileinfo_single_right_details">
                            <form action="{{ url('/add-to-cart') }}" method="POST">
                                {{csrf_field()}}
                                <fieldset>
                                    <span>Product Quantity:</span><input type="number" name="qty" value="1" min="1" style="width:100%;margin-bottom: 5px;"/>
                                    <input type="hidden" name="product_id" value="{{ $productById->id }}" />
                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //banner -->
    <!-- brands -->
    <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
        <div class="container">
            <h3>Popular Proucts</h3>
            <div class="w3ls_w3l_banner_nav_right_grid1">
                <h6>Related Products</h6>
                @foreach($categoryProducts as $categoryProduct)
                <div class="col-md-3 w3ls_w3l_banner_left" style="margin-bottom: 30px;">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="{{asset('/front')}}/images/offer.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{ url('/product-details/'.$categoryProduct->id) }}"><img src="{{asset($categoryProduct->product_image)}}" alt=" " class="img-responsive" /></a>
                                            <p>{{$categoryProduct->product_name}}</p>
                                            <h4>$ {{ $categoryProduct->product_price }}.00</h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="#" method="post">
                                                {{csrf_field()}}
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="knorr instant soup" />
                                                    <input type="hidden" name="amount" value="3.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //brands -->

    </div>
@endsection