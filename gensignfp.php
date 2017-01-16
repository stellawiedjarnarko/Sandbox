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
			<h1 align="center">Generate Signature Faspay</h1>
	                <hr style="width: 100px">
                    <form method="POST" action="">
                        Request <br>
                        <select name="request" class="form-control">
                            <option value="ri">Request Inquiry</option>
                            <option value="rt">Request Transaction</option>
                        </select>
                        <br>

                        User ID <input type="text" name="user_id" value="" class="form-control"><br>
                        Password <input type="password" name="password" value="" class="form-control"><br>
                        Order ID <input type="text" name="order_id" value="" class="form-control"><br><br>

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
