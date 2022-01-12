<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $pagedescription;?>">
    <meta name="keywords" content="<?php echo $pagekeywords;?>">
    <meta name="author" content="EvSera">

    <title><?php echo $pagetitle;?></title>

   
    <link href="<?=base_url() ?>assets/eshopper/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url() ?>assets/eshopper/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url() ?>assets/eshopper/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url() ?>assets/eshopper/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url() ?>assets/eshopper/css/animate.css" rel="stylesheet">
	<link href="<?=base_url() ?>assets/eshopper/css/main.css" rel="stylesheet">
	<link href="<?=base_url() ?>assets/eshopper/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url() ?>assets/eshopper/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url() ?>assets/eshopper/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url() ?>assets/eshopper/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url() ?>assets/eshopper/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<?php
foreach ($ayarlar as $result) {
?>
 
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> <?=$result->Tel?></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> <?=$result->Email?></a></li>
								<li><a href="https://www.facebook.com/<?=$result->Facebook?>"><i class="fa fa-facebook"> Bizi Takip Edin!</i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		<?php
	}
	?>
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?=base_url() ?>"><img src="<?=base_url() ?>assets/eshopper/images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							<?php
							if ($this->session->session_Data) {
								
							
							?>
								<li><a href="<?=base_url() ?>Sepet"><i class="fa fa-shopping-cart"></i> Sepetim</a></li>
								<li><a href="<?=base_url() ?>Home/cikis"><i class="fa fa-crosshairs"></i> Çıkış</a></li>
								<li><a href="<?=base_url() ?>Home/uyepanel"><i class="fa fa-user"></i> Profil</a></li>
								<li><a href=""> Hoşgeldiniz <?=$this->session->session_Data['Adi'] ?> <?=$this->session->session_Data['Soyadi'] ?> </a></li>
							<?php
							}else{


							?>
								<li><a href="<?=base_url() ?>UyeOl"><i class="fa fa-user"></i>Giriş</a></li>
								<li><a href="<?=base_url() ?>UyeOl"><i class="fa fa-user"></i>Üye Ol</a></li>
							<?php
						}
							 ?>
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
								<li><a href="<?=base_url() ?>" class="active">Anasayfa</a></li>
								<li ><a href="<?=base_url() ?>Urunler">Ürünler</a>
                                   
                                </li> 
                                <?php
									foreach ($sayfalar as $result) {
                                 ?>
								<li><a href="<?=base_url() ?>Home/sayfadetay/<?=$result->SayfaId ?>"><?=$result->Adi ?></a></li>
								<?php
								 } ?>
								<li><a href="<?=base_url() ?>Iletisim">İletişim</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->