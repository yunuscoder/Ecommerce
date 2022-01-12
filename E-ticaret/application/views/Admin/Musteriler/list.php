	<nav class="header-site">
		<div class="container-fluid">
			<!-- Page title and breadcrumb navigation -->
			<div class="page-title">
				<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
				<nav>
					<a href="#">Anasayfa</a>
					<span class="typcn typcn-chevron-right"></span>
					<a href="#">Müşteri Listesi</a>
				</nav>
			</div>
			<!-- /Page title and breadcrumb navigation -->

		</div>
	</nav>

	<div class="panel-body">
		<div class="row">

			<!-- Responsive table -->
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

				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Adı Soyadı</th>
									<th>Email</th>
									<th>Cep Tel</th>
									<th>Kayıt Tarihi</th>
									<th>Şehir</th>
									<th>İlçe</th>
									<th>Adres</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($data as $result) 
								{
									?>
									<tr>
										<td><?=$result->Adi ?> <?=$result->Soyadi ?></td>
										<td><?=$result->Email ?></td>
										<td><?=$result->CepTel ?></td>
										<td><?=$result->Tarih ?></td>												
										<td><?=$result->Il ?></td>
										<td><?=$result->Ilce ?></td>
										<td><?=$result->Adres ?></td>
											<td>
												<a href="<?=base_url() ?>Admin/Musteriler/Edit/<?=$result->MusteriId ?>"><button class="btn btn-default btn-sm">Düzenle</button></a>
												<a href="<?=base_url() ?>Admin/Musteriler/Delete/<?=$result->MusteriId ?>"><button class="btn btn-default btn-sm"  onclick="return confirm('Silmek istediğinizden emin misiniz?');">Sil</button></a>
											</td>
										</tr>
										<?php 
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- /Responsive table -->
		</div>

	</div>