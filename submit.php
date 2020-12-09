<?php
        $_help = $_POST['help'];
        $_name  = $_POST['firstname'];
        $_lname = $_POST['lastname'];
        $_count = $_POST['country'];
    	$_massage   = $_POST['subject'];

   // Just Change your number with your country code  
        $num = "91.............";

     if(isset($_POST['_submit'])) {

    	

          header("location:https://api.whatsapp.com/send?   phone=$num&text=Issues%3A%20%28$_help%29%0A%0A%0AName%3A%20$_name%20$_lname%20%0A%0ACountry%3A%20$_count%20%0A%0AMassage%3A%20$_massage");

}else {

    	echo "Massage is not sending";
    	# code...
    };
if(isset($_POST['_submit2'])) {


      header("location:http://web.whatsapp.com/send?phone=$num&text=Issues%3A%20%28$_help%29%0A%0A%0AName%3A%20$_name%20$_lname%20%0A%0ACountry%3A%20$_count%20%0A%0AMassage%3A%20$_massage");

}else {

    	echo "Massage is not sending";
    	# code...
    };

?>	 
