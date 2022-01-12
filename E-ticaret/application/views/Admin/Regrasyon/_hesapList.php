	<nav class="header-site">
		<div class="container-fluid">
			<!-- Page title and breadcrumb navigation -->
			<div class="page-title">
				<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
				<nav>
					<a href="#">Anasayfa</a>
					<span class="typcn typcn-chevron-right"></span>
					<a href="#">Regrasyon Listesi</a>
				</nav>
			</div>
			<!-- /Page title and breadcrumb navigation -->

		</div>
	</nav>

	<div class="panel-body">
		<div class="row">

			<!-- Responsive table -->
			<div class="col-md-12">
				<a href="<?=base_url() ?>Admin/Regrasyon/Create">
					<button class="btn btn-purple" type="button">Yeni Veri</button>
				</a>
				<a href="<?=base_url() ?>Admin/Regrasyon/Hesapla">
					<button class="btn btn-purple" type="button">Hesapla</button>
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

								<?php

								$bagimsizBagimliCarpimToplam=0;
								$bagimsizKareToplam=0;
								$bagimliToplam=0;
								$bagimsizToplam=0;
								$toplamHata=0;
								$n=0;

								foreach ($data as $result) {
									$bagimsizBagimliCarpimToplam=$bagimsizBagimliCarpimToplam+$result->bagimsizBagimliCarpim;
									$bagimsizKareToplam=$bagimsizKareToplam+$result->bagimsizKare;
									$bagimsizToplam=$bagimsizToplam+$result->bagimsizDegisken;
									$bagimliToplam=$bagimliToplam+$result->bagimliDegisken;
									$n++;
								}
								
								$k=(-$bagimsizToplam*$bagimliToplam)+($n*$bagimsizBagimliCarpimToplam);
								$l=($bagimsizToplam*(-$bagimsizToplam))+($n*$bagimsizKareToplam);
								$a=$k/$l;
								$b=($bagimliToplam-($bagimsizToplam*$a))/$n;
								?>
								<tr>
								<p><b>a Değeri= <?=number_format($a,3) ?></b></p>
								<p><b>b Değeri= <?=number_format($b,3) ?></b></p>
								<p><b>n Değeri= <?=$n ?></b></p>
								<p><b>Model Y= <?=$a?>*X+<?=$b ?></b></p>
								</tr>
							<thead>
								<tr>
									<th>Bağımlı Değişken</th> 
									<th>Bağımsız Değişken</th>
									<th>Norm Bağımlı</th>
									<th>Norm Bağımsız</th>
									<th>Bağımsız Kareleri</th>
									<th>Çarpımları</th>
								    <th>Sonuç</th>
								    <th>Hata Oranı</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php

								foreach ($data as $result) 
								{
									$sonuc=$a*$result->bagimsizDegisken+$b;
									$hata=abs(($result->bagimliDegisken-$sonuc)/$result->bagimliDegisken*100);
									$toplamHata=$toplamHata+$hata;
								
									?>
									<tr>
										<td><?=$result->bagimliDegisken ?></td>
										<td><?=$result->bagimsizDegisken ?></td>
										<td><?=number_format($result->normBagimli,2) ?></td>
										<td><?=number_format($result->normBagimsiz,2) ?></td>
										<td><?=number_format($result->bagimsizKare,2) ?></td>
										<td><?=number_format($result->bagimsizBagimliCarpim,2) ?></td>
										<td><?=number_format($sonuc,2) ?></td>
										<td>% <?=number_format(abs($hata),2) ?></td>												
											<td>
												<a href="<?=base_url() ?>Admin/Regrasyon/Edit/<?=$result->regrasyonId ?>"><button class="btn btn-default btn-sm">Düzenle</button></a>
												<a href="<?=base_url() ?>Admin/Regrasyon/Delete/<?=$result->regrasyonId ?>"><button class="btn btn-default btn-sm"  onclick="return confirm('Silmek istediğinizden emin misiniz?');">Sil</button></a>
											</td>
									</tr>
										
										<?php 

									}
									?>
								</tbody>
								<tr>
											<th><?=$bagimliToplam?></th>
											<th><?=$bagimsizToplam?></th>
											<th></th>
											<th></th>
											<th><?=number_format($bagimsizKareToplam,2)?></th>
											<th><?=$bagimsizBagimliCarpimToplam?></th>
											<th></th>
											<th>% <?=number_format($toplamHata/$n,2)?></th>
								</tr>
								
								
								
								
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- /Responsive table -->
		</div>

	</div>