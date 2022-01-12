	<nav class="header-site">
		<div class="container-fluid">
			<!-- Page title and breadcrumb navigation -->
			<div class="page-title">
				<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
				<nav>
					<a href="#">Anasayfa</a>
					<span class="typcn typcn-chevron-right"></span>
					<a href="#">Ürünler Listesi</a>
				</nav>
			</div>
			<!-- /Page title and breadcrumb navigation -->

		</div>
	</nav>

	<div class="panel-body">
		<div class="row">

			<!-- Responsive table -->
			<div class="col-md-12">
				<a href="<?=base_url() ?>Admin/Urunler/Create">
					<button class="btn btn-purple" type="button">Yeni Ürün</button>
				</a>

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
									<th>Ürün Kodu</th>
									<th>Ürün Adı</th>
									<th>Ürün Fiyatı</th>
									<th>Ürün Resmi</th>
									<th>Ağırlık</th>
									<th>Stok</th>
									<th>Yayınlanma</th>
									<th>Açıklama</th>
									<th>Kategori</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($data as $result) 
								{
									?>
									<tr>
										<td><?=$result->Kod ?> </td>
										<td><?=$result->Adi ?></td>
										<td><?=$result->Satis_Fiyati ?> TL</td>
										<td><img src="<?=base_url() ?>uploads/<?=$result->Resim ?>" style="max-width:80px;" alt="" /><br/><center><a href="<?=base_url() ?>Admin/Urunler/urungaleri/<?=$result->UrunId ?>">galeri ekle</a></center></td>
										
										<td><?=$result->Agirlik ?> Kg</td>
										<td><?=$result->Stok ?></td>														
										<td>
											<?php
											if($result->Durum == False)
											{
												?>
												<span class="label label-danger">Hayır</span>

												<?php
											}
											else{
												?>
												<span class="label label-success">Evet</span>
												<?php
											}
											?>

										</td>
										<td><?=$result->Aciklama ?></td>
										<td><?=$result->KategoriAdi ?></td>

										<td>
											<a href="<?=base_url() ?>Admin/Urunler/Edit/<?=$result->UrunId ?>"><button class="btn btn-default btn-sm">Düzenle</button></a>
											<a href="<?=base_url() ?>Admin/Urunler/Delete/<?=$result->UrunId ?>"><button class="btn btn-default btn-sm"  onclick="return confirm('Silmek istediğinizden emin misiniz?');">Sil</button></a>
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