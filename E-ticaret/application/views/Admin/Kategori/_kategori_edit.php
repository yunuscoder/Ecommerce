<nav class="header-site">
	<div class="container-fluid">
		<!-- Page title and breadcrumb navigation -->
		<div class="page-title">
			<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
			<nav>
				<a href="#">Anasayfa</a>
				<span class="typcn typcn-chevron-right"></span>
				<a href="#">Kategori Düzenle</a>
			</nav>
		</div>
		<!-- /Page title and breadcrumb navigation -->

	</div>
</nav>
<div class="panel-body">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<header class="panel-heading">Kategori Düzenleme</header>
				<div class="panel-body">
					<form role="form" action="<?=base_url() ?>index.php/Admin/Kategoriler/EditSave/<?=$data[0]->KategoriId ?>" method="post">
						<div class="form-group">
							<label >Kategori Adı</label>
							<input type="text" name="Adi" value="<?=$data[0]->KategoriAdi ?>" class="form-control"  placeholder="Adi">
						</div>
						<div class="form-group">
							<label >Açıklama</label>
							<input type="text" name="Aciklama" value="<?=$data[0]->KategoriAciklama ?>" class="form-control" placeholder="Açıklama">
						</div>
						<div class="form-group">
							<label>Anahtar Kelime</label>
							<input type="text" name="AnahtarKelime" value="<?=$data[0]->KategoriAnahtarKelime ?>" class="form-control" placeholder="Anahtar Kelime">
						</div>
					</div>
					<button type="submit" class="btn btn-default">Güncelle</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>