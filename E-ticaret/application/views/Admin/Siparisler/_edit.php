<nav class="header-site">
	<div class="container-fluid">
		<!-- Page title and breadcrumb navigation -->
		<div class="page-title">
			<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
			<nav>
				<a href="#">Anasayfa</a>
				<span class="typcn typcn-chevron-right"></span>
				<a href="#">Kullanıcı Ekle</a>
			</nav>
		</div>
		<!-- /Page title and breadcrumb navigation -->

	</div>
</nav>
<div class="panel-body">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<header class="panel-heading">Kullanıcı Düzenleme</header>
				<div class="panel-body">
					<form role="form" action="<?=base_url() ?>index.php/Admin/Urunler/EditSave/<?=$data[0]->UrunId ?>" method="post">
										<div class="form-group">
											<label >Ürün Kodu</label>
											<input type="text" name="Kod" value="<?=$data[0]->Kod ?>"  class="form-control" id="exampleInputEmail1" placeholder="Ürün Kodu">
										</div>
										<div class="form-group">
											<label >Ürün Adı</label>
											<input type="text" name="Adi" value="<?=$data[0]->Adi ?>" class="form-control" id="exampleInputEmail1" placeholder="Ürün Adı">
										</div>
									    <div class="form-group">
											<label >Ürün Açıklama</label>
											<input type="text" name="Aciklama" value="<?=$data[0]->Aciklama ?>" class="form-control" id="exampleInputEmail1" placeholder="Ürün Açıklama">
										</div>
										<div class="form-group">
											<label >Ürün Alış Fiyatı</label>
											<input type="text" name="Alis_Fiyati" value="<?=$data[0]->Alis_Fiyati ?>" class="form-control" id="exampleInputEmail1" placeholder="Alış Fiyatı">
										</div>
										<div class="form-group">
											<label >Satış Fiyatı</label>
											<input type="text" name="Satis_Fiyati" value="<?=$data[0]->Satis_Fiyati ?>" class="form-control" id="exampleInputEmail1" placeholder="Satış Fiyatı">
										</div>
										<div class="form-group">
											<label >Ağırlık</label>
											<input type="text" name="Agirlik" value="<?=$data[0]->Agirlik ?>" class="form-control" id="exampleInputEmail1" placeholder="Ağırlığı">
										</div>
										<div class="form-group">
											<label >Stok</label>
											<input type="text" name="Stok" value="<?=$data[0]->Stok ?>"  class="form-control" id="exampleInputEmail1" placeholder="Stok">
										</div>
										<div class="controls">
										<label for="control-label" for="selectError">Anasayfa da gösterilsin mi?</label><br>
										<select name="Anasayfa" data-rel="chosen">
										<?php
											if($data[0]->Anasayfa == False)
											{
										?>
										<option value="0">Hayır</option>
										<option value="1">Evet</option>
									
										<?php
										}
											else{
												?>
											<option value="1">Evet</option>
											<option value="0">Hayır</option>
											<?php
												}
												?>
											</select>
										</div>
										<div class="controls">
										<label for="control-label" for="selectError">Slayta Gösterilsin mi</label><br>
										<select name="Slider" data-rel="chosen">
										<?php
											if($data[0]->Slider == False)
											{
										?>
										<option value="0">Hayır</option>
										<option value="1">Evet</option>
									
										<?php
										}
											else{
												?>
											<option value="1">Evet</option>
											<option value="0">Hayır</option>
											<?php
												}
												?>
											</select>
										</div>
										<div class="controls">
										<label for="control-label" for="selectError">Paylaşılsın Mı?</label><br>
										<select name="Durum" data-rel="chosen">
										<?php
											if($data[0]->Durum == False)
											{
										?>
										<option value="0">Hayır</option>
										<option value="1">Evet</option>
									
										<?php
										}
											else{
												?>
											<option value="1">Evet</option>
											<option value="0">Hayır</option>
											<?php
												}
												?>
											</select>
										</div>
										<div class="form-group">
											<label >Anahtar Kelime</label>
											<input type="text" name="AnahtarKelime" value="<?=$data[0]->AnahtarKelime ?>"  class="form-control" id="exampleInputEmail1" placeholder="Anahtar Kelime">
										</div>
										<div class="form-group">
										<label >Kategori Seçiniz</label>
										<select name="KategoriAdi" class="form-control" required="">
										<option value="<?=$data[0]->KategoriAdi ?>">
											<?=$data[0]->KategoriAdi ?>
										</option>
										<?php
										foreach ($KategoriData as $result) {
										?>
										<option value="<?=$result->Adi?>">
											<?=$result->Adi ?>
										</option>
										<?php 
									 		}
										?>
										</select>
										</div>
										<div class="form-group">
										<label >Sayfa İçerik</label>
											<textarea type="text" name="Detay" class="form-control" id="exampleInputEmail1" placeholder="Detay"><?=$data[0]->Detay ?></textarea>
											<script>
               								 CKEDITOR.replace( 'Detay' );
           		 						</script>
						</div>
										</div>
										<button type="submit" class="btn btn-default">Kaydet</button>
									
				</form>
			</div>
		</div>
	</div>
</div>
</div>