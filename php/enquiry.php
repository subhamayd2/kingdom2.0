<?php
require 'conn.php';

$func = isset($_POST['function']) ? $_POST['function'] : die("0");

switch($func){
    case 'getSubCategory': getSubCategory(); break;
    case 'getProducts': getProducts(); break;
    case 'submitEnquiry': submitEnquiry(); break;
}


function submitEnquiry(){
    require_once '/PHPMailer/config.php';
    require_once '/PHPMailer/class.phpmailer.php';
    require_once '/PHPMailer/class.smtp.php';
    require_once '/PHPMailer/PHPMailerAutoload.php';

    global $conn;
    $tmp = isset($_POST['list']) ? json_decode($_POST['list']) : die("0");
    $list = $tmp->listarr;
    $name = isset($_POST['name']) ? $_POST['name'] : die("0");
    $email = isset($_POST['email']) ? $_POST['email'] : die("0");
    $phone = isset($_POST['phone']) ? $_POST['phone'] : die("0");
    $country = isset($_POST['country']) ? $_POST['country'] : die("0");
    $enquiry = isset($_POST['enquiry']) ? $_POST['enquiry'] : die("0");
    $datetime = isset($_POST['datetime']) ? $_POST['datetime'] : die("0");

    $mailer = null;

    $sql = "";

    for($i = 0; $i < count($list); $i++){
        $n = $list[$i]->product;
        $c = $list[$i]->mainCategory;
        $sc = $list[$i]->subCategory;
        $p = $list[$i]->packing;
        $q = $list[$i]->quantity;

        $sql .= "insert into tblEnquiry (ProductName, ProductCategory, ProductSubCategory, ProductPacking, ProductQuantity, CustomerName, CustomerEmail, CustomerPhone, CustomerCountry, EnquiryDetails, TimeStamp) values ('$n', '$c', '$sc', '$p', '$q', '$name', '$email', '$phone', '$country', '$enquiry', '$datetime'); ";
    }

    if(mysqli_multi_query($conn, $sql)){
        echo 1;

        $mailer = new PHPMailer();
        $mailer->IsSMTP();  // telling the class to use SMTP
        $mailer->Host     = gethostbyname("smtpout.asia.secureserver.net"); // SMTP server
        $mailer->Port = "80";
        $mailer->Username = "support@aztechcorps.com";
        $mailer->Password = "Aptitudo@95";
        $mailer->From     = "no-reply@aztechcorps.com";
        $mailer->FromName = "AztechCorps Support";
        $mailer->SMTPAuth = true;
        $mailer->Sender = "no-reply@aztechcorps.com";
        $mailer->SMTPSecure = '';

        // Set the subject
    $mailer->Subject = "You have a new enquiry.";

// Body
    $mailer->Body = 
$name.' has some enquiry.
('. $email .')
('. $phone .')
('. $country .')

Enquiry: '.$enquiry.'
';

$mailer->Body .= "\n\n";

for($i = 0; $i < count($list); $i++){
        $n = $list[$i]->product;
        $c = $list[$i]->mainCategory;
        $sc = $list[$i]->subCategory;
        $p = $list[$i]->packing;
        $q = $list[$i]->quantity;

        $mailer->Body .= $c . "/". $sc . "/" . $n . " --- Packing: " .$p . " | Quantity: " . $q . "\n"; 
    }

$mailer->Body .= "\n\n";

$mailer->Body .= 'Thank you for choosing us.

With regards,
Support Team,
AztechCorps

';

// Add an address to send to.
    $mailer->AddAddress("kingdomlubricants@gmail.com", "Kingdom Lubricants");
    $mailer->AddAddress("bloodyshower@gmail.com", "Kingdom Lubricants");
    $mailer->AddAddress("gomez.obaiz@gmail.com", "Kingdom Lubricants");
    $mailer->send();


    } else {
        echo 0;
    }
}



function getSubCategory(){
    global $conn;
    $l = array();
    $c = $_POST['mainCategory'];
    $sql = "select distinct ProductSubCategory from tblProducts where ProductCategory = '$c'";
    $r = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($r)){
        array_push($l, $row['ProductSubCategory']);
    }

    $str = implode(",", $l);

    echo $str;
}

function getProducts(){
    global $conn;
    $l = array();
    $c = $_POST['mainCategory'];
    $sc = $_POST['subCategory'];
    $sql = "select distinct ProductName from tblProducts where ProductCategory = '$c' and ProductSubCategory = '$sc'";
    $r = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($r)){
        array_push($l, $row['ProductName']);
    }

    $str = implode(",", $l);

    echo $str;
}

?>