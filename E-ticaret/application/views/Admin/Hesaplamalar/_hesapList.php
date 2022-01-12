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
				
				<div class="panel-body">
				<form role="form" action="<?=base_url() ?>index.php/Admin/Hesaplamalar/ileriHesapla" method="post">
				<input type="text" name="oadi"  class="form-control" id="exampleInputEmail1" placeholder="Öğrencinin Adı Soyadı"><br>
				<input type="number" name="no"  class="form-control" id="exampleInputEmail1" placeholder="Numaranın Son Hanesi"><br>
				<label>1. Girdi</label>
				<select name="girdi1" class="form-control" required="">
										
										<option value="Ağırlık">Ağırlık</option>
										<option>Güç</option>
										<option>Hacim</option>
										<option>Vites</option>
										<option>Tork</option>
										<option>Devir</option>
										<option>Yakıt</option>
										</select>
										<br>	
				
				<label>2. Girdi</label>
				<select name="girdi2" class="form-control" required="">
										
										<option value="Ağırlık">Ağırlık</option>
										<option>Güç</option>
										<option>Hacim</option>
										<option>Vites</option>
										<option>Tork</option>
										<option>Devir</option>
										<option>Yakıt</option>
										</select>
										<br>
				<button type="submit" class="btn btn-default">Hesapla</button>
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
										<td><?=number_format($result->normAgirlik,2) ?></td>
										<td><?=number_format($result->normGuc,2) ?></td>
										<td><?=number_format($result->normHacim,2) ?></td>
										<td><?=number_format($result->normVites,2) ?></td>
										<td><?=number_format($result->normTork,2) ?></td>
										<td><?=number_format($result->normDevir,2) ?></td>
										<td><?=number_format($result->normYakit,2) ?></td>
																						
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