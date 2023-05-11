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
	<hr class="soften">
	<h1>Visit us</h1>
	<hr class="soften"/>	
	<div class="row">
		<div class="span4">
		<h4>Contact Details</h4>
		<p>	18 Fresno,<br/> CA 93727, USA
			<br/><br/>
			info@bootsshop.com<br/>
			﻿Tel 123-456-6780<br/>
			Fax 123-456-5679<br/>
			web:bootsshop.com
		</p>		
		</div>
			
		<div class="span4">
		<h4>Opening Hours</h4>
			<h5> Monday - Friday</h5>
			<p>09:00am - 09:00pm<br/><br/></p>
			<h5>Saturday</h5>
			<p>09:00am - 07:00pm<br/><br/></p>
			<h5>Sunday</h5>
			<p>12:30pm - 06:00pm<br/><br/></p>
		</div>
		<div class="span4">
		<h4>Email Us</h4>
		<form class="form-horizontal">
        <fieldset>
          <div class="control-group">
           
              <input type="text" placeholder="name" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="email" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="subject" class="input-xlarge"/>
          
          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" class="input-xlarge"></textarea>
           
          </div>

            <button class="btn btn-large" type="submit">Send Messages</button>

        </fieldset>
      </form>
		</div>
	</div>
	<div class="row">
	<div class="span12">
	<iframe style="width:100%; height:300; border: 0px" scrolling="no" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14&amp;output=embed"></iframe><br />
	<small><a href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
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
<link rel="stylesheet" href="{{asset('themes/switch/themeswitch.css')}}" type="text/css" media="screen" />
<script src="{{asset('themes/switch/theamswitcher.js')}}" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="{{asset('themes/css/#')}}" name="bootshop"><img src="{{asset('themes/switch/images/clr/bootshop.png')}}" alt="bootstrap business templates" class="active"></a>
	<a href="{{asset('themes/css/#')}}" name="businessltd"><img src="{{asset('themes/switch/images/clr/businessltd.png')}}" alt="bootstrap business templates" class="active"></a>
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