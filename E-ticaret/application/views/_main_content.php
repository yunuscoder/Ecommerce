
<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to=0 class="active"></li>
						<?php
							$cnt=1;
							foreach ($slider as $result) {
							  ?>
							<li data-target="#slider-carousel" data-slide-to=<?=$cnt?> class="active"></li>
							<?php<?=$cnt=$cnt+1?> ?>
							<?php }?>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<div class="col-sm-6">
								<h1><span>EV</span>-SERA</h1>
								<h2>Hoşgeldiniz</h2>
								<p>Doğal Beslenin</p>
								<a href="<?=base_url()?>Urunler"><button type="button" class="btn btn-default get">Ürünlerimizi İnceleyin</button></a>
							</div>
							<div class="col-sm-6">
								<img src="<?=base_url() ?>assets/eshopper/images/home/girl1.jpg" class="girl img-responsive" alt="" />
								
							</div>
						</div>
						<?php
						foreach ($slider as $result) {
						 	
						  ?>
						<div class="item">
							<div class="col-sm-6">

								<h1><span>EV</span>-SERA</h1>
								<h2><?=$result->Adi?></h2>
								<p><?=$result->Aciklama?> </p>
							
								<a href="<?=base_url()?>/Urunler/urundetay/<?=$result->UrunId?>"><button type="button" class="btn btn-default get">Ürünü İncele</button></a>
							</div>
							<div class="col-sm-6">
								<img style="max-height: 441px;" src="<?=base_url() ?>uploads/<?=$result->Resim ?>" class="girl img-responsive" alt="" />
								
							</div>
						</div>
						<?php }?>
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
					<?php 
				$this->load->view('_sidebar');
				?>
			</div>

			<div class="col-sm-9 padding-right">
			
				<?php if($this->session->flashdata("result"))
					{?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">Kapat</button>
						<strong><?=$this->session->flashdata("result") ?></strong>
					</div>
					<?php 
				}
				?>
				<div class="category-tab"><!--category-tab-->
					<h2 class="title text-center">ÜRÜNLERİMİZ</h2>
					<div class="tab-content">
						<div class="tab-pane fade active in" id="tshirt" >
							<?php
							foreach ($data as $result) {
							?>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<a href="<?=base_url()?>/Urunler/urundetay/<?=$result->UrunId?>"><img src="<?=base_url() ?>uploads/<?=$result->Resim ?>" alt="" />
										<h2><?=$result->Satis_Fiyati ?>TL</h2>
										<p><?=$result->Adi ?> <?=$result->Agirlik ?> Kg </p>
										
										<a href="<?=base_url()?>/Sepet/sepeteekle/<?=$result->UrunId?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
										</div>

									</div>
								</div>
							</div>
							<?php
							}
							?>
						</div>

						
					</div>
				</div><!--/category-tab-->

				

			</div>
		</div>
	</div>
</section>