	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php 
				$this->load->view('_sidebar');
				?>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
					
					
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?=base_url() ?>uploads/<?=$data[0]->Resim ?>" alt="" />
								
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										<?php 
										foreach ($galeriler as $result) {
										
										?>
										  <a href=""><img style="width: 85px" src="<?=base_url() ?>uploads/<?=$result->Resim?>" alt=""></a>
										<?php
										}
										 ?>
										</div>

										
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								<h2><?=$data[0]->Adi ?></h2>
								<p>Ürün Kodu:<?=$data[0]->Kod?></p>
								<img src="<?=base_url() ?>assets/eshopper/images/product-details/rating.png" alt="" />
								<span>
									<span><?=$data[0]->Satis_Fiyati ?> TL</span>
									<form action="<?=base_url()?>/Sepet/sepeteekle/<?=$data[0]->UrunId?>" method="POST">
									<label>Miktar:</label>
									<input type="number" name="birimi" value="1" />
									<button class="btn btn-fefault cart">
										<i  class="fa fa-shopping-cart"></i>
										Sepete Ekle
									</button>
									</form>
								</span>
								<p><b>Stok:</b> <?=$data[0]->Stok ?> Adet Mevcut</p>
								<p><b>Kategori:</b> <?=$data[0]->KategoriAdi ?></p>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">AÇIKLAMA</a></li>
								
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
								<div class="col-sm-12">
									<p>
										<?=$data[0]->Detay ?>
									</p>
								</div>
							</div>

							
						</div>
					</div><!--/category-tab-->
					
					
				</div>
			</div>
		</div>
	</section>
