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
					<form role="form" action="<?=base_url() ?>index.php/Admin/Musteriler/EditSave/<?=$data[0]->MusteriId ?>" method="post">
						<div class="form-group">
							<label >Adı</label>
							<input type="text" name="Adi" value="<?=$data[0]->Adi ?>" class="form-control" id="exampleInputEmail1" placeholder="Adı">
						</div>
						<div class="form-group">
							<label >Soyadı</label>
							<input type="text" name="Soyadi" value="<?=$data[0]->Soyadi ?>" class="form-control" id="exampleInputEmail1" placeholder="Soyadı">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email Adres</label>
							<input type="email" name="Email" value="<?=$data[0]->Email ?>" class="form-control" id="exampleInputEmail1" placeholder="Email Adres">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Şifre</label>
							<input type="Password" name="Sifre" value="<?=$data[0]->Sifre ?>" class="form-control" id="exampleInputPassword1" placeholder="Şifre">
						</div>
						<div class="form-group">
							<label >Cep Telefonu</label>
							<input type="text" name="CepTel" value="<?=$data[0]->CepTel ?>" class="form-control" id="exampleInputEmail1" placeholder="Soyadı">
						</div
						<div class="form-group">
							<label >İl</label>
							<input type="text" name="Il" value="<?=$data[0]->Il ?>" class="form-control" id="exampleInputEmail1" placeholder="Soyadı">
						</div>
						<div class="form-group">
							<label >İlçe</label>
							<input type="text" name="Ilce" value="<?=$data[0]->Ilce ?>" class="form-control" id="exampleInputEmail1" placeholder="Soyadı">
						</div>
						<div class="form-group">
							<label >Adres</label>
							<input type="text" name="Adres" value="<?=$data[0]->Adres ?>" class="form-control" id="exampleInputEmail1" placeholder="Açıklama">
						</div>
					</div>
					<button type="submit" class="btn btn-default">Güncelle</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>