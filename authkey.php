<body class="dx-apiref dx-apis">
    
    <?php 
        include "head.php";
    ?>

    <main class="dx-main">
        <div class="dx-flex dx-core">
            <div class="dx-main-nav-slug"></div>
		    <?php
                include "sidemenu";
            ?>
                <article class="dx-content dx-flex-block ">
                    <?php
                        echo "<br>";
                        if(!empty($response))
                        {
                            echo "<div class='alert alert-success'><pre>".$response."</pre></div>";
                        }
                    ?>
				    <header>
				        <h1 class="dx-content-title">Generate Signature & Authkey BCA</h1>
				    </header>
                    <form method="POST" action="">
                        Clearkey <input type="text" name="clearKey" value="" class="form-control"><br>
                        Klikpay Code <input type="text" name="klikpaycode" value="" class="form-control"><br>
                        Trx ID <input type="text" name="trx_id" value="" class="form-control"><br>
                        Transaction Date <input type="datetime" name="transactiondate" value="" class="form-control"><br>
                        Amount <input type="text" name="amount" value="" class="form-control"><br><br>

                        <button type="submit" name="submitForm" value="submit" class="btn btn-primary">Generate</button>
                        <button type="submit" name="submitForm" value="code" class="btn btn-primary">Code</button>
                    </form>
				</article>
			</div>
        </main>
        <script id="PayPalAnalytics" src="<?php echo base_url('assets/js/pa.js');?>"></script>
    </body>
