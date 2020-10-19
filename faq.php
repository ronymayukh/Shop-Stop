<?php session_start();?>


<!DOCTYPE html>

<html>

<head>

<title>Online Shopping Site for Mobiles, Fashion,Electronics, Home Appliances and More </title>

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />

 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>

 <link href="generic.css" rel="stylesheet" type="text/css" />

 <script type="text/javascript" src="clients.js"></script>



</head>



<body>
<script type="text/javascript">
        function introPage() {
        var msg = new SpeechSynthesisUtterance();
        var voices = window.speechSynthesis.getVoices();
        msg.voice = voices[39]; // Note: some voices don't support altering params
        msg.voiceURI = 'native';
        msg.volume = 20; // 0 to 1
        msg.rate = 1; // 0.1 to 10
        msg.pitch = 1; //0 to 2
        msg.text = 'this are the frequently asked questions!';
        msg.lang = 'hi';
        
        msg.onend = function(e) {
          console.log('Finished in ' + event.elapsedTime + ' seconds.');
        };
        speechSynthesis.speak(msg);
    }
    introPage();
       
</script>


<div style="width:100%; height:auto;">



   <!--header --><div style="height:120px; width:100%; background-color:#8B8A90;border:0px solid #000000;">

  <?php include ('header.php'); ?>


   </div>



  <!--menu--> <div style="height:45px; width:100%; background-color:#269FB2; border:0px solid #269FB2;">

    <?php include ('menu.php'); ?>

   </div><!--menu close-->

  

  <!--cc--><div style="height:auto; width:100%;border:0px solid #269FB2;">

  

  <!--sliderall--> <div style="height:328px; margin:auto; width:1050px; border:0px solid #990000;  ">

       <?php include ('slider.php');?>

       

                  </div><!--sliderall close-->

 

  

  

  

  

<!--slider down data-->

            <table style="height:auto; width:1050px; margin:auto; margin-bottom:10px;border:0px solid #000000; background-color:#FFFFFF; ">

           <tr><td>

  

	



            <!--%%%%%%%%%%%%%%%%%%%%%%%%%% % MOBILES  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->        

                        <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->        

        <br><br>
        <ul>
          <li>
            <p><strong>What to do if I get the wrong product?</strong></p>
            <p><em>We also support return of products or replace delivered products. We strongly recommend to ask the delivery boy to stay and tak a photo of the parcel in his presence</em></p>
          </li><hr>

          <li>
          <p><strong>How can I get a refund?</strong></p>
            <p><em>It may vary depending on the dealer, you should contact us directly if there is a delay from the dealer's side</em></p>
          </li><hr>

          <li>
          <p><strong>When will I get the refund?</strong></p>
            <p><em>You can expect a refund in 2 to 3 working days</em></p>
          </li><hr>

          <li>
          <p><strong>How to contact the seller?</strong></p>
            <p><em>Scan the bar-code in the product to get the details of the seller or mail to ShopStop we will convey the message</em></p>
          </li><hr>

          <li>
          <p><strong>Can my order be relaced?</strong></p>
            <p><em>If the item you ordered arrived in a physically damaged or defective condition or is different from their description on the product detail page , or has missing parts or accessories, it will be eligible for a free replacement, provided the exact item is available with the same seller</em></p>
          </li><hr>

          <li>
          <p><strong>How to cancel an item in cart?</strong></p>
            <p><em>Go to the order cart and there you can find drop the item option</em></p>
          </li><hr>

          <li>
          <p><strong>How to claim waranty?</strong></p>
            <p><em>Just mail to us with the product details</em></p>
          </li><hr>

          
        </ul>







        <!--slider down close-->

        <div style="height:30px; width:1050px; margin:auto; border:0px solid #000000;">

         <?php include('marquee.php'); ?>

        

        </div>

         

       <!--footer--><div style="width:100%; background-color:#414040; height:150px; border:1px solid #000000; ">

         <?php include('footer.php'); ?>






</body>

</html>

