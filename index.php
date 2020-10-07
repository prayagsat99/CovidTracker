<?php
  include "worldcore.php";
?>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="style.css">

</head>
<body id="particle-js">
 <div id="wrapper">

<div class="container">
  <h1><center>Total Cases World Wide</center></h1>
    <div class="row">
        <div class="col-md-4 col-xl-4">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h3 class="m-b-20" style='font-size:18px;color:blue;'>Confirmed</h3>
                    <h3 class="text-right "><span class="textsma" style='font-size:27px;'>
                      <?php 
                      
                      print_r(number_format($total_confirmed));
                      ?>
                        
                      </span></h3>
                    <p class="m-b-0"><span class="f-right" style='font-size:20px;'></span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-4">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h3 class="m-b-20" style='font-size:18px;color:green;'>Recovered</h3>
                    <h3 class="text-right "><span class="textsma" style='font-size:27px;'><?php print_r(number_format($total_recovered)); ?></span></h3>
                    <p class="m-b-0"><span class="f-right" style='font-size:20px;'></span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-4">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h3 class="m-b-20 " style='font-size:18px;color:red;'>Deceased</h3>
                    <h2 class="text-right "><span class="textmed" style='font-size:30px;'><?php print_r(number_format($total_deaths)); ?></span></h2>
                    <p class="m-b-0"><span class="f-right" style='font-size:20px;'></span></p>
                </div>
            </div>
        </div>
        
        
  </div>
</div>


  <h1><center>Covid Cases Country Wise</center></h1>
  <div class="md-12">
    <form><center>
<input class="form-control align-items-center" id="myInput" type="text" placeholder="Search a Country">
</center>
</form>
</div>
<br>

  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Country</span></th>
        <th><span>Confirmed</span></th>
        <th><span>Recovered</span></th>
        <th><span>Deceased</span></th>
        <div>
        <td><i class="fas fa-question-circle" style="color:white;" title="Click on table heads to sort the data."></i></td>
      </div>
        
      </tr>
    </thead>
    <tbody id="myList">
      <?php
          foreach ($data as $key => $value) {
            $changecases=$value[$days_count]['confirmed']-$value[$days_count_prev]['confirmed'];
         
      ?>
      <tr>
        <td ><?php echo $key; ?></td>
        <td><?php echo number_format($value[$days_count]['confirmed']) ;?>

          <?php
          if($changecases!=0)
          {
            if($changecases>0){
           echo "<i class='fas fa-arrow-up' style='color:red;'></i><small style='color:red;''> $changecases</small>"; 
         }
         else
         {
          echo "<small style='color:green;''> $changecases</small>";
         }
         }
           ?>
        </td>
        <td><?php echo number_format($value[$days_count]['recovered']);?></td>
        <td><?php echo number_format($value[$days_count]['deaths']);?></td>
       
      </tr>
      <?php } ?>
    </tbody>
  </table>
 </div> 
<script src="particles.min.js"> 
    </script> 
    <script src="app.js"></script>
<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
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

</body>