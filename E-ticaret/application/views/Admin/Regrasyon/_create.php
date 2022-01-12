<nav class="header-site">
					<div class="container-fluid">
						<!-- Page title and breadcrumb navigation -->
						<div class="page-title">
							<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
							<nav>
								<a href="#">Anasayfa</a>
								<span class="typcn typcn-chevron-right"></span>
								<a href="<?=base_url() ?>index.php/Admin/Regrasyon">Listeye Gözat</a>
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
									<form role="form" action="<?=base_url() ?>index.php/Admin/Regrasyon/CreateSave" method="post">
										<div class="form-group">
											<label >Bağımsız  Değişken (X)</label>
											<input type="text" name="bagimsizDegisken" class="form-control" id="exampleInputEmail1" placeholder="Bağımsız Değişken">
										</div>
										<div class="form-group">
											<label >Bağımlı  Değişken (Y)</label>
											<input type="text" name="bagimliDegisken" class="form-control" id="exampleInputEmail1" placeholder="Bağımlı Değişken">
										</div>
										</div>
										<button type="submit" class="btn btn-default">Kaydet</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					</div>