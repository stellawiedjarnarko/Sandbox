<?php 
    include "sidemenu.php";
?>

<!DOCTYPE html>

<html lang="en">
    <head>
    </head>

    <body>
        <div id="wrapper">
            <div id="page-wrapper">
                <div class="container-fluid">
			<h1 align="center">Notification Payment</h1>
	                <hr style="width: 100px">
    			  	<form method="POST" action="">
                        URL <input type="text" name="url" value="" class="form-control"><br>
                        Trx ID <input type="text" name="trx_id" value="" class="form-control"><br>
    				    Merchant ID <input type="text" name="merchant_id" value="" class="form-control"><br>
    				  	Merchant Name <input type="text" name="merchant_name" value="" class="form-control"><br>
                        Bill No <input type="text" name="bill_no" value="" class="form-control"><br>
    				  	Password <input type="password" name="password" value="" class="form-control"><br><br>

    				    <button type="submit" name="submitForm" value="submit" class="btn btn-primary">Submit</button>
    				    <button type="submit" name="submitForm" value="code" class="btn btn-primary">Code</button>
    				</form>

    				<?php
    					echo "<br>";
    					if(!empty($response1) && !empty($response2))
                        {
    						echo "<div class='alert alert-success' style='text-transform:uppercase;'><pre><b>REQUEST:</b><br/>".$response1."</pre></div>";
                            echo "<div class='alert alert-success' style='text-transform:uppercase;'><pre><b>RESPONSE:</b><br/>".$response2."</pre></div>";
    					}
                        else if(!empty($response3))
                        {
                            echo "<div class='alert alert-info' style='text-transform:uppercase;'><pre><b>CODE:</b><br/>".$response3."</pre></div>";
                        }
    				?>

                </div>
            </div>
        </div>

        <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    </body>
</html>
