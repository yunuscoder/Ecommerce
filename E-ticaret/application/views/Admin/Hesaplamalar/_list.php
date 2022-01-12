	<nav class="header-site">
		<div class="container-fluid">
			<!-- Page title and breadcrumb navigation -->
			<div class="page-title">
				<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
				<nav>
					<a href="#">Anasayfa</a>
					<span class="typcn typcn-chevron-right"></span>
					
				</nav>
			</div>
			<!-- /Page title and breadcrumb navigation -->

		</div>
	</nav>

	<div class="panel-body">
		<div class="row">

			<!-- Responsive table -->
			<div class="col-md-12">
				<a href="<?=base_url() ?>Admin/Hesaplamalar/Create">
					<button class="btn btn-purple" type="button">Yeni Veri</button>
				</a>
				<a href="<?=base_url() ?>Admin/Hesaplamalar/ileriHesaplaNorm">
					<button class="btn btn-purple" type="button">Normalize Yap</button>
				</a>
				<div class="panel-body">
				
				</form>
				</div>
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
									<th>No</th>
									<th>Araç Adı</th>
									<th>Ağırlık</th>
									<th>Güç</th>
									<th>Hacim</th>
									<th>Vites</th>
									<th>Tork</th>
									<th>Devir</th>
									<th>Yakıt</th>
									
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($data as $result) 
								{
									?>
									<tr>
										<td><?=$result->no ?></td>
										<td><?=$result->adi ?></td>
										<td><?=$result->agirlik ?></td>
										<td><?=$result->guc ?></td>
										<td><?=$result->hacim ?></td>
										<td><?=$result->vites ?></td>
										<td><?=$result->tork ?></td>
										<td><?=$result->devir ?></td>
										<td><?=number_format($result->yakit,2) ?></td>
																						
											<td>
												<a href="<?=base_url() ?>Admin/Hesaplamalar/Edit/<?=$result->hesapId ?>"><button class="btn btn-default btn-sm">Düzenle</button></a>
												<a href="<?=base_url() ?>Admin/Hesaplamalar/Delete/<?=$result->hesapId ?>"><button class="btn btn-default btn-sm"  onclick="return confirm('Silmek istediğinizden emin misiniz?');">Sil</button></a>
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