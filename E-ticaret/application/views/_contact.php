 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">İLETİŞİM <strong></strong></h2>    			    				    
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">BİZE ULAŞIN</h2>
	    				<div class="panel-body">
	    						<?php if($this->session->flashdata("result"))
					{?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">Kapat</button>
						<strong><?=$this->session->flashdata("result") ?></strong>
					</div>
					<?php 
				}
				?>
	    				</div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" action="<?=base_url() ?>index.php/Admin/Mesajlar/CreateSave" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="Adi" class="form-control" required="required" placeholder="Adınız">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="Email" class="form-control" required="required" placeholder="Email Adresiniz">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="Konu" class="form-control" required="required" placeholder="Konu">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="Mesaj" id="message" required="required" class="form-control" rows="8" placeholder="Mesajınız"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gönder">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<?php 
	    		foreach ($data as $result) {
	    			
	    		?>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">İLETİŞİM BİLGİLERİMİZ</h2>
	    				<address>
	    					<p><?=$result->Adi?></p>
							<p><?=$result->Adres?></p>
							<p><?=$result->Sehir?></p>
							<p><?=$result->Tel?></p>
							<p><?=$result->Email?></p>
						
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Sosyal Medya Hesaplarımız</h2>
							<ul>
								<li>
									<a href="https://www.facebook.com/<?=$result->Facebook?>"><i class="fa fa-facebook"></i></a>
								</li>
								
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>
    			<?php
				}	
    			 ?>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->