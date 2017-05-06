<?php
require '/php/conn.php';
include '/php/functions.php';

$sql = "SELECT distinct CustomerName, CustomerEmail, CustomerPhone, CustomerCountry, EnquiryDetails, TimeStamp FROM tblEnquiry order by TimeStamp desc";

$r = mysqli_query($conn, $sql);

function print_data(){
    global $r;

    if(mysqli_num_rows($r) < 1) {
        echo "<div class='jumbotron text-center'><h1>No data found</h1></div>";
        return;
    }

    $i = 0;

    while($row = mysqli_fetch_assoc($r)){
        echo '<div class="panel panel-default">';
        echo '<div class="panel-heading" role="tab" id="heading' . $i . '">';
        echo '<h4 class="panel-title">';
        echo '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse' . $i . '" aria-expanded="true" aria-controls="collapse' . $i . '">';
          echo "<h4>";
          echo $row['CustomerName']. " | " .$row['CustomerEmail']." | ".$row['CustomerPhone']." | ".$row['TimeStamp'];
          echo "</h4>";
        echo "</a>";
      echo "</h4>";
    echo "</div>";
    echo '<div id="collapse' . $i . '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading' . $i . '">';
      echo '<ul class="list-group">';

      print_list($row);
        
      echo "</ul>";
      echo '<div class="panel-footer"><strong>Enquiry Details: </strong>' . $row['EnquiryDetails'] . '</div>';
    echo "</div></div>";

  $i++;
    }
}

function print_list($row){
    global $conn;

    $sql = "SELECT * FROM tblEnquiry where CustomerName = '".$row['CustomerName']."' and CustomerEmail = '".$row['CustomerEmail']."' and CustomerPhone = '".$row['CustomerPhone']."' and CustomerCountry = '".$row['CustomerCountry']."' and EnquiryDetails = '".$row['EnquiryDetails']."'";

    $r = mysqli_query($conn, $sql);

    if(mysqli_num_rows($r) < 1) {
        echo '<li class="list-group-item">No Products Added to Enquiry!</li>';
        return;
    }

    while($rrow = mysqli_fetch_assoc($r)){
        echo '<li class="list-group-item">';
        echo $rrow['ProductCategory']. "/" . $rrow['ProductSubCategory']."/<strong>". $rrow['ProductName']. "</strong>";
        echo " -- Packing: " . $rrow['ProductPacking'];
        echo " - Quantity: " . $rrow['ProductQuantity'];
        echo '</li>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://bootswatch.com/lumen/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <title>Kingdom Lubricants</title>
</head>
<body>

    <div class="container">
        <div class="jumbotron">
            <img src="images/logo.png" alt="Kingdom Lubricants" width="120">
            <h1><strong>Enquiry Details</strong></h1>
        </div>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <?php
        print_data();
    ?>
  </div>
  </div>



  <script src="js/bootstrap.js"></script>
</body>
</html>