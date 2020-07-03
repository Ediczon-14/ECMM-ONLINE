<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ECMM Store</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="https://github.com/Ediczon-14/programacion-web/blob/master/ECMM.PNG?raw=true">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body style="background-color:white;" >
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="https://github.com/Ediczon-14/programacion-web/blob/master/ECMM.PNG?raw=true" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									Pais
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Perú</a></li>
									<li><a href="#">EE.UU</a></li>
									<li><a href="#">Canada</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Dolar</a></li>
									<li><a href="#">Libra</a></li>
									<li><a href="#">Soles</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Cuenta</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Lista de deseos</a></li>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Revisa</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Carro</a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> Iniciar sesión
</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Inicio</a></li>
								<li class="dropdown"><a href="#">Tienda<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php">Tienda</a></li>
										<li><a href="checkout.php">Revisa</a></li> 
										<li><a href="cart.php">Carro</a></li> 
										<li><a href="login.php">Iniciar Sesión</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.php">Lista de blogs</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.php">404</a></li>
								<li><a href="contact-us.php">CONTACTO</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Buscar"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>ECMM</span></h1>
									<h2>Tenemos los Mejores Monitores Gamers</h2>
									<p>¡Cómpra ya! Uno de los mejores monitores de 27 pugadas con una tasa de refresco de 144 Hz</p>
									<button type="button" class="btn btn-default get">Consiguelo ahora</button>
								</div>
								<div class="col-sm-6">
									<img src="https://http2.mlstatic.com/monitor-asus-rog-strix-27-D_NQ_NP_997602-MPE32461984069_102019-F.jpg" class="girl img-responsive" alt="" />
									<img src="#"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>ECMM</span></h1>
									<h2>Contamos con los mejores perifericos para Gamers</h2>
									<p>¡Que esperas! tenemos teclado, mouse y mas.</p>
									<button type="button" class="btn btn-default get">Consiguelo ahora</button>
								</div>
								<div class="col-sm-6">
									<img src="https://http2.mlstatic.com/pc-gamer-ryzen-3200g-8gb-1tb-video-rx-570-4gb-perifericos-D_NQ_NP_774901-MPE42366921746_062020-F.webp" class="girl img-responsive" alt="" />
									<img src="#"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>ECMM</span></h1>
									<h2>Contamos con una aplica gama de procesadores</h2>
									<p>!Que esperas! Tenemos lo ultimo en procesadores.</p>
									<button type="button" class="btn btn-default get">Consiguelo ahora</button>
								</div>
								<div class="col-sm-6">
									<img src="https://hardwaresfera.com/wp-content/uploads/2017/03/amd-intel-imagen.jpg" class="girl img-responsive" alt="" />
									<img src="#" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>CATEGORÍA</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											MARCAS
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Hyperex </a></li>
											<li><a href="#">Razer </a></li>
											<li><a href="#">Asus </a></li>
											<li><a href="#">Logitec</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Productos
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Teclado</a></li>
											<li><a href="#">Mouse</a></li>
											<li><a href="#">Monitor</a></li>
											<li><a href="#">Procesador</a></li>
											<li><a href="#">Memoria Ram</a></li>
											<li><a href="#">Targeta de video</a></li>
											<li><a href="#">Disipador de Calor</a></li>
											<li><a href="#">Case</a></li>
											<li><a href="#">Refrigeracion</a></li>
											<li><a href="#">Almacenamiento de Memoria</a></li>
										</ul>
									</div>
								</div>
							</div>
							
						</div><!--/category-products-->
				
						
						<div class="price-range"><!--price-range-->
							<h2>Rando de Precio</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="10000" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">S/ 0</b> <b class="pull-right">S/ 10000</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="https://github.com/Ediczon-14/programacion-web/blob/master/ECMM.PNG?raw=true" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">PC ENSAMBLADA</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="https://http2.mlstatic.com/computadora-gamer-i7-8700-32ghz-16gb-ddr4-disco-ssd-480gb-D_NQ_NP_771637-MPE32996907562_112019-F.webp" alt="" />
											<h2>S/5.830</h2>
											<p>Computadora Gamer I7-8700, 3.2ghz 16gb Ddr4 Disco Ssd 480gb</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>S/5.830</h2>
												<p>Computadora Gamer I7-8700, 3.2ghz 16gb Ddr4 Disco Ssd 480gb</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Añadir a la lista de deseos</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Añadir a comparar</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="https://http2.mlstatic.com/computador-gamer-intel-core-i5-full-juegos-en-fhd-D_NQ_NP_792006-MPE42204469062_062020-F.webp" alt="" />
										<h2>S/2.500</h2>
										<p>Computador Gamer Intel Core I5 Full Juegos En Fhd</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>S/2.500</h2>
											<p>Computador Gamer Intel Core I5 Full Juegos En Fhd</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Añadir a la lista de deseos</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Añadir a comparar</a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">MONITORES</a></li>
								<li><a href="#blazers" data-toggle="tab">PROCESADORES</a></li>
								<li><a href="#sunglass" data-toggle="tab">TECLADOS</a></li>
								<li><a href="#kids" data-toggle="tab">MOUSE</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="https://http2.mlstatic.com/monitor-gamer-msi-optix-mag27c-27-led-1920x1080-hdmi-dp-D_NQ_NP_658813-MPE32060593451_092019-F.webp" alt="" />
												<h2>S/1.749</h2>
												<p>Monitor Gamer Msi Optix Mag27c, 27 Led, 1920x1080, Hdmi /dp</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="https://http2.mlstatic.com/monitor-gamer-aoc-full-hd-27-pulgadas-curvo-D_NQ_NP_612038-MPE40497652339_012020-F.webp" alt="" />
												<h2>S/999</h2>
												<p>Monitor Gamer Aoc Full Hd 27 Pulgadas Curvo</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="https://http2.mlstatic.com/monitor-lenovo-thinkvision-p27h-10-27-2560x1440-hdmi-usb-c-D_NQ_NP_903418-MPE32860275977_112019-F.webp" alt="" />
												<h2>S/1.980</h2>
												<p>Monitor Lenovo Thinkvision P27h-10 27 2560x1440 Hdmi Usb-c</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="https://http2.mlstatic.com/monitor-lg-led-24-24mk430h-b-1920-x-1080-hdmi-D_NQ_NP_897770-MPE32067386384_092019-F.webp" alt="" />
												<h2>S/553</h2>
												<p>Monitor LG Led 24 24mk430h-b 1920 X 1080, Hdmi</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="blazers" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="https://http2.mlstatic.com/procesador-intel-core-i7-9700k-D_NQ_NP_731653-MPE41304604962_042020-F.webp" alt="" />
												<h2>S/1.759</h2>
												<p>Procesador Intel Core I7-9700k</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="https://http2.mlstatic.com/procesador-intel-core-i3-9100f-360ghz-6mb-lga1151-grupohlm-D_NQ_NP_607085-MPE32067486536_092019-F.webp" alt="" />
												<h2>S/390</h2>
												<p>Procesador Intel Core I3-9100f 3.60ghz 6mb Lga1151| Grupohlm</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="https://http2.mlstatic.com/procesador-amd-ryzen-5-2600x-360ghz-16mb-l3-6-core-am4-D_NQ_NP_654360-MPE32060224165_092019-F.webp" alt="" />
												<h2>S/799</h2>
												<p>Procesador Amd Ryzen 5 2600x, 3.60ghz, 16mb L3, 6 Core, Am4,</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="https://http2.mlstatic.com/procesador-amd-ryzen-threadripper-3990x-29-ghz-64-core-trx4-D_NQ_NP_990390-MPE40694184383_022020-F.webp" alt="" />
												<h2>S/15966.00</h2>
												<p>Procesador Amd Ryzen Threadripper 3990x 2.9 Ghz 64-core Trx4</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="sunglass" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="https://http2.mlstatic.com/teclado-razer-blackwidow-2019-mechanical-green-switch-esp-D_NQ_NP_841557-MPE42126627410_062020-F.webp" alt="" />
												<h2>S/399</h2>
												<p>Teclado Razer Blackwidow 2019 Mechanical Green Switch Esp</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="https://http2.mlstatic.com/teclado-razer-huntsman-elite-chroma-opto-mechanical-sp-D_NQ_NP_817365-MPE31255481485_062019-F.webp" alt="" />
												<h2>S/909</h2>
												<p>Teclado Razer Huntsman Elite Chroma Opto-mechanical Sp</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="https://http2.mlstatic.com/tecladco-gamer-hyper-alloy-fps-pro-D_NQ_NP_659999-MPE40307000815_012020-F.webp" alt="" />
												<h2>S/310</h2>
												<p>Tecladco Gamer Hyper Alloy Fps Pro</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="https://http2.mlstatic.com/teclado-gamer-seisa-con-reposa-munecas-luces-led-D_NQ_NP_750827-MPE32751022292_112019-F.webp" alt="" />
												<h2>S/65</h2>
												<p>Teclado Gamer Seisa Con Reposa Muñecas Luces Led</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="kids" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="https://http2.mlstatic.com/mouse-logitech-g203-gamer-D_NQ_NP_862531-MPE41844872296_052020-F.webp" alt="" />
												<h2>S/132</h2>
												<p>Mouse Logitech G203 Gamer</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="https://http2.mlstatic.com/mouse-gamer-logitech-g-g502-lightspeed-wireless-D_NQ_NP_873432-MPE41740664456_052020-F.webp" alt="" />
												<h2>S/399</h2>
												<p>Mouse Gamer Logitech G G502 Lightspeed Wireless</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="https://http2.mlstatic.com/mouse-razer-deathadder-essential-6400-dpi-green-light-D_NQ_NP_763532-MPE31255481141_062019-F.webp" alt="" />
												<h2>S/119</h2>
												<p>Mouse Razer Deathadder Essential 6400 Dpi Green Light</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="https://http2.mlstatic.com/mouse-gamer-7-botones-rgb-led-antryx-m630u-D_NQ_NP_760963-MPE32030961693_082019-F.webp" alt="" />
												<h2>S/79</h2>
												<p>Mouse Gamer 7 Botones Rgb Led Antryx M630u</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Servicio</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Ayuda en linea</a></li>
								<li><a href="#">Contacta con nosotros</a></li>
								<li><a href="#">Estado del pedido</a></li>
								<li><a href="#">Cambiar locación</a></li>
								<li><a href="#">Preguntas frecuentes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>COMPRA RÁPIDA</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Camiseta</a></li>
								<li><a href="#">De los hombres</a></li>
								<li><a href="#">De las mujeres</a></li>
								<li><a href="#">Tarjetas de regalo</a></li>
								<li><a href="#">Zapatos</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Políticas</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Términos de Uso</a></li>
								<li><a href="#">Política de privacidad</a></li>
								<li><a href="#">Refund PolicyPolitica de reembolso</a></li>
								<li><a href="#">Sistema de cobranza</a></li>
								<li><a href="#">Sistema de entradas</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Sobre el comprador</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Información de la empresa</a></li>
								<li><a href="#">Carreras</a></li>
								<li><a href="#">Ubicación de la tienda</a></li>
								<li><a href="#">Programa de afiliados</a></li>
								<li><a href="#">Derechos de autor</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Sobre el comprador</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Tu correo electrónico" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Obtenga las actualizaciones más recientes de nuestro sitio y se actualizará ...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">POWERED BY EDICZON ©</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="https://www.instagram.com/ediczon_exn/?hl=es-la">EXN</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>