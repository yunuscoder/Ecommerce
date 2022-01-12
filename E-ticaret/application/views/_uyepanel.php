<div class="panel-body">
			<?php
			foreach ($data as $result) {

			?>
			<div class="register-req">
				<p>Profil Sayfanıza, Hoşgeldiniz Sn.<?=$result->Adi ?> ayarlarınızı güncelleyebilirsiniz.</p>

			</div><!--/register-req-->
			<?php if($this->session->flashdata("result"))
					{?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">Kapat</button>
						<strong><?=$this->session->flashdata("result") ?></strong>
					</div>
					<?php 
				}
				?>
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-6">
						<div class="shopper-info">
							<p>Müşteri Bilgileri</p>
							<form>
								<input type="text" value="<?=$result->Adi ?> <?=$result->Soyadi ?>" disabled>
								<input type="text" value="<?=$result->Email ?>" disabled>
								<input type="password" name="Sifre" value="<?=$result->Sifre ?>" disabled>
								
							</form>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="shopper-info">
							<p>İletişim Bilgileri</p>
						
								<form action="<?=base_url() ?>Home/uyeguncelle/<?=$result->MusteriId ?>" method="POST">
								<input type="text" name="Il" value="<?=$result->Il ?>" >
								<input type="text" name="Ilce" value="<?=$result->Ilce ?>" >
								<input type="text" name="Adres" value="<?=$result->Adres ?>" >
								<input type="text" name="CepTel" value="<?=$result->CepTel ?>" >
								<button>GÜNCELLE</button>
								</form>
							
							
							</div>
						</div>
					</div>
									
				</div>
			</div>
			<div class="features_items"><br>
			<br>
				<h2 class="title text-center">SİPARİŞ DURUMLARIM</h2>
			</div>
			<div class="panel-body">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Ürün Adı</td>
							
							<td class="price">Fiyat</td>
							<td class="quantity">Miktar</td>
							<td class="total">Toplam</td>
							<td class="total">Onay</td>
							<td></td>
						</tr>
					</thead>
					<?php 
					foreach ($siparislerim as $result) {
					
					?>
					<tbody>
					
						<tr>
							<td class="cart_description">
								<h4><a href=""><?=$result->UrunAdi ?></a></h4>
								<p>Ürün Kodu: <?=$result->UrunKod ?></p>
							</td>
							<td class="cart_price">
								<p><?=$result->fiyat ?> TL</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									
									<input class="cart_quantity_input" type="text" name="quantity" value="<?=$result->birimi ?>" autocomplete="off" size="2" disabled="">
								
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?=number_format($result->fiyat*$result->birimi,2) ?> TL</p>
							</td>
							<td class="cart_delete">
								<?php if($result->Onay){
									?>
								<p class="cart_total_price">Onaylandı</p>
								<?php }else{ ?>
								<p class="cart_total_price">Beklemede</p>
								<?php } ?>
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
		<?php
		}
		?>
	</div>
