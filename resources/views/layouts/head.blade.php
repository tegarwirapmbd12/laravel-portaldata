<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'dashboard' ?></title>
    <title>dashboard</title>
    @yield('css')



    <link rel="shortcut icon" href="{{ asset('mazer/dist/assets/compiled/svg/logo1.png') }}" alt="Logo" srcset="" width="35" height="150" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('mazer/dist/assets/compiled/svg/logo1.png') }}" alt="Logo" srcset="" width="35" height="150">
    <link rel="stylesheet" href="{{ asset('mazer/dist/assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/dist/assets/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/dist/assets/extensions/choices.js/public/assets/styles/choices.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/dist/assets/compiled/css/extra-component-comment.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    {{-- Select 2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />


    <!-- <link rel="stylesheet" href="mazer/dist/assets/buutton.css"> -->

    <!-- datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="css/color.css">
	<style>
		/*
=====================================================
					Default Style
=====================================================
*/
*{
	box-sizing: border-box;
}
body {
  position: relative;
}
ul,ol{
	list-style-type: none;
	margin: 0px;
	padding: 0px;
}
a,a:hover,a:focus{
	text-decoration: none;
}
h1,h2,h3,h4,h5,h6,p,figure{
	margin: 0px;
	padding: 0px;
}
p{
	line-height: 1.9em;
	font-weight: 400;
	font-size: 15px;
}
.overlay{
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	background-color: rgba(35,35,40,0.8);
}
.shutter-lock{
	transform: translateZ(0);
	position: relative;
}
.shutter-lock:after{
	content: '';
	position: absolute;
	top: 0px;
	left: 0px;
	width: 0px;
	height: 100%;
	background: #00cccc;
	-webkit-transition : all 0.5s ease-in-out;
	transition : all 0.5s ease-in-out;
	z-index: -1;
}
.shutter-lock:hover:after{
	width: 100%;
}
.title{
	text-transform: uppercase;
}
.title strong{
	font-weight: 900;
}
.slider-btn{
	font-weight: 700;
}
.parallax{
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0px;
	left: 0px;
	z-index: -999;
	background-size: cover;
	background-position: center;
	background-attachment: fixed;
}
.more{
	text-align: center;
}
.more a{
	display: inline-block;
	padding: 15px 25px;
	border-radius: 2px;
	font-weight: 700;
	text-transform: uppercase;
	-webkit-transition : all 0.3s ease;
	transition : all 0.3s ease;
}
.more a:hover{
	box-shadow: 0px 0px 5px #ff9999;
}
/*
====================================================
				6.Portfolio
====================================================
*/
.work{
	padding: 80px 0px;
}
.work-title{
	padding-bottom: 30px;
	text-align: center;
}
.portfolio-controllers-container{
	margin-bottom: 30px;
	text-align: center;
}
.portfolio-controllers{
	padding: 0px;
	height: 100%;
	display: inline-block;
}
.portfolio-controllers .filter-btn{
	float: left;
	padding: 10px 15px;
	border: 1px solid #ff9800;
	outline: 0px;
	margin: 0px 15px 15px 0px;
	-webkit-transition : all 0.3s ease;
	transition : all 0.3s ease;
	cursor: pointer;
}
.more-container{
	margin-top: 40px;
}
.portfolio{
	padding: 14px 7px;
}
.portfolio-image{
	position: relative;
	overflow: hidden;
}
.portfolio-image img{
	width: 100%;
	height: 100%;
	transform : scale(1);
	-webkit-transition : all 0.5s ease;
	transition : all 0.5s ease;
	position: relative;
}
.portfolio-image:hover img{
	transform : scale(1.2);
	cursor: pointer;
}
.portfolio-image::after{
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0px;
	left: 0px;
	background-color: rgba(34,35,40,0.5);
}
.work .caption{
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0px;
	left: 0px;
	cursor: pointer;
	opacity: 0;
	transform : scale(1.2);
	-webkit-transition : all 0.5s ease;
	transition : all 0.5s ease;
	padding: 10px;
	z-index: 999;
}
.caption-content{
	width: 100%;
	height: 100%;
	position: relative;
}
.portfolio-image:hover .caption{
	opacity: 1;
	transform : scale(1);
}
.caption-content{
	width: 100%;
	height: 100%;
	text-align: center;
	/*background-color : rgba(0,204,204,0.8);*/
	position: relative;
}
.portfolio-link{
	display: inline-block;
	position: absolute;
	top: 50%;
    left: 50%;
    transform: translateX(-50%);
}
.portfolio-link li{
	float: left;
	margin-right: 5px;
}
.portfolio-link li a i{
	font-size: 25px;
	border-radius: 2px;
	-webkit-transition : all 0.3s linear;
	transition : all 0.3s linear;
}
.portfolio-link li a i.fa-link{
	padding: 10px 15px;
}
.portfolio-link li a i.fa-plus{
	padding: 10px 17px;
}
.portfolio-item-title{
	width: 90%;
	height: 40px;
	overflow: hidden;
    font-size: 18px;
   	position: absolute;
	left: 50%;
	top: 25%;
	transform: translateX(-50%);
}
.portfolio-item-title:after{
	position: absolute;
    bottom: 0;
    left: 35%;
    content: '';
    width: 30%;
    height: 2px;
}

.footer-bottom p{
	text-align: center;
}

/*Xtra Large*/
@media (min-width: 1200px){}
/*Medium Device*/
@media(min-width:992px){}
/*Small Device*/
@media(min-width:768px){}
/*Xtra Small Device*/
@media(max-width:767px){

	.portfolio-controllers .filter-btn{
		margin-bottom: 15px;
		padding: 10px 12px;
		margin-left: 10px;
	}
}
.more a{
	background-color: #ff9800;
	color: #fff;
}
/*
====================================================
				Work
====================================================
*/
.work{
	background-color: #f9f9f9;
}
.portfolio-controllers .btn-default{
	color: #808080;
}
.portfolio-controllers .filter-btn{
	background-color: transparent;
	color: #222;
	border-color: #ff9800;
}
.portfolio-controllers .filter-btn.active-work{
    color: #ff9800;
}
.portfolio-link li a i{
	background-color: transparent;
	/*border: 1px solid #00CCCC;*/
	color: #fff;
}
.portfolio-link li a:hover i{
	/*border-color: transparent;*/
}
.portfolio-link li a:hover i.fa-link,
.portfolio-link li a:hover i.fa-plus{
	background-color: #ff9800;
	color: #fff;
}
.portfolio-item-title{
	color: #fff;
}
.portfolio-item-title:after{
	background-color: transparent;
}
.caption-content{
	background-color: rgba(225, 225, 225, .7);
}
	</style>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <script type="text/javascript"><!--
        google_ad_client = "ca-pub-2783044520727903";
        /* jQuery_demo */
        google_ad_slot = "2780937993";
        google_ad_width = 728;
        google_ad_height = 90;
        //-->
        </script>
        <script type="text/javascript"
        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script>
</head>
