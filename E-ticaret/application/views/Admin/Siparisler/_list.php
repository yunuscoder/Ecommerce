	<nav class="header-site">
		<div class="container-fluid">
			<!-- Page title and breadcrumb navigation -->
			<div class="page-title">
				<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
				<nav>
					
				</nav>
			</div>
			

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
									<th>Ürün Kodu</th>
									<th>Ürün Adı</th>
									<th>Ürün Fiyatı</th>
									<th>Birimi</th>
									<th>Müşteri Adı Soyadı</th>
									<th>Teslimat Ad Soyad</th>
									<th>İl</th>
									<th>İlçe</th>
									<th>Adres</th>
									<th>Onay</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($data as $result) 
								{
									?>
									<tr>
										<td><?=$result->UrunKod ?> </td>
										<td><?=$result->UrunAdi ?></td>
										<td><?=$result->fiyat ?> TL</td>
										<td><?=$result->birimi ?></td>
										<td><?=$result->MusteriAdi?> <?=$result->MusteriSoyadi?></td>
										<td><?=$result->adsoy?></td>
										<td><?=$result->Il?></td>
										<td><?=$result->Ilce?></td>
										<td><?=$result->Adres?></td>
										<td>
											<?php
											if($result->Onay == False)
											{
												?>
												<span class="label label-danger">Beklemede</span>

												<?php
											}
											else{
												?>
												<span class="label label-success">Onaylandı</span>
												<?php
											}
											?>
										</td>
										<td>
										<?php

										if($result->Onay){
										 ?>
											<a href="<?=base_url() ?>Admin/Siparisler/siparisonayinikaldir/<?=$result->SiparisId ?>"><button class="btn btn-default btn-sm">Beklemeye Al</button></a>
											<?php
											}else{

												 ?>
												 <a href="<?=base_url() ?>Admin/Siparisler/siparisonayla/<?=$result->SiparisId ?>"><button class="btn btn-default btn-sm">Onayla</button></a>

											<?php }?>
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