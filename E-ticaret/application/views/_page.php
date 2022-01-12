 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">   
	    	<?php
	    	foreach ($sayfa as $result) {
	    	 ?> 		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center"> <strong><?=$result->Adi?></strong></h2>    		
					<p><?=$result->Icerik?></p>
				</div>		
			<?php
			}
			 ?>	 		
			</div>    	
    		
    	</div>	
    </div><!--/#contact-page-->