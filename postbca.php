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
			<h1 align="center">Redirect Post to BCA</h1>
	                <hr style="width: 100px">
                    <form method="POST" action="">
                        Trx ID <input type="text" name="trx_id" value="" class="form-control"><br>
                        Klikpay Code <input type="text" name="klikpaycode" value="" class="form-control"><br>
                        Total Amount <input type="text" name="totalamount" value="" class="form-control"><br>
                        Currency <input type="text" name="currency" value="" class="form-control"><br>
                        Pay Type <input type="text" name="paytype" value="" class="form-control"><br>
                        Description <input type="text" name="description" value="" class="form-control"><br>
                        Misc Fee <input type="text" name="misc_fee" value="" class="form-control"><br><br>

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
