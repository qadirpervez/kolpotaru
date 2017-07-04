<!DOCTYPE html>
<html>
<head>
<title>Home || Kolpotaru</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ URL::asset('css/frontStyle.css') }}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/default.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/component.css') }}" />
<!-- js -->
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<!-- //js -->
<!-- cart -->
<script src="{{ URL::asset('js/simpleCart.min.js')}}"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="{{ URL::asset('js/bootstrap-3.1.1.min.js') }}"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- timer -->
<link rel="stylesheet" href="{{ URL::asset('css/jquery.countdown.css') }}" />
<!-- //timer -->
<!-- animation-effect -->
<link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet">
<script src="{{ URL::asset('js/wow.min.js') }}"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>

<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-grid  main-div-header">
				<div class="header-grid-right animated wow slideInLeft" data-wow-delay=".5s">
					<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
						<h1><a href="#">Kolpotaru<span>Shop anywhere</span></a></h1>
					</div>
				</div>
        <div class="search-form-div">
					<form class="form-inline" method="get" action="#">
						<div class="form-group">
							{{ csrf_field() }}
							<input class="search-form-input" name="search" value="{{ isset($_GET['search']) ? $_GET['search'] : ''}}" size="80" placeholder="Search For any product...">
							<button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</form>
				</div>
				<div class="header-grid-left animated wow slideInRight pages-static" data-wow-delay=".5s">
					<ul class="">
						<li><i class="glyphicon glyphicon-lock" aria-hidden="true"></i><a href="{{ route('seller.create') }}">Seller Registration</a></li>
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="{{ route('seller.login') }}">Seller Login</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="logo-nav">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="container-fluid">
            <span class="menu"><img src="{{ URL::asset('img/menu.png') }}"></span>
						<div class="clearfix"></div>
				<nav id="cbp-hrmenu" class="cbp-hrmenu">
					<ul class="res">
						<li>
							<a href="#">Men</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
									<div class="nav-click-list">
										<ul>
											<li><a href="#">Western Wear</a></li>
											<li><a href="#">Sports Wear</a></li>
											<li><a href="#">Acessories</a></li>
											<li><a href="#">Foot Wear</a></li>
											<li><a href="#">Men's Wear</a></li>
											<li><a href="#">Inner Wear</a></li>
											<li><a href="#">Sleep Wear</a></li>
										</ul>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/men1.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>

									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/men2.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/men3.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Women</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
									<div class="nav-click-list">
										<ul>
											<li><a href="#">Western Wear</a></li>
											<li><a href="#">Accessories</a></li>
											<li><a href="#">Bags</a></li>
											<li><a href="#">Foot Wear</a></li>
											<li><a href="#">Women's Wear</a></li>
											<li><a href="#">Inner Wear</a></li>
											<li><a href="#">Sleep Wear</a></li>
										</ul>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/women1.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>

									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/women2.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/women3.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Handicrafts</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
									<div class="nav-click-list">
										<ul>
											<li><a href="#">Best Seller</a></li>
											<li><a href="#">Curated Crafts</a></li>
											<li><a href="#">Handcrafted Jewellery</a></li>
											<li><a href="#">Handcrafted Footwear</a></li>
											<li><a href="#">Handcrafted Apparel</a></li>
											<li><a href="#">Handcrafted Home</a></li>
										</ul>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/handicraft1.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>

									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/handicraft2.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/handicraft3.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Kids</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
									<div class="nav-click-list">
										<ul>
											<li><a href="#">Toys and Games</a></li>
											<li><a href="#">Girl's Clothing</a></li>
											<li><a href="#">Acessories</a></li>
											<li><a href="#">Boy's Clothing</a></li>
											<li><a href="#">Infant Apparel</a></li>
											<li><a href="#">Baby Care</a></li>
											<li><a href="#">Kid's Footwear</a></li>
										</ul>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="https://kartrocket-res.cloudinary.com/image/fetch/w_293,h_321,q_auto,c_fill,f_auto/https://nozzle.s3-ap-southeast-1.amazonaws.com/push/images/1493274159_Top_Menu_Banner_Kids1.jpg" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>

									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="https://kartrocket-res.cloudinary.com/image/fetch/w_293,h_321,q_auto,c_fill,f_auto/https://nozzle.s3-ap-southeast-1.amazonaws.com/push/images/1493274176_Top_Menu_Banner_Kids2.jpg" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="https://kartrocket-res.cloudinary.com/image/fetch/w_293,h_321,q_auto,c_fill,f_auto/https://nozzle.s3-ap-southeast-1.amazonaws.com/push/images/1493274159_Top_Menu_Banner_Kids1.jpg" alt="Men's Fashion" class="img-responsive">
										</a>
									</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Gifts</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
									<div class="nav-click-list">
										<ul>
											<li><a href="#">Gifts for Him</a></li>
											<li><a href="#">Gifts for Her</a></li>
											<li><a href="#">Gifts for Kids</a></li>
											<li><a href="#">Wedding GIfts</a></li>
											<li><a href="#">Gifts by Relation</a></li>
											<li><a href="#">Gifts by Interest</a></li>
											<li><a href="#">Gifts for Friends</a></li>
										</ul>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/gift1.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>

									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/gift2.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/gift3.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Featured Shops</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
									<div class="nav-click-list">
										<ul>
											<li><a href="#">Men</a></li>
											<li><a href="#">Women</a></li>
											<li><a href="#">Kids</a></li>
											<li><a href="#">Handicrafts</a></li>
											<li><a href="#">Gifts</a></li>
											<li><a href="#">Accessories</a></li>
											<li><a href="#">Collection</a></li>
										</ul>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/featuredshop1.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>

									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/featuredshop2.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/featuredshop3.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Acessories</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
									<div class="nav-click-list">
										<ul>
											<li><a href="#">Bags &amp; Wallets</a></li>
											<li><a href="#">Watches</a></li>
											<li><a href="#">Sunglasses</a></li>
											<li><a href="#">Tech Accessories</a></li>
											<li><a href="#">Women Beauty Care</a></li>
											<li><a href="#">Men Personal Care</a></li>
											<li><a href="#">Electronics</a></li>
										</ul>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/acessories1.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>

									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/acessories2.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/acessories3.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Collections</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
									<div class="nav-click-list">
										<ul>
											<li><a href="#">Latest Collection</a></li>
											<li><a href="#">Wedding Store</a></li>
											<li><a href="#">Kids Store</a></li>
											<li><a href="#">Zodiac Obsessed</a></li>
											<li><a href="#">The Fashion Edit</a></li>
											<li><a href="#">Home Essentials</a></li>
											<li><a href="#">Pop Culture Merchandise</a></li>
										</ul>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/collection1.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>

									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/collection2.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="{{ URL::asset('imagesMain/collection3.jpg') }}" alt="Men's Fashion" class="img-responsive">
										</a>
									</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Home &amp; Living</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
									<div class="nav-click-list">
										<ul>
											<li><a href="#">Home Decor</a></li>
											<li><a href="#">Home Furnishing</a></li>
											<li><a href="#">Home Furniture</a></li>
											<li><a href="#">Home Linen</a></li>
											<li><a href="#">Bath Linen &amp; Accessories</a></li>
											<li><a href="#">Garden &amp; Patio</a></li>
											<li><a href="#">Kitchen &amp; Dining</a></li>
										</ul>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="https://kartrocket-res.cloudinary.com/image/fetch/w_293,h_321,q_auto,c_fill,f_auto/https://nozzle.s3-ap-southeast-1.amazonaws.com/push/images/1493273993_Top_Menu_Banner_HomeLiving1.jpg" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>

									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="https://kartrocket-res.cloudinary.com/image/fetch/w_293,h_321,q_auto,c_fill,f_auto/https://nozzle.s3-ap-southeast-1.amazonaws.com/push/images/1493274002_Top_Menu_Banner_HomeLiving2.jpg" alt="Men's Fashion" class="img-responsive">
										</a>
									</div>
									<div class="nav-bar-category-img">
										<a href="#">
											<img  src="https://kartrocket-res.cloudinary.com/image/fetch/w_293,h_321,q_auto,c_fill,f_auto/https://nozzle.s3-ap-southeast-1.amazonaws.com/push/images/1493273993_Top_Menu_Banner_HomeLiving1.jpg" alt="Men's Fashion" class="img-responsive">
										</a>
									</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
					</ul>
				</nav>
			</div>
					</nav>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
<div class="container">
	<img src="https://kartrocket-res.cloudinary.com/image/fetch/w_1500,h_280,q_auto,f_auto/https://nozzle.s3-ap-southeast-1.amazonaws.com/push/images/1493280797_27_April_SellerOfTheWeek_Web.jpg" class="img-responsive">
</div>
<div class="clearfix"></div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
				<div class="banner-bottom-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<div class="grid">
						<figure class="effect-julia">
							<img src="images/4.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3>Best <span>Stores</span><i> at Kolpotaru</i></h3>
								<div>
									<p>Full filling dreams like never before</p>
									<p>Asured gift for every prepaid purchases</p>
									<p>More you purchase more you save</p>
								</div>
							</figcaption>
						</figure>
					</div>
				</div>
				<div class="banner-bottom-grid-left1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="images/1.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="banner-bottom-grid-left1-pos">
							<p>Discount 45%</p>
						</div>
					</div>
					<div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="banner-bottom-grid-left1-position">
							<div class="banner-bottom-grid-left1-pos1">
								<p>Latest New Collections</p>
							</div>
						</div>
					</div>
				</div>
				<div class="banner-bottom-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="{{ URL::asset('images/3.jpg') }}" alt=" " class="img-responsive" />
						</div>
						<div class="grid-left-grid1-pos">
							<p>top and classic designs <span>2017 Collection</span></p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
{{-- <!-- collections -->
	<div class="new-collections">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Trending Items</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s">Explore some trending items on kolpotaru</p>
			<div class="new-collections-grids">
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="single.html" class="product-image side-image"><img src="{{ URL::asset('imagesMain/image1.jpg') }}" alt=" " class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos">
								<a href="single.html">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/1.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/1.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="single.html">Time Watches</a></h4>
						<p>By Good Times</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>&#8377;1500</i> <span class="item_price">&#8377;390</span></p>
							<p><a class="item_add" href="#">add to cart </a></p>
						</div>
					</div>
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="single.html" class="product-image side-image"><img src="{{ URL::asset('imagesMain/image2.jpg') }}" alt=" " class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos">
								<a href="single.html">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/1.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/1.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/1.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="single.html">Running Shoes</a></h4>
						<p>By Shoe Makers</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>&#8377;2347</i> <span class="item_price">&#8377;799</span></p>
							<p><a class="item_add" href="#">add to cart </a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 new-collections-grid">
					<div class="new-collections-grid1 new-collections-grid1-image-width animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="single.html" class="product-image center-image"><img src="{{ URL::asset('imagesMain/image3.jpg') }}" alt=" " class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos new-collections-grid1-image-pos1">
								<a href="single.html">Quick View</a>
							</div>
							<div class="new-collections-grid1-right new-collections-grid1-right-rate">
								<div class="rating">
									<div class="rating-left">
										<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/1.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="single.html">Dining Table</a></h4>
						<p>By The Craftsmen</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>&#8377;17453</i> <span class="item_price">&#8377;9049</span></p>
							<p><a class="item_add" href="#">add to cart </a></p>
						</div>
					</div>
					<div class="new-collections-grid-sub-grids">
						<div class="new-collections-grid1-sub">
							<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
								<div class="new-collections-grid1-image">
									<a href="single.html" class="product-image side-image"><img src="{{ URL::asset('imagesMain/women1.jpg') }}" alt=" " class="img-responsive" /></a>
									<div class="new-collections-grid1-image-pos">
										<a href="single.html">Quick View</a>
									</div>
									<div class="new-collections-grid1-right">
										<div class="rating">
											<div class="rating-left">
												<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<h4><a href="single.html">Wall Lamp</a></h4>
								<p>By The Decorators </p>
								<div class="new-collections-grid1-left simpleCart_shelfItem">
									<p><i>&#8377;1709</i> <span class="item_price">&#8377;1459</span></p>
									<p><a class="item_add" href="#">add to cart </a></p>
								</div>
							</div>
						</div>
						<div class="new-collections-grid1-sub">
							<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
								<div class="new-collections-grid1-image">
									<a href="single.html" class="product-image side-image"><img src="{{ URL::asset('imagesMain/women2.jpg') }}" alt=" " class="img-responsive" /></a>
									<div class="new-collections-grid1-image-pos">
										<a href="single.html">Quick View</a>
									</div>
									<div class="new-collections-grid1-right">
										<div class="rating">
											<div class="rating-left">
												<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="{{ URL::asset('images/1.png') }}" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="{{ URL::asset('images/1.png') }}" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="{{ URL::asset('images/1.png') }}" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="{{ URL::asset('images/1.png') }}" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<h4><a href="single.html">Wall Lamp</a></h4>
								<p>By Home Decorator</p>
								<div class="new-collections-grid1-left simpleCart_shelfItem">
									<p><i>&#8377;1978</i> <span class="item_price">&#8377;1754</span></p>
									<p><a class="item_add" href="#">add to cart </a></p>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="single.html" class="product-image side-image"><img src="{{ URL::asset('imagesMain/women3.jp') }}g" alt=" " class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos">
								<a href="single.html">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/1.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/1.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="single.html">Pearl &amp; Stone Anklet</a></h4>
						<p>By Jewellry Store</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>&#8377;999</i> <span class="item_price">&#8377;799</span></p>
							<p><a class="item_add" href="#">add to cart </a></p>
						</div>
					</div>
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="single.html" class="product-image side-image"><img src="{{ URL::asset('imagesMain/image1.jp') }}g" alt=" " class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos">
								<a href="single.html">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/2.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{ URL::asset('images/1.png') }}" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="single.html">Stones Bangles</a></h4>
						<p>By Female Needs</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>&#8377;769</i> <span class="item_price">&#8377;548</span></p>
							<p>
								<a class="item_add" href="#">add to cart </a>
							</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //collections --> --}}
<!-- new-timer -->
    <div class="new-collections">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Trending Items</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s">Explore some of our Shops</p>
			<div class="row">
			    <div class="col-md-3">
			        <div class="side-festured-shops">
			            <div>
					        <a href="#">
					            <img src="{{ URL::asset('imagesMain/image5.jpg') }}" class="img-responsive">
                            </a>
				         </div><hr>
				    	<a class="featured-shop-name" href="#">Every Time</a>
				    	<p class="side-featured-shops-location"><i class="glyphicon glyphicon-map-marker"></i>Kolkata, India</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="side-festured-shops">
			            <div>
					        <a href="#">
					            <img src="{{ URL::asset('imagesMain/image6.jpg') }}" class="img-responsive">
                            </a>
				        </div><hr>
				    	<a class="featured-shop-name" href="#">The Timer</a>
				    	<p class="side-featured-shops-location"><i class="glyphicon glyphicon-map-marker"></i>Kolkata, India</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="side-festured-shops">
			            <div>
			                <a href="#">
			                     <img src="{{ URL::asset('imagesMain/image7.jpg') }}" class="img-responsive">
			                </a>
				        </div><hr>
				    	<a class="featured-shop-name" href="#">It Matters</a>
				    	<p class="side-featured-shops-location"><i class="glyphicon glyphicon-map-marker"></i>Kolkata, India</p>
                    </div>
                    <div class="clearfix"></div>
			    </div>
			    <div class="col-md-6">
			        <div class="center-festured-shops">
			            <div>
					        <a href="#">
					           <img src="{{ URL::asset('imagesMain/image8.jpg') }}" class="img-responsive">
                            </a>
				        </div><hr>
				    	<a href="#" class="center-festured-shops-name">Samay</a>
				    	<p class="center-featured-shops-location"><i class="glyphicon glyphicon-map-marker"></i>Kolkata, India</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                        <div class="side-festured-shops">
			                <div>
					            <a href="#">
					                <img src="{{ URL::asset('imagesMain/image9.jpg') }}" class="img-responsive">
				                </a>
				              </div><hr>
				        	<a class="bottom-featured-shop-name" href="#">Only For Her</a>
				    	    <p class="bottom-featured-shops-location"><i class="glyphicon glyphicon-map-marker"></i>Kolkata, India</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="side-festured-shops">
			                <div>
					            <a href="#">
					                <img src="{{ URL::asset('imagesMain/men1.jpg') }}" class="img-responsive">
				               </a>
				             </div><hr>
    				    	<a class="bottom-featured-shop-name" href="#">The Time</a>
				    	    <p class="bottom-featured-shops-location"><i class="glyphicon glyphicon-map-marker"></i>Kolkata, India</p>
                        </div>
                    </div>
			    </div>
			    <div class="col-md-3">
			        <div class="side-festured-shops">
			            <div>
                	        <a href="#">
					           <img src="{{ URL::asset('imagesMain/men2.jpg') }}" class="img-responsive">
                            </a>
				        </div><hr>
				    	<a class="featured-shop-name" href="#">Good Times</a>
				    	<p class="side-featured-shops-location"><i class="glyphicon glyphicon-map-marker"></i>Kolkata, India</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="side-festured-shops">
			            <div>
					        <a href="#">
					           <img src="{{ URL::asset('imagesMain/men3.jpg') }}" class="img-responsive">
                            </a>
				        </div><hr>
				    	<a class="featured-shop-name" href="#">Timex</a>
				    	<p class="side-featured-shops-location"><i class="glyphicon glyphicon-map-marker"></i>Kolkata, India</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="side-festured-shops">
			            <div>
					        <a href="#">
					            <img src="{{ URL::asset('imagesMain/gift1.jpg') }}" class="img-responsive">
				            </a>
                        </div><hr>
                        <a class="featured-shop-name" href="#">All Time</a>
				    	<p class="side-featured-shops-location"><i class="glyphicon glyphicon-map-marker"></i>Kolkata, India</p>
                    </div>
                    <div class="clearfix"></div>
			    </div>
			    <div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- //new-timer -->
<!-- collections-bottom -->
<!-- //collections-bottom -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
		        <div class="container-fluid row custom-footer">
		            <div class="col-md-4 footer-border footer-green">
		                <div class="col-md-2">
		                    <i class="glyphicon  glyphicon-lock"></i>
		                </div>
		                <div class="col-md-10">
	                        <h4>Secure Shopping</h4>
    		                <p>Shop with confidence as all payments are 100% secure</p>
		                </div>
		            </div>
		            <div class="col-md-4 footer-border footer-red">
		                <div class="col-md-2">
		                    <i class="glyphicon glyphicon-ok-sign"></i>
		                </div>
		                <div class="col-md-10">
    		                <h4>Buyer Protection</h4>
	    	                <p>Open Dispute option available</p>
                        </div>
		            </div>
		            <div class="col-md-4 footer-border footer-green">
		                <div class="col-md-2">
		                    <i class="glyphicon glyphicon-ok-sign"></i>
		                </div>
		                <div class="col-md-10">
    		                <h4>Seller Protection</h4>
	    	                <p>We care for the sellers</p>
                        </div>
		            </div>
		        </div><div class="clearfix"></div>
                <div class="row container-fluid margin-top-footer  custom-footer ">
                    <div class="col-md-9 border-next-footer">
                        <div class="row">
                            <div class="col-md-3 footer-2-border">
                                <h4 class="footer-red">Know More</h4>
                                <p>About Us</p>
                                <p>FAQ</p>
                                <p>Contact Us</p>
                            </div>
                            <div class="col-md-3 footer-2-border">
                                <h4 class="footer-green">For Buyers</h4>
                                <p>Shops</p>
                                <p>Curations</p>
                                <p>Return Policy</p>
                            </div>
                            <div class="col-md-3 footer-2-border">
                                <h4  class="footer-red">For Sellers</h4>
                                <p>Sell On Kolpotaru</p>
                                <p>Seller Guide</p>
                                <p>Seller Dashboard</p>
                            </div>
                            <div class="col-md-3 footer-2-border">
                                <h4  class="footer-green">Terms &amp; Policy</h4>
                                <p>Kolpotaru Terms</p>
                                <p>Privacy Policy</p>
                                <p>Seller Protection</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 footer-2-border border-next-footer">
                        <h4  class="footer-red">eCommerce Powered By <a href="http://wervas.com">wervas</a></h4>
                        <p>Download Our APP</p>
                    </div>
                </div>
            </div>
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="index.html">Kolpotaru <span>shop anywhere</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				<p>&amp; copy 2017 Kolpotaru. All rights reserved | Design by <a href="http://wervas.com/">wervas</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<script>
						$( "span.menu" ).click(function() {
						 	$( "ul.res" ).slideToggle( 300, function() {
						 	// Animation complete.
							});
						});
					</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="{{ URL::asset('js/cbpHorizontalMenu.min.js') }}"></script>
		<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>
</body>
</html>
