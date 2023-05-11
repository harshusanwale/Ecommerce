<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="{{asset('themes/bootshop/bootstrap.min.css')}}" media="screen"/>
    <link href="{{asset('themes/css/base.css')}}" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="{{asset('themes/css/bootstrap-responsive.min.css')}}" rel="stylesheet"/>
	<link href="{{asset('themes/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="{{asset('themes/js/google-code-prettify/prettify.css')}}" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="{{asset('themes/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('themes/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('themes/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('themes/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('themes/images/ico/apple-touch-icon-57-precomposed.png')}}">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> User</strong></div>
	<div class="span6">
	<div class="pull-right">
		<a href="product_summary.html"><span class="">Fr</span></a>
		<a href="product_summary.html"><span class="">Es</span></a>
		<span class="btn btn-mini">En</span>
		<a href="product_summary.html"><span>&pound;</span></a>
		<span class="btn btn-mini">$155.00</span>
		<a href="product_summary.html"><span class="">$</span></a>
		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
@include('front-theme.layout.header')
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="{{asset('themes/images/ico-cart.png')}}" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> ELECTRONICS [230]</a>
				<ul>
				<li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> CLOTHES [840] </a>
			<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>	
				<li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>												
			</ul>
			</li>
			<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
				<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>	
				<li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>												
			</ul>
			</li>
			<li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
			<li><a href="products.html">SPORTS & LEISURE [58]</a></li>
			<li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
		</ul>
		<br/>
		  <div class="thumbnail">
			<img src="{{asset('themes/images/products/panasonic.jpg')}}" alt="Bootshop panasonoc New camera"/>
			<div class="caption">
			  <h5>Panasonic</h5>
				<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="{{asset('themes/images/products/kindle.png')}}" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
				  <h5>Kindle</h5>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
				</div>
			  </div><br/>
			<div class="thumbnail">
				<img src="{{asset('themes/images/payment_methods.png')}}" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">login</li>
    </ul>
	<h3> Login</h3>	
	<div class="well">
	<!--
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->
     @if(Session::has('failed'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('failed')}}</strong>
          </div>   
        @endif
	<form class="form-horizontal" method="post" action="{{route('user_login')}}">
        @csrf
		<h4></h4>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="input_email" placeholder="Email" name="email" required>
		</div>
        @if($errors->has('email'))
         <span class="text-danger">{{ $errors->first('email')}}</span>
        @endif
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" id="inputPassword1" placeholder="Password" name="password" required>
		</div>
        @if($errors->has('password'))
         <span class="text-danger">{{ $errors->first('password')}}</span>
        @endif
	  </div>	
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input class="btn btn-large btn-success" type="submit" value="login" />
			</div>
		</div>		
	</form>
    </div>

    <h3>Register</h3>	
	<div class="well">
	<!--
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->
     @if(Session::has('success'))
           <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('success')}}</strong>
          </div>        
          @endif
	<form class="form-horizontal"  method="post" action="{{route('user_store')}}">
    @csrf
		<h4></h4>
        <div class="control-group">
			<label class="control-label" for="inputFname1">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" placeholder="First Name" name="fname" required>
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLnam" placeholder="Last Name" name="lname" required>
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="input_email" placeholder="Email" name="email" required>
		</div>
        @if($errors->has('email'))
                <span class="text-danger">{{$errors->first('email')}}<span>
                @endif
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" id="inputPassword1" placeholder="Password" name="password" required>
		</div>
    </div>
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input class="btn btn-large btn-success" type="submit" value="Register" />
			</div>
		</div>		
	</form>
</div>

</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
@include('front-theme.layout.footer')
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="{{asset('themes/js/jquery.js')}}" type="text/javascript"></script>
	<script src="{{asset('themes/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('themes/js/google-code-prettify/prettify.js')}}"></script>
	
	<script src="{{asset('themes/js/bootshop.js')}}"></script>
    <script src="{{asset('themes/js/jquery.lightbox-0.5.js')}}"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="{{asset('themes/css/#')}}" name="amelia" title="Amelia"><img src="{{asset('themes/switch/images/clr/amelia.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="spruce" title="Spruce"><img src="{{asset('themes/switch/images/clr/spruce.png')}}" alt="bootstrap business templates" ></a>
		<a href="{{asset('themes/css/#')}}" name="superhero" title="Superhero"><img src="{{asset('themes/switch/images/clr/superhero.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="cyborg"><img src="{{asset('themes/switch/images/clr/cyborg.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="cerulean"><img src="{{asset('themes/switch/images/clr/cerulean.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="journal"><img src="{{asset('themes/switch/images/clr/journal.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="readable"><img src="{{asset('themes/switch/images/clr/readable.png')}}" alt="bootstrap business templates"></a>	
		<a href="{{asset('themes/css/#')}}" name="simplex"><img src="{{asset('themes/switch/images/clr/simplex.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="slate"><img src="{{asset('themes/switch/images/clr/slate.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="spacelab"><img src="{{asset('themes/switch/images/clr/spacelab.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="united"><img src="{{asset('themes/switch/images/clr/united.png')}}" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
    <div class="images patterns">
		<a href="{{asset('themes/css/#')}}" name="pattern1"><img src="{{asset('themes/switch/images/pattern/pattern1.png')}}" alt="bootstrap business templates" class="active"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern2"><img src="{{asset('themes/switch/images/pattern/pattern2.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern3"><img src="{{asset('themes/switch/images/pattern/pattern3.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern4"><img src="{{asset('themes/switch/images/pattern/pattern4.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern5"><img src="{{asset('themes/switch/images/pattern/pattern5.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern6"><img src="{{asset('themes/switch/images/pattern/pattern6.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern7"><img src="{{asset('themes/switch/images/pattern/pattern7.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern8"><img src="{{asset('themes/switch/images/pattern/pattern8.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern9"><img src="{{asset('themes/switch/images/pattern/pattern9.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern10"><img src="{{asset('themes/switch/images/pattern/pattern10.png')}}" alt="bootstrap business templates"></a>
		
		<a href="{{asset('themes/css/#')}}" name="pattern11"><img src="{{asset('themes/switch/images/pattern/pattern11.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern12"><img src="{{asset('themes/switch/images/pattern/pattern12.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern13"><img src="{{asset('themes/switch/images/pattern/pattern13.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern14"><img src="{{asset('themes/switch/images/pattern/pattern14.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern15"><img src="{{asset('themes/switch/images/pattern/pattern15.png')}}" alt="bootstrap business templates"></a>
		
		<a href="{{asset('themes/css/#')}}" name="pattern16"><img src="{{asset('themes/switch/images/pattern/pattern16.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern17"><img src="{{asset('themes/switch/images/pattern/pattern17.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern18"><img src="{{asset('themes/switch/images/pattern/pattern18.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern19"><img src="{{asset('themes/switch/images/pattern/pattern19.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('themes/css/#')}}" name="pattern20"><img src="{{asset('themes/switch/images/pattern/pattern20.png')}}" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
<span id="themesBtn"></span>
</body>
</html>