@extends('frontEnd.master')
@section('title')
Category product

@endsection
@section('header-title')
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{url('/')}}">Home</a><span>|</span></li>
                <li>Category Prouct</li>
            </ul>
        </div>
    </div>
@endsection
@section('content')
<!-- banner -->
	<div class="banner">

		<div class="w3l_banner_nav_right">
            <div class="w3l_banner_nav_right_banner9 w3l_banner_nav_right_banner_pet">
                <h4>Your Pet Favourite Food</h4>
                <p>Sint occaecat cupidatat non proident</p>
                <a href="{{url('/product-details')}}">Shop Now</a>
            </div>

			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
				<h3 class="w3l_fruit">{{$category->category_name}}</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
					@foreach($categoryProducts as $categoryProduct)

					<div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd" style="margin-bottom: 28px;">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="{{asset('/front')}}/images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="{{url('/product-details/'.$categoryProduct->id)}}"><img title=" " alt=" " src="{{asset($categoryProduct->product_image)}}" /></a>
											<p>{{$categoryProduct->product_name}}</p>
											<h4>${{$categoryProduct->product_price}}.00</h4>										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="can - tuna for cats" />
													<input type="hidden" name="amount" value="8.00" />
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
		<div class="clearfix"></div>
	</div>
<!-- //banner -->


@endsection