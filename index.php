   <?php
               $urls = array("result1.php", "result2.php", "result3.php","result4.php", "result5.php", "result6.php" );
               $url = $urls[array_rand($urls)];
               ?>


            <button onclick="myfunction();" class="buttonmi"><span>Get your Results</span></button>
            <script>
               function myfunction(){
                   var href = "<?php echo $url?>";
                   window.location.href = "https://www.yourwebsite/"+href;
               }
            </script>
