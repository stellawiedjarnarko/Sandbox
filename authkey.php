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
			<h1 align="center">Generate Signature & Authkey BCA</h1>
	                <hr style="width: 100px">
                    <form method="POST" action="">
                        Clearkey <input type="text" name="clearKey" value="" class="form-control"><br>
                        Klikpay Code <input type="text" name="klikpaycode" value="" class="form-control"><br>
                        Trx ID <input type="text" name="trx_id" value="" class="form-control"><br>
                        Transaction Date <input type="datetime" name="transactiondate" value="" class="form-control"><br>
                        Amount <input type="text" name="amount" value="" class="form-control"><br>
                        
                        <button type="submit" name="submitForm" value="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" name="submitForm" value="code" class="btn btn-primary">Code</button>
                    </form>

                    <?php
                        echo "<br>";
                        if(!empty($response))
                        {
                            echo "<div class='alert alert-success' style='text-transform:uppercase;'><pre>".$response."</pre></div>";
                        }
                        else if(!empty($response2))
                        {
                            echo "<div class='alert alert-info' style='text-transform:uppercase;'><pre><b>CODE:</b><br/>".$response2."</pre></div>";
                        }
                    ?>

                </div>
            </div>
        </div>

        <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    </body>
</html>
