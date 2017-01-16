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
			<h1 align="center">Post XML</h1>
	                <hr style="width: 100px">
    			  	<form method="POST" action="">
    				    Merchant ID <input type="text" name="merchant_id" value="" class="form-control"><br>
    				  	Merchant Name <input type="text" name="merchant_name" value="" class="form-control"><br>
    				  	Password <input type="password" name="password" value="" class="form-control"><br>
    				  	Request <input type="text" name="request" value="" class="form-control"><br>
    				  	Bill Desc <input type="text" name="bill_desc" value="" class="form-control"><br>

                        Product
                        <table class="table table-bordered">
                            <tr align="center">
                                <td><b>Name</b></td>
                                <td><b>Calories</b></td>
                                <td><b>Description</b></td>
                                <td><b>Price</b></td>
                                <td><b>Buy</b></td>
                            </tr>
                            <tr align="center">
                                <td value="bwn" id="bwn" name="bwn">Belgian Waffles</td>
                                <td>650</td>
                                <td>Two of our famous Belgian Waffles with plenty of real maple syrup</td>
                                <td value="bwp" id="bwp" name="bwp">8000</td>
                                <td><input type="checkbox" name="bw" value="bw"></td>
                            </tr>
                            <tr align="center">
                                <td value="sbwn" id="sbwn" name="sbwn">Strawberry Belgian Waffles</td>
                                <td>900</td>
                                <td>Light Belgian waffles covered with strawberries and whipped cream</td>
                                <td value="sbwp" id="sbwp" name="sbwp">27000</td>
                                <td><input type="checkbox" name="sbw" value="sbw"></td>
                            </tr>
                            <tr align="center">
                                <td value="bbbwn" id="bbbwn" name="bbbwn">Berry-Berry Belgian Waffles</td>
                                <td>900</td>
                                <td>Light Belgian waffles covered with an assortment of fresh berries and whipped cream</td>
                                <td value="bbbwp" id="bbbwp" name="bbbwp">28000</td>
                                <td><input type="checkbox" name="bbbw" value="bbbw"></td>
                            </tr>
                            <tr align="center">
                                <td value="ftn" id="ftn" name="ftn">French Toast</td>
                                <td>600</td>
                                <td>Thick slices made from our homemade sourdough bread</td>
                                <td value="ftp" id="ftp" name="ftp">24000</td>
                                <td><input type="checkbox" name="ft" value="ft"></td>
                            </tr>
                            <tr align="center">
                                <td value="hbn" id="hbn" name="hbn">Homestyle Breakfast</td>
                                <td>950</td>
                                <td>Two eggs, bacon or sausage, toast, and our ever-popular hash browns</td>
                                <td value="hbp" id="hbp" name="hbp">7500</td>
                                <td><input type="checkbox" name="hb" value="hb"></td>
                            </tr>
                        </table>

                        Misc Fee <input type="text" name="misc_fee" value="" class="form-control"><br>
                        
                        Channel <br>
                        <select name="channel" class="form-control">
                            <option value="302">tCash</option>
                            <option value="303">XLTunai</option>
                            <option value="304">Mynt</option>
                            <option value="305">eMoney</option>
                            <option value="307">Dompetku</option>
                            <option value="308">Bbmmoney</option>
                            <option value="400">bri_mocash</option>
                            <option value="401">bri_epay</option>
                            <option value="402">Permata</option>
                            <option value="405">Klikpaybca</option>
                            <option value="406">clickpay Mandiri</option>
                            <option value="407">bii_sms</option>
                            <option value="408">bii_va</option>
                            <option value="409">Tft</option>
                            <option value="500">Credit Card</option>
                            <option value="700">cimb_clicks</option>
                            <option value="701">Danamon Debit Online</option>
                            <option value="800">bri_va</option>
                        </select>
                        <br>

                        Pay Type <br>
                        <select name="paytype" class="form-control">
                            <option value="01">Full</option>
                            <option value="02">Installment</option>
                            <option value="03">Full and Installment</option>
                        </select>
                        <br>

                        Email <input type="email" name="emails" value="" class="form-control"><br>

                        Terminal <br>
                        <select name="terminal" class="form-control">
                            <option value="10">Web</option>
                            <option value="20">MobApp Blackberry</option>
                            <option value="21">MobApp Android</option>
                            <option value="22">MobAppiOS</option>
                            <option value="23">MobApp Windows</option>
                            <option value="24">MobApp Symbian</option>
                            <option value="30">TabApp BlackBerry</option>
                            <option value="31">TabApp Android</option>
                            <option value="32">TabAppiOS</option>
                            <option value="33">TabApp Windows</option>
                        </select>
                        <br>

                        Tenor <br>
                        <select name="tenor" class="form-control">
                            <option value="03">3 months</option>
                            <option value="06">6 months</option>
                            <option value="12">12 months</option>
                        </select>
                        <br><br>

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
