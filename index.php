<!DOCTYPE html>
<html>
   <head>
      <title>That random quiz</title>
      <meta name="description" content="That random quiz" />
      <meta name="keywords" content="random quiz, quiz">
      <link rel="icon" href="favicon.ico" type="image/x-icon" />
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="quiz.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta property="og:image" content="quizog.jpg" />
      <meta charset="UTF-8">
   </head>
   <body>
      <div id=header2>
         <div class=mylittlelogo>
            <a href=index.html>
            <img src=logo.png width=37px>
            </a>
         </div>
         <div class=menulogo><strong>
            JustinLong.com.br </strong>
            <br>A random quiz
         </div>
         <div class="dropdown" style="float:right;">
            <button class="dropbtn">
            <img src=menuicon.png width=30px>
            </button>
            <div class="dropdown-content">
               <a href=../index.html>home</a>
               <a href=../about.html>about </a>
               <a href=../index.html#quiz1>Quiz1</a>
               <a href=.../index.html#quiz2>Quiz2</a>
            </div>
         </div>
      </div>
      <div class="quizimg">
         <a href=index.html>
            <center>
               <img src=quiz.png width=50%>
            </center>
         </a>
      </div>
      <div class="mainimgp">
         <a href=index.html>
         <img src=quiz.png width=100%>
         </a>
      </div>
      <div id=middle>
         <div class=title>
            Take the quiz: 
         </div>
      </div>
      <div id=new>
         <div id=content>
           // Quiz question starts
            <h1><a name=pod>&nbsp;</a>Q1) Is this question number 1?</h1>
            <input type="checkbox" id="Q1a" name="Q1a" value="Q1a">
            <label for="dog1">It sure is!</label><br>
            <input type="checkbox" id="Q1b" name="Q1a" value="Q1a">
            <label for="dog2">Apparently, it is!</label><br>
            <input type="checkbox" id="Q1c" name="Q1a" value="Q1a">
            <label for="dog3">I am thinking... yes!</label><br>
            <input type="checkbox" id="Q1d" name="Q1a" value="Q1a">
            <label for="dog4">Yeppers.d</label><br>
            <input type="checkbox" id="Q1e" name="Q1a" value="Q1a">
            <label for="dog5">Sim</label><br>
            <hr class="new2">
           // Quiz question ends
         
           
           // This is where the possible result pages will be listed
           
            <?php
               $urls = array("result1.html", "result2.html", "result3.html","result4.html", "result5.html");
               $url = $urls[array_rand($urls)];
               ?>
            <button onclick="myfunction();" class="buttonmi"><span>Get your Results</span></button>
            <script>
               function myfunction(){
                   var href = "<?php echo $url?>";
                   window.location.href = "http://"+href;
               }
            </script>
           
           
   
         </div>
         <div id=footer> Random Quiz 
         </div>
      </div>
   </body>
</html>
