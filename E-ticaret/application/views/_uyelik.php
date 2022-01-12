<div class="panel" ><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
				<?php if($this->session->flashdata("result"))
					{?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">Kapat</button>
						<strong><?=$this->session->flashdata("result") ?></strong>
					</div>
					<?php 
				}
				?>
					<div class="login-form"><!--login form-->
						<h2>Müşteri Girişi</h2>
						<form id="main-contact-form"  action="<?=base_url() ?>index.php/Home/uyegiris" method="post">
							<input type="email" name="Email" placeholder="Email Adresiniz" required="true" />
							<input type="password" name="Sifre" placeholder="Şifreniz" required="true" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Beni Hatırla
							</span>
							<button type="submit" name="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">veya</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Kayıt Ol</h2>
						<form id="main-contact-form" class="contact-form row" name="contact-form" action="<?=base_url() ?>index.php/UyeOl/CreateSave" method="post">
							<input type="text" name="Adi" placeholder="Adınız" required="true" />
							<input type="text" name="Soyadi" placeholder="Soyadınız" required="true"/>
							<input type="email" name="Email" placeholder="Email Adresiniz" required="true"/>
							<input type="password" name="Sifre" placeholder="Şifreniz" required="true"/>
							<input type="phone" name="CepTel" placeholder="Cep Telefonunuz" required="true"/>
							<input type="text" name="Il" placeholder="İliniz" required="true"/>
							<input type="text" name="Ilce" placeholder="İlçeniz" required="true"/>
							<input type="text" name="Adres" placeholder="Adresiniz" required="true"/>
							<button type="submit" class="btn btn-default">Kayıt Ol</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</div><!--/form-->
	
	