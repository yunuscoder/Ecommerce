<div class="left-sidebar">
					<h2>KATEGORİ</h2>
					<div class="panel-group category-products" id="accordian"><!--category-productsr-->
					<?php 
					foreach ($kategoriData as $result) {
					?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a  href="<?=base_url() ?>Urunler/listele/<?=$result->KategoriId ?>">
										<span class="badge pull-right"></span>
										<?=$result->Adi ?>
									</a>
								</h4>
							</div>
						</div>
						
						<?php } ?>
					</div><!--/category-products-->
				

					<div class="shipping text-center"><!--shipping-->
						<img src="<?=base_url() ?>assets/eshopper/images/home/shipping.jpg" alt="" />
					</div><!--/shipping-->
					<div class="shipping text-center"><!--shipping-->
						<img src="<?=base_url() ?>assets/eshopper/images/home/shipping.jpg" alt="" />
					</div><!--/shipping-->

				</div>