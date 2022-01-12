<nav class="header-site">
					<div class="container-fluid">
						<!-- Page title and breadcrumb navigation -->
						<div class="page-title">
							<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
							<nav>
								<span class="typcn typcn-chevron-right"></span>
								<a href="#">Ürün Resmi Ekle</a>
							</nav>
						</div>
						<!-- /Page title and breadcrumb navigation -->
						
					</div>
				</nav>
				<div class="panel-body">
				<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<header class="panel-heading">Ürün Resmi Ekle</header>
								<div class="panel-body" >
									<?php echo form_open_multipart(base_url().'Admin/Urunler/do_upload');?>
										<input type="hidden" name="UrunId" value="<?=$data[0]->UrunId?>">
										</div>
											<div class="form-group">
												<input type="file" multiple name="userfile[]" size="20" />

											</div>
										</div>

										<button type="submit" class="btn btn-default">Kaydet</button>
										<p>&nbsp;</p>
								</div>
								<?php
					foreach ($galeriler as $result) {
					
					 ?>
					<div class="col-md-4">
					 <img style="max-height: 140px; width: auto;" src="<?=base_url() ?>uploads/<?=$result->Resim ?>" alt="" /><br/><br/><center><a href="<?=base_url()?>Admin/Urunler/resimsil/<?=$result->GaleriId ?>">Sil</a></center>
					</div>
					 <?php 
					 }?>
								
							</div>
						</div>
					</div>
					</div>



					