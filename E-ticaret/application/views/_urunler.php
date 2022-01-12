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
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">ÜRÜNLERİMİZ</h2>
						<?php
						foreach ($urunler as $result) {
							
						
						?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<a href="<?=base_url()?>/Urunler/urundetay/<?=$result->UrunId?>"><img src="<?=base_url() ?>uploads/<?=$result->Resim ?>" alt="" /></a>
										<h2><?=$result->Satis_Fiyati ?>TL</h2>
										<a href="<?=base_url()?>/Urunler/urundetay/<?=$result->UrunId?>"><p><?=$result->Adi ?> <?=$result->Agirlik ?> Kg </p></a>
										<a href="<?=base_url()?>/Sepet/sepeteekle/<?=$result->UrunId?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
									</div>
								</div>
							</div>
						</div>
						<?php
						}
						?>

						
						
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>