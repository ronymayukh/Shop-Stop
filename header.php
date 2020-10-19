<!--main-->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>	
	<script> var PageName;//,p1;</script>
<style type="text/css">
<!--
.style1 
{
	color:#999999;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
.style2 {font-size: 9px}
-->
</style>
<div style="height:118px; width:1150px; margin:auto; border:0px solid #990000;">
<!--logo-->
<div style="width:160px; height:120px; float:left; margin-left:0; border:0px solid #FFF;"><a href="index.php"><img src="images/logo3.png"  height="100" width="150"/></a></div>
<!--logo close-->
<!--right-->
<div style="height:115px; width:990px; margin-top:0px; border:0px solid #FF0000; float:left;">
<!--menu-->
<div style="width:900px; height:30px; float:left; border:0px solid #CCCC00; font-size:12px;" align="right">


<!-- Upper Menu -->
 
<a href="myaccount.php" style="text-decoration:none;color:#FFFFFF;">
	<input type="button" value="My Account" style="border-radius:5px; background-color:#269FB2;; border:0px solid #0033FF;font:'Courier New', Courier, monospace'; height:22px; color:#FFFFFF;"></a>&nbsp;   &nbsp;




<!--
<form id="x" method="get" action="results1.php">
	<button onclick="startDictation()" type="submit" name="search">Click</button></form>
-->
<!--End of Upper Menu-->

<?php


if(isset($_SESSION['email'])&&isset($_SESSION['pwd']))
{
	?>
 
 <a href="cartdetails.php" style="text-decoration:none;color:#FFFFFF;">
	<input type="button" value="MY CART" style="border-radius:5px; background-color:#269FB2;; border:0px solid #0033FF;font:'Courier New', Courier, monospace'; height:22px; color:#FFFFFF;"></a>&nbsp;   &nbsp;
 
 
 <a href="logout.php" style="text-decoration:none"><input type="button" name="signin" value="SIGN OUT" style="border-radius:5px;  color:#FFFFFF; border:0px solid #FFFFFF; background-color:#269FB2; font:'Courier New', Courier, monospace;height:25px; box-shadow: 0px 0px 10px #CCCCCC;"></a>

 
 
 

 <?php
}
else
{
	?>
  
   <a href="login.php" style="text-decoration:none;color:#FFFFFF;"><input type="button" value="SIGN IN" style="border-radius:5px; background-color:#269FB2;; border:0px solid #0033FF;font:'Courier New', Courier, monospace'; height:22px; color:#FFFFFF;"></a>&nbsp;   &nbsp;

   
   <a href="signup.php" style="text-decoration:none;color:#FFFFFF;">
	<input type="button" value="SIGN UP" style="border-radius:5px; background-color:#269FB2;; border:0px solid #0033FF;font:'Courier New', Courier, monospace'; height:22px; color:#FFFFFF;"></a>&nbsp;   &nbsp;
   
   
   
   
   <?php
    }
?>

<form id="signup" method="get" action="signup.php"></form>
<form id="mycart" method="get" action="cartdetails.php"></form>
<form id="myaccount" method="get" action="myaccount.php"></form>
<form id="signout" method="get" action="logout.php"></form>
<form id="signin" method="get" action="login.php"></form>

<form id ="x" method="get" action="results1.php">
<div class="input-group">
<input type="hidden" name="search_param" value="all" id="search_param">


                <input type="text" class="form-control" id="transcript" name="sq" placeholder="Search for products,brands and more">
				
                <div class="input-group-btn">


                  <img onclick="startDictation()" name="search" src="cHidSVu.gif" type="submit" id="btnGiveCommand" />

                <button  class="btn btn-primary " type="submit" name="ab"><i class="glyphicon glyphicon-search"  style="width:30px; height:18px;"></i></button>
					
	//speech recognition
  <script>
  var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
    var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList;

    var grammar = '#JSGF V1.0;'

    var recognition = new SpeechRecognition();
    var speechRecognitionList = new SpeechGrammarList();
    speechRecognitionList.addFromString(grammar, 1);
    recognition.grammars = speechRecognitionList;
    recognition.lang = 'en-US';
    recognition.interimResults = false;

    recognition.onresult = function(event) {
        var last = event.results.length - 1;
        var command = event.results[last][0].transcript;
        document.getElementById("transcript").value = command;

    };

    recognition.onspeechend = function() {
        recognition.stop();
        
    };

    recognition.onerror = function(event) {
      document.getElementById("transcript").value = 'Error occurred in recognition: ' + event.error;
    }        

    document.querySelector('#btnGiveCommand').addEventListener('click', function(){
        recognition.start();

    });

    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 81 && event.ctrlKey) {
          document.getElementById("x").submit()
        }
            
    }); 

</script>

 <?php


$a="<script>document.writeln(p1);</script>";
 echo $a;
 ?>

				</div>
				</div>
</form>

 
</div>
<!--menu close-->
<div align="center" class="style1" style="height:90px; width:100px; border:0px solid #FF0000; float:left;"></div>


<span class="style2"></span>
<div style="border:0px solid #FF0000; width:400px; margin-top:30px; height:50px; float:left;" align="right">

<?php
include 'dbconnection.php';?>
<?php
if(isset($_SESSION['email'] )&& isset($_SESSION['pwd']))
{

$email=$_SESSION['email'];
    $query="select * from user_details where email='$email'";
			 $result=mysqli_query($bd,$query);
			while($row=mysqli_fetch_array($result))

	      {
		  ?>
		  <p style=" color:#FFFFFF; font-family:'Courier New'; margin-top:25px; font-size:22px;" align="right"><b>Welcome: <font style=" font-size:20px; font-family: 'Courier New', Courier, monospace" > &nbsp; 
<?php 
		  echo $row['name'];

		  ?>
		  <p id="d"></p>
		  <p id="dd"></p>
		  <script>

var z = "hello";//x + y;
</script>
	

		  </font></b></p>

<script type="text/javascript">
    /*
var msg = new SpeechSynthesisUtterance('Hello speak');
window.speechSynthesis.speak(msg);
*/

/*
var msg = new SpeechSynthesisUtterance('I see dead people!');
msg.voice = speechSynthesis.getVoices().filter(function(voice) { return voice.name == 'Whisper'; })[39];
speechSynthesis.speak(msg);
*/
</script>

          <?php
}
}
?>

</div>
<script type = "text/javascript" src="shortcuts.js"></script>


</div><!--right close-->

</div><!--main close-->