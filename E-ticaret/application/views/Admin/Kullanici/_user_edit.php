<nav class="header-site">
	<div class="container-fluid">
		<!-- Page title and breadcrumb navigation -->
		<div class="page-title">
			<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
			<nav>
				<a href="#">Anasayfa</a>
				<span class="typcn typcn-chevron-right"></span>
				<a href="#">Kullanıcı Ekle</a>
			</nav>
		</div>
		<!-- /Page title and breadcrumb navigation -->

	</div>
</nav>
<div class="panel-body">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<header class="panel-heading">Kullanıcı Düzenleme</header>
				<div class="panel-body">
					<form role="form" action="<?=base_url() ?>index.php/Admin/Users/EditSave/<?=$data[0]->UserId ?>" method="post">
						<div class="form-group">
							<label >Adı</label>
							<input type="text" name="Name" value="<?=$data[0]->Name ?>" class="form-control" id="exampleInputEmail1" placeholder="Adı">
						</div>
						<div class="form-group">
							<label >Soyadı</label>
							<input type="text" name="Surname" value="<?=$data[0]->Surname ?>" class="form-control" id="exampleInputEmail1" placeholder="Soyadı">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email Adres</label>
							<input type="email" name="Email" value="<?=$data[0]->Email ?>" class="form-control" id="exampleInputEmail1" placeholder="Email Adres">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Şifre</label>
							<input type="password" name="Password" value="<?=$data[0]->Password ?>" class="form-control" id="exampleInputPassword1" placeholder="Şifre">
						</div>
						<div class="controls">
							<label for="control-label" for="selectError">Yetki</label><br>
							<select id="selectError" name="Role" value="<?=$data[0]->Role ?>" data-rel="chosen">
								<option>Admin</option>
								<option>Sipariş</option>
								<option>Muhasebe</option>
							</select>
						</div>
						<div class="controls">
							<label for="control-label" for="selectError">Durum</label><br>
							<select name="State" data-rel="chosen">
								<?php
									if($data[0]->State == False)
									{
								?>
									<option value="0">Pasif</option>
									<option value="1">Aktif</option>
									
									<?php
								}
									else{
										?>
									<option value="1">Aktif</option>
									<option value="0">Pasif</option>
									<?php
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label >Açıklama</label>
							<input type="text" name="Description" value="<?=$data[0]->Description ?>" class="form-control" id="exampleInputEmail1" placeholder="Açıklama">
						</div>
					</div>
					<button type="submit" class="btn btn-default">Güncelle</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>