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
    <form>
      <center>
<input class="form-control align-items-center" id="myInput" type="text" placeholder="Search a State">
</center></form>
</div>
<br>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>State/UT</span></th>
        <th><span>Confirmed &#x2666;</span></th>
        <th><span>Recovered &#x2666;</span></th>
        <th><span>Deceased &#x2666;</span></th>
        
      </tr>
    </thead>
    <tbody id="myList">
  
      <?php
          foreach ($data as $key => $value) {
         
      ?>
      <tr>
        <td><strong><?php echo $value['state'] ;?></strong></td>
        <td><?php echo number_format($value['confirmed']) ;?></td>
        <td><?php echo number_format($value['recovered']) ;?></td>
        <td><?php echo number_format($value['deaths']) ;?></td>
      </tr>
      <?php } ?>
    
    </tbody>
  </table>

 </div> 
 </body>
 <script src="particles.min.js"> 
    </script> 
    <script src="app.js"></script>
<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery.tablesorter.js"></script>
  
 <script type="text/javascript" src="script.js"></script>
 <script>

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

