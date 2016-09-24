<?php
  include(ACTIVE_PAGE_CHECKER);
  include(HEADER); 
?>
<div class="container gallery" style="margin-top: 30px;">
	<div class="row">
		<div class="col-lg-12">
			<?php $_GET['title']="FEEDBACK";include(HEADING); ?>
		</div>
		<div class="col-lg-12">
		            <div class="well text-center">
		               <p><small></small></p>
		               <form action="" method="post">
		                  <div class="form-group">
		                     <input class="form-control" id="id_nome" maxlength="100" name="name" placeholder="Name" type="text" />
		                        
		                  </div>
		                  
		                  <div class="form-group">
		                     <input class="form-control" id="id_email" name="email" placeholder="Your email" type="email" />
		                     
		                  </div>
		                  
		                  <div class="form-group">
		                     <textarea class="form-control" cols="40" id="id_mensagem" name="message" placeholder="Message" rows="10"></textarea>
		                  </div>
		                  
		                  <a href="#" class="btn btn-info">Submit</a>
		               </form>
		            
		            </div>
		</div>
	</div>
</div>
<?php
  include(FOOTER); 
?>