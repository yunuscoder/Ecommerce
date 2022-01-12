<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				
			</div>
			<div class="table-responsive cart_info">
			<?php if($this->session->flashdata("result"))
					{?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">Kapat</button>
						<strong><?=$this->session->flashdata("result") ?></strong>
					</div>
					<?php 
				}
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image"> Ürün Adı</td>
							<td class="description"></td>
							<td class="price">Fiyat</td>
							<td class="quantity">Birim</td>
							<td class="total">Toplam</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php
					$toplam=0;
					foreach ($data as $result) {
					$toplam=$toplam+($result->Fiyat*$result->Birimi);
					
					?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$result->UrunAdi?></a></h4>
								<p>Ürün Kodu: <?=$result->UrunKodu?></p>
							</td>
							<td class="cart_price">
								<p><?=$result->Fiyat?> TL</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input class="cart_quantity_input" type="text" name="quantity" value="<?=$result->Birimi?>" autocomplete="off" size="2">
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?=$result->Fiyat*$result->Birimi?> TL</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?=base_url() ?>/Sepet/sepettenurunsil/<?=$result->SepetId ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php 
					}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Ödeme İşlemleri</h3>
				
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						
						<ul class="user_info">
							
							<li class="single_field zip-field">
								<form action="<?=base_url()?>/Sepet/siparisitamamla" method="POST">
								<label>İsim Soyisim</label>
								<input type="text" name="adsoy" required>
								<label>Kart No</label>
								<input type="text" name="kartno" required>
								<label>İl</label>
								<input type="text" name="il" required>
								<label>İlçe</label>
								<input type="text" name="ilce" required>
								<label>Adres</label>
								<input type="text" name="adres" required><br><br>
								<input type="submit" value="TAMAMLA">
								</form>
							</li>
						</ul>
					
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>ALIŞVERİŞ TOPLAMI <span><?=$toplam ?> TL</span></li>
						
						</ul>
							<a href="<?=base_url() ?>Urunler" class="btn btn-default update" href="">Alışverişe Devam Et</a>
						
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	