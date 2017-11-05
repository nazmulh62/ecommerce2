@extends('frontEnd.master')
@section('title')
About Us
@endsection
@section('header-title')
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{url('/')}}">Home</a><span>|</span></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
@endsection
@section('content')

    <!-- banner -->
    <div class="banner">

        <div class="w3l_banner_nav_right">
            <!-- about -->
            @foreach($allPublushedAbouts as $allPublushedAbout)
            <div class="privacy about">
                <h3>About Us</h3>
                <p class="animi">{{$allPublushedAbout->about_description}}</p>
                <div class="agile_about_grids">
                    <div class="col-md-6 agile_about_grid_right">
                        <img src="{{asset($allPublushedAbout->about_image)}}" alt=" " class="img-responsive" />
                    </div>
                    <div class="col-md-6 agile_about_grid_left">
                        <ol>
                            <li>laborum et dolorum fuga</li>
                            <li>corrupti quos dolores et quas</li>
                            <li>est et expedita distinctio</li>
                            <li>deleniti atque corrupti quos</li>
                            <li>excepturi sint occaecati cupiditate</li>
                            <li>accusamus et iusto odio</li>
                        </ol>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            @endforeach
            <!-- //about -->
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //banner -->
    <!-- team -->
    <div class="team">
        <div class="container">
            <h3>Meet Our Amazing Team</h3>
            <div class="agileits_team_grids">
                @foreach($allPublushedTeams as $allPublushedTeam)
                <div class="col-md-3 agileits_team_grid">
                    <img src="{{asset($allPublushedTeam->team_image)}}" alt=" " class="img-responsive" />
                    <h4>{{$allPublushedTeam->member_name}}</h4>
                    <p>{{$allPublushedTeam->member_designation}}</p>
                    <ul class="agileits_social_icons agileits_social_icons_team">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team -->
    <!-- testimonials -->
    <div class="testimonials">
        <div class="container">
            <h3>Testimonials</h3>
            <div class="w3_testimonials_grids">
                <div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>Andrew Smith <span>Customer</span></h4>
                                </div>
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>Thomson Richard <span>Customer</span></h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>Crisp Kale <span>Customer</span></h4>
                                </div>
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>John Paul <span>Customer</span></h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>Rosy Carl <span>Customer</span></h4>
                                </div>
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>Rockson Doe <span>Customer</span></h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </article>
                    </div>
                </div>
                <script src="{{asset('/front')}}/js/jquery.wmuSlider.js"></script>
                <script>
                    $('.example1').wmuSlider();
                </script>
            </div>
        </div>
    </div>
    <!-- //testimonials -->

@endsection