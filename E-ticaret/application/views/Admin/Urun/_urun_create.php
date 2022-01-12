<nav class="header-site">
					<div class="container-fluid">
						<!-- Page title and breadcrumb navigation -->
						<div class="page-title">
							<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
							<nav>
								<a href="#">Anasayfa</a>
								<span class="typcn typcn-chevron-right"></span>
								<a href="#">Ürün Ekle</a>
							</nav>
						</div>
						<!-- /Page title and breadcrumb navigation -->
						
					</div>
				</nav>
<div class="panel-body">
				<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<header class="panel-heading">Ürün Ekle</header>
								<div class="panel-body">
									<?php echo form_open_multipart(base_url().'index.php/Admin/Urunler/CreateSave');?>
										<div class="form-group">
											<label >Ürün Kodu</label>
											<input type="text" name="Kod" class="form-control" id="exampleInputEmail1" placeholder="Ürün Kodu" autofocus>
										</div>
										<div class="form-group">
											<label >Ürün Adı</label>
											<input type="text" name="Adi" class="form-control" id="exampleInputEmail1" placeholder="Ürün Adı">
										</div>
									    <div class="form-group">
											<label >Ürün Açıklama</label>
											<input type="text" name="Aciklama" class="form-control" id="exampleInputEmail1" placeholder="Ürün Açıklama">
										</div>
										<div class="form-group">
											<label >Ürün Alış Fiyatı</label>
											<input type="number" name="Alis_Fiyati" class="form-control" id="exampleInputEmail1" placeholder="Alış Fiyatı">
										</div>
										<div class="form-group">
											<label >Satış Fiyatı</label>
											<input type="text" name="Satis_Fiyati" class="form-control" id="exampleInputEmail1" placeholder="Satış Fiyatı">
										</div>
										<div class="form-group">
											<label >Ağırlık</label>
											<input type="text" name="Agirlik" class="form-control" id="exampleInputEmail1" placeholder="Ağırlığı">
										</div>
										<div class="form-group">
											<label >Stok</label>
											<input type="text" name="Stok" class="form-control" id="exampleInputEmail1" placeholder="Stok">
										</div>
										<div class="form-group">
										<label for="control-label" for="selectError">Anasayfa da gösterilsin mi?</label><br>
											 <select id="selectError" name="Anasayfa" data-rel="chosen">
				 							 <option value="1">Evet</option>
											 <option value="0">Hayır</option>
											</select>
										</div>
										<div class="controls">
										<label for="control-label" for="selectError">Paylaş </label><br>
											 <select id="selectError" name="Durum" data-rel="chosen">
				 							 <option value="1">Evet</option>
											 <option value="0">Hayır</option>
											</select>
										</div>
										<div class="controls">
										<label for="control-label" for="selectError">Slayta Eklensin Mi </label><br>
											 <select id="selectError" name="Slider" data-rel="chosen">
				 							 <option value="1">Evet</option>
											 <option value="0">Hayır</option>
											</select>
										</div>
										<div class="form-group">
											<label >Anahtar Kelime</label>
											<input type="text" name="AnahtarKelime" class="form-control" id="exampleInputEmail1" placeholder="Anahtar Kelime">
										</div>
										<div class="form-group">
										<select name="KategoriId" class="form-control" required="">
										<?php
										foreach ($data as $result) {
										?>
										<option value="<?=$result->KategoriId?>">
											<?=$result->KategoriAdi ?>
										</option>
										<?php 
									 		}
										?>
										</select>
										</div>
										<div class="form-group">
											<label >Ürün Detay</label>
											<textarea type="text" name="Detay" class="form-control" id="exampleInputEmail1" placeholder="İçerik">
											</textarea>
											<script>
               								 CKEDITOR.replace( 'Detay' );
           		 							</script>
										</div>
											<div class="form-group">
												<input type="file" name="userfile" size="20" />
											</div>
										</div>

										<button type="submit" class="btn btn-default">Kaydet</button>
								</div>
							</div>
						</div>
					</div>
					</div>