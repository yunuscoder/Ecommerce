<nav class="header-site">
					<div class="container-fluid">
						<!-- Page title and breadcrumb navigation -->
						<div class="page-title">
							<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
							<nav>
								<a href="#">Anasayfa</a>
								<span class="typcn typcn-chevron-right"></span>
								<a href="#">Kategori Ekle</a>
							</nav>
						</div>
						<!-- /Page title and breadcrumb navigation -->
						
					</div>
				</nav>
<div class="panel-body">
				<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<header class="panel-heading">Kategori Ekle</header>
								<div class="panel-body">
									<form role="form" action="<?=base_url() ?>index.php/Admin/Kategoriler/CreateSave" method="post">
										<div class="form-group">
											<label >Kategori Adı</label>
											<input type="text" name="Adi" class="form-control"  placeholder="Kategori Adı">
										</div>
										<div class="form-group">
											<label >Açıklama</label>
											<input type="text" name="Aciklama" class="form-control"  placeholder="Açıklama">
										</div>
											<div class="form-group">
											<label >Anahtar Kejjjlime</label>
											<input type="text" name="AnahtarKelime" class="form-control" placeholder="Anahtar Kelime">
										</div>
										</div>
										<button type="submit" class="btn btn-default">Kaydet</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					</div>