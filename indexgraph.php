<?php
  include "totalcore.php";
  include "statecore.php";
  
?>

<head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="style.css">
  </head>
 

<body id="particles-js">
  
 <div id="wrapper">
  
  <h1><center>Total Cases in India</center></h1>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h3 class="m-b-20" style='font-size:18px;color:blue;'>Confirmed</h3>
                    <h3 class="text-right "><span class="textsma" style='font-size:27px;'>
                      <?php 
                      
                      print_r(number_format($datatot['confirmed']));
                      ?>
                        
                      </span></h3>
                    <p class="m-b-0"><span class="f-right" style='font-size:20px;'><?php print_r(number_format($datatot['cChanges'])); ?></span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h3 class="m-b-20" style='font-size:18px;color:green;'>Recovered</h3>
                    <h3 class="text-right "><span class="textsma" style='font-size:27px;'><?php print_r(number_format($datatot['recovered'])); ?></span></h3>
                    <p class="m-b-0"><span class="f-right" style='font-size:20px;'><?php print_r(number_format($datatot['rChanges'])); ?></span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h3 class="m-b-20 " style='font-size:18px;color:red;'>Deceased</h3>
                    <h2 class="text-right "><span class="textmed" style='font-size:30px;'><?php print_r(number_format($datatot['deaths'])); ?></span></h2>
                    <p class="m-b-0"><span class="f-right" style='font-size:20px;'><?php print_r(number_format($datatot['dChanges'])); ?></span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h2 class="m-b-20" style='font-size:18px; color:orange;'>Active</h2>
                    <div class="text-right" style='font-size:30px;'><span><?php print_r(number_format($datatot['active'])); ?></span></div>
                    <p class="m-b-0"><span class="f-right" style='font-size:20px;'><?php print_r(number_format($datatot['aChanges'])); ?></span></p>
                </div>
            </div>
        </div>
  </div>
</div>



<h1><center>Covid Cases State Wise</center></h1>

<div class="md-12">
   
</div>
<br>
  
  <table id="keywords table-responsive" cellspacing="0" cellpadding="0">
    <thead>
      
    </thead>
    <tbody id="myList">
  
      <canvas id="myChart"><p></p></canvas>
    </tbody>
  </table>

 </div> 
 </body>
 <script src="particles.min.js"> 
    </script> 
    <script src="app.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery.tablesorter.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>
  <script type="text/javascript" src="stategraph.js"></script>
 <script>

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myChart p").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

