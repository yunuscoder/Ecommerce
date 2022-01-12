	<nav class="header-site">
		<div class="container-fluid">
			<!-- Page title and breadcrumb navigation -->
			<div class="page-title">
				<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
				<nav>
					<a href="#">Anasayfa</a>
					<span class="typcn typcn-chevron-right"></span>
					<a href="#">Mesajlar Listesi</a>
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
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Adı Soyadı</th>
									<th>Email</th>
									<th>Konu</th>
									<th>Durum</th>
									<th>Ip</th>
								
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($data as $result) 
								{
									?>
									<tr>
										<td><?=$result->Adi ?> </td>
										<td><?=$result->Email ?></td>
										<td><?=$result->Konu ?> </td>
										<td><?=$result->Durum ?></td>
										<td><?=$result->Ip ?> </td>
										<td>
											<a href="<?=base_url() ?>Admin/Mesajlar/Edit/<?=$result->MesajId ?>"><button class="btn btn-default btn-sm">Düzenle</button></a>
											<a href="<?=base_url() ?>Admin/Mesajlar/Delete/<?=$result->MesajId ?>"><button class="btn btn-default btn-sm"  onclick="return confirm('Silmek istediğinizden emin misiniz?');">Sil</button></a>
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