<nav class="header-site">
	<div class="container-fluid">
		<!-- Page title and breadcrumb navigation -->
		<div class="page-title">
			<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
			<nav>
				<a href="#">Anasayfa</a>
				<span class="typcn typcn-chevron-right"></span>
				<a href="#">Ayar Düzenle</a>
			</nav>
		</div>
		<!-- /Page title and breadcrumb navigation -->

	</div>
</nav>
<div class="panel-body">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<header class="panel-heading">Ayar Düzenleme</header>
				<div class="panel-body">
					<form role="form" action="<?=base_url() ?>index.php/Admin/Ayarlar/EditSave/<?=$data[0]->AyarId ?>" method="post">
						<div class="form-group">
							<label >Adı</label>
							<input type="text" name="Adi" value="<?=$data[0]->Adi ?>" class="form-control" id="exampleInputEmail1" placeholder="Adı">
						</div>
						<div class="form-group">
							<label >Anahtar Kelime</label>
							<input type="text" name="Keywords" value="<?=$data[0]->Keywords ?>" class="form-control" id="exampleInputEmail1" placeholder="Soyadı">
						</div>
						<div class="form-group">
							<label >Açıklama</label>
							<input type="text" name="Aciklama" value="<?=$data[0]->Aciklama ?>" class="form-control" id="exampleInputEmail1" placeholder="Soyadı">
						</div>

					<div class="form-group">
							<label >Smtp Server</label>
							<input type="text" name="SmtpServer" value="<?=$data[0]->SmtpServer ?>" class="form-control" id="exampleInputEmail1" placeholder="Soyadı">
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Smtp Email</label>
							<input type="email" name="SmtpEmail" value="<?=$data[0]->SmtpEmail ?>" class="form-control" id="exampleInputEmail1" placeholder="Email Adres">
						</div>
						<div class="form-group">
							<label >Smtp Port</label>
							<input type="text" name="SmtpPort" value="<?=$data[0]->SmtpPort ?>" class="form-control" id="exampleInputEmail1" placeholder="Soyadı">
						</div>
						<div class="form-group">
							<label >Smtp Şifre</label>
							<input type="text" name="SmtpSifre" value="<?=$data[0]->SmtpSifre ?>" class="form-control" id="exampleInputEmail1" placeholder="Soyadı">
						</div>
						<div class="form-group">
							<label >Adres</label>
							<input type="text" name="Adres" value="<?=$data[0]->Adres ?>" class="form-control" id="exampleInputEmail1" placeholder="Açıklama">
						</div>
						<div class="form-group">
							<label >Şehir</label>
							<input type="text" name="Sehir" value="<?=$data[0]->Sehir ?>" class="form-control" id="exampleInputEmail1" placeholder="Açıklama">
						</div>
						<div class="form-group">
							<label >Telefon</label>
							<input type="text" name="Tel" value="<?=$data[0]->Tel ?>" class="form-control" id="exampleInputEmail1" placeholder="Soyadı">
						</div>
						
						<div class="form-group">
							<label >Email</label>
							<input type="text" name="Email" value="<?=$data[0]->Email ?>" class="form-control" id="exampleInputEmail1" placeholder="Soyadı">
						</div>
						<div class="form-group">
							<label >Facebook</label>
							<input type="text" name="Facebook" value="<?=$data[0]->Facebook ?>" class="form-control" id="exampleInputEmail1" placeholder="Soyadı">
						</div>
					
						<div class="form-group">
											<label >İletişim</label>
											<textarea type="text" name="Iletisim" class="form-control" id="exampleInputEmail1" placeholder="İçerik">
											<?=$data[0]->Iletisim ?>
											</textarea>
											<script>
               								 CKEDITOR.replace( 'Iletisim' );
           		 							</script>
					    </div>
					</div>
					<button type="submit" class="btn btn-default">Güncelle</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>