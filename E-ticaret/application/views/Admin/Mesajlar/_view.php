<nav class="header-site">
	<div class="container-fluid">
		<!-- Page title and breadcrumb navigation -->
		<div class="page-title">
			<h4><a href="#" id="toggle-menu"><i class="typcn typcn-th-menu"></i></a> <span>Sayfa Yönetimi</span></h4>
			<nav>
				<a href="#">Anasayfa</a>
				<span class="typcn typcn-chevron-right"></span>
				<a href="#">Mesajlar</a>
			</nav>
		</div>
		<!-- /Page title and breadcrumb navigation -->

	</div>
</nav>
<div class="panel-body">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<header class="panel-heading">Gelen Mesaj</header>
				<div class="panel-body">
					<table class="table table-striped">
							
								
									<tr><th>Adı Soyadı </th> <td><?=$data[0]->Adi ?></td></tr>
									<tr><th>Email</th> <td><?=$data[0]->Email ?></td></tr>
									<tr><th>Konu</th> <td><?=$data[0]->Konu ?> </td></tr>
									<tr><th>Ip</th> <td><?=$data[0]->Ip ?> </td></tr>
									<tr><th>Mesaj</th> <td><?=$data[0]->Mesaj ?> </td></tr>
								
							
						
						</table>
										</div>
			</div>
		</div>
	</div>
</div>
</div>