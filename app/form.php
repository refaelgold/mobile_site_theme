<?php



if (isset($_POST)) {


//    set_include_path(get_include_path() . PATH_SEPARATOR . "$_SERVER[DOCUMENT_ROOT]/ZendGdata-1.8.1/library");
//
//    include_once("Google_Spreadsheet.php");
//
//    $u = "avishay@joomi.co.il";
//    $p = "th,nr1003";
//
//
//    $ss = new Google_Spreadsheet($u,$p);
//    $ss->useSpreadsheet("Joomi contact form submission");

//
//    $row = array
//    (
//      "date" => date('d-m-Y')
//    , "name" => $_REQUEST['name']
//    , "phone" => $_REQUEST['phone']
//    , "email" => $_REQUEST['email']
//    , "subject" => $_REQUEST['subject']
//    , "message" => $_REQUEST['message']
//    );

//    $ss->addRow($row);



    $numberOfPhoneNumber=strlen($row['phone']);

    if (trim($row['phone'])=="123456"){
        echo 'Please check if your phone number is correct.';
        die();
    }



    //send email
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // Additional headers
	$headers .= 'To: Raz <raz@joomi.co.il>, Shahar <shahar@joomi.co.il>' . "\r\n";
    $headers .= 'From: '.$_REQUEST['name'].' <'.$_REQUEST['email'].'>' . "\r\n";

    $message = '<div>New message from Joomi Mobile Contact From: <br />'.$_REQUEST['message'] ;
    $message .= '<div>Name: '.$_REQUEST['name'] ;
    $message .= '<div>Email: '.$_REQUEST['email'] ;
    $message .= '<div>Phone: '.$_REQUEST['phone'] ;

    mail("raz@joomi.co.il,shahar@joomi.co.il", 'New message from Joomi Mobile Contact From: '.$_REQUEST['subject'], $message, $headers);
    echo 'Thank you For contacting us.<br />We\'ll make sure to take care of your request as fast as we can.';
}
