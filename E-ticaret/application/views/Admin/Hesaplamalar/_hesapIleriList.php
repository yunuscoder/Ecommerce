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
				<a href="<?=base_url() ?>Admin/Hesaplamalar/ileriHesaplaNorm">
					<button class="btn btn-purple" type="button">Yeni Veri</button>
				</a>
			
				<div class="panel-body">
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
									<th>Öğrencinin Adı</th>
									<th>Araç Adı</th>
									<th>No</th>
									<th>Girdiler</th>
									<th>Net1 / Çıktı1</th>
									<th>Net2 / Çıktı2</th>
									<th>Net3 / Çıktı3</th>
									<th>NetSonuc / Sonuc</th>
									<th>E Değeri</th>
									<th></th>
								
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($data as $result) 
								{
									?>
									<tr>
										<td><?=$result->oadi ?></td>
										<td><?=$result->adi ?></td>
										<td><?=$result->no ?></td>
										<td><?=substr($result->girdi1 ,4)?> - <?=substr($result->girdi2,4) ?></td>
										<td><?=number_format($result->net1,2) ?> / <?=number_format($result->cikti1,2) ?></td>
										<td><?=number_format($result->net2,2) ?> / <?=number_format($result->cikti2,2) ?></td>
										<td><?=number_format($result->net3,2) ?> / <?=number_format($result->cikti3,2) ?></td>
										<td><?=number_format($result->sonuc,2) ?> / <?=number_format($result->sonuccikti,2) ?></td>
										<td><?=$result->error ?></td>
										<td>
												<a href="<?=base_url() ?>Admin/Hesaplamalar/DeleteYsa/<?=$result->ileriId ?>"><button class="btn btn-default btn-sm"  onclick="return confirm('Silmek istediğinizden emin misiniz?');">Sil</button></a>
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