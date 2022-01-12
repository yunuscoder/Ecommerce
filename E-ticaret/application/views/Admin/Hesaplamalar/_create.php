<nav class="header-site">
					<div class="container-fluid">
						<!-- Page title and breadcrumb navigation -->
						<div class="page-title">
							<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
							<nav>
								<a href="#">Anasayfa</a>
								<span class="typcn typcn-chevron-right"></span>
								<a href="<?=base_url() ?>index.php/Admin/Hesaplamalar">Listeye Gözat</a>
							</nav>
						</div>
						<!-- /Page title and breadcrumb navigation -->
						
					</div>
				</nav>
<div class="panel-body">
				<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
							<?php if($this->session->flashdata("result"))
					{?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">Kapat</button>
						<strong><?=$this->session->flashdata("result") ?></strong>
					</div>
					<?php 
				}
				?>
								<header class="panel-heading">Veri Ekle</header>
								<div class="panel-body">
									<form role="form" action="<?=base_url() ?>index.php/Admin/Hesaplamalar/CreateSave" method="post">
										<div class="form-group">
											<label >No</label>
											<input type="text" name="no" class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										<div class="form-group">
											<label >Araç Adı</label>
											<input type="text" name="adi" class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										<div class="form-group">
											<label >Agirlik</label>
											<input type="text" name="agirlik" class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										<div class="form-group">
											<label >Güç</label>
											<input type="text" name="guc" class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										<div class="form-group">
											<label >Hacim</label>
											<input type="text" name="hacim" class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										<div class="form-group">
											<label >Vites</label>
											<input type="text" name="vites" class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										<div class="form-group">
											<label >Tork</label>
											<input type="text" name="tork" class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										<div class="form-group">
											<label >Devir</label>
											<input type="text" name="devir" class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										<div class="form-group">
											<label >Yakıt</label>
											<input type="text" name="yakit" class="form-control" id="exampleInputEmail1" placeholder="Değer">
										</div>
										</div>
										<button type="submit" class="btn btn-default">Kaydet</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					</div>