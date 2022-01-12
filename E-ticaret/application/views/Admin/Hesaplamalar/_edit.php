<nav class="header-site">
	<div class="container-fluid">
		<!-- Page title and breadcrumb navigation -->
		<div class="page-title">
			<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
			<nav>
				<a href="#">Anasayfa</a>
				<span class="typcn typcn-chevron-right"></span>
				<a href="#">Sayfa Ekle</a>
			</nav>
		</div>
		<!-- /Page title and breadcrumb navigation -->

	</div>
</nav>
<div class="panel-body">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<header class="panel-heading">Veri Düzenleme</header>
				<div class="panel-body">
					<form role="form" action="<?=base_url() ?>index.php/Admin/Hesaplamalar/EditSave/<?=$data[0]->hesapId ?>" method="post">
						
										<div class="form-group">
											<label >No</label>
											<input type="text" name="no" value="<?=$data[0]->no ?>" class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										<div class="form-group">
											<label >Araç Adı</label>
											<input type="text" name="adi" value="<?=$data[0]->adi ?>" class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										<div class="form-group">
											<label >Agirlik</label>
											<input type="text" name="agirlik" value="<?=$data[0]->agirlik ?>" class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										<div class="form-group">
											<label >Güç</label>
											<input type="text" name="guc" value="<?=$data[0]->guc ?>" class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										<div class="form-group">
											<label >Hacim</label>
											<input type="text" name="hacim" value="<?=$data[0]->hacim ?>" class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										<div class="form-group">
											<label >Vites</label>
											<input type="text" name="vites" value="<?=$data[0]->vites ?>" class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										<div class="form-group">
											<label >Tork</label>
											<input type="text" name="tork" value="<?=$data[0]->tork ?>" class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										<div class="form-group">
											<label >Devir</label>
											<input type="text" name="devir" value="<?=$data[0]->devir ?> "class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										<div class="form-group">
											<label >Yakıt</label>
											<input type="text" name="yakit" value="<?=$data[0]->yakit ?> "
											class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
						
					</div>
					<button type="submit" class="btn btn-default">Güncelle</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>