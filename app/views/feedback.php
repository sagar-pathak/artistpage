<?php
  include(ACTIVE_PAGE_CHECKER);
  include(HEADER); 
  require_once(RECAPTCHA);
?>
<style>
.card {
    border-radius: 4px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), 0 0 0 1px rgba(63, 63, 68, 0.1);
    
    margin-bottom: 30px;
}
.card .content {
    padding: 15px 15px 10px 15px;
}
</style>
<script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'clean'
 };
 </script>
<div class="container gallery" style="margin-top: 30px;">
	<div class="row">
		<div class="col-lg-12">
			<?php $_GET['title']="FEEDBACK";include(HEADING); ?>
		</div>
		<div class="col-lg-12">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 clear-padding-l">
                        <div class="card">
                            <div class="content">
                                <?php if(isset($_SESSION['feedback_success'])){ ?>
                                <div class="alert alert-dismissible alert-success">
                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                  <strong>Thankyou</strong> so much for your feedback!!</a>.
                                </div>
                                <?php unset($_SESSION['feedback_success']);} ?>
                                <?php if(isset($_SESSION['feedback_error'])){ ?>
                                <div class="alert alert-dismissible alert-danger">
                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                  <strong>Oh snap!</strong> <?php echo $_SESSION['feedback_error'];?>
                                </div>
                                <?php unset($_SESSION['feedback_error']);} ?>
                            	<form method="post" action="<?php echo ROOT_PATH.'api/feedback/verify'; ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="firstname" placeholder="John">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name="lastname" placeholder="Doe">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email Address" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea rows="5" class="form-control" name="message" placeholder="Here can be your feedback"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                   <?php
							          $publickey = "6Lc5qgcUAAAAANmn9oBw6AQJLkpHmz9kqM8u8bl7"; // you got this from the signup page
							          echo recaptcha_get_html($publickey);
							        ?>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</div>
	</div>
</div>
<?php
  include(FOOTER); 
?>