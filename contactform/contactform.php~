<?php
    $email="emailsupport@narmware.com";
    $sender="BGROUP INTERPRISES";


    require "email/examples/smtp.php";

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////// SEND EMAIL TO US ///////////////////////////////////////////////////////////////////////////////////////

	    $emailid=$_POST['email'];
	    $subjectus='Enquri From Website ';
	    $usname=$_POST['name'];

	    $msgus="Name: ".$_POST['name']."<br>Email: ".$_POST['email']."<br>Mobile: ".$_POST['mob']."<br>Subject: ".$_POST['sub']."<br>Enquiry: ".$_POST['message']."<br><br><br><hr>";
	    //$email='sales@accuintelmarketresearch.com';//$_POST[''];
        $emailus="sysuraj13@gmail.com";
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///END SEND EMAIL TO US ///////////////////////////////////////////////////////////////////////////////////////

	
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /// SEND EMAIL TO CLIENT //////////////////////////////////////////////////////////////////////////////////////
	    $emailidclient=$_POST['email'];
	    $subjectclient='Acknowledgement of your mail';

	    $clientname=$_POST['name'];

        $msgclient= "Dear ".$_POST['name'].",<br><br>

        Thank you for writing to us. <br/>
        This email is to confirm that your message has been received by us. <br>

        We will get back to you shortly with the sample report.<br>
        <br>
        Best regards,<br><br>

        Your Faithfull<br>

        BGROUP ENTERPRISES
        <br>
        <br><br><br><br><hr><hr>";

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///END SEND EMAIL TO CLIENT ///////////////////////////////////////////////////////////////////////////////////

    echo "OK";
    $state=1;
   sendmail($emailus,'Website Response',ucfirst($subjectus),$msgus, $emailidclient,$clientname,ucfirst($subjectclient),$msgclient,$state,$email,$sender);
	
?>
