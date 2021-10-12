<?php
 
	   $formdata = array(
	      'firstName'=> $_POST["fname"],
	      'lastName'=> $_POST["lname"],
	      'age'=>$_POST["age"],
		  'destination'=>$_POST["destination"],
		  'lanuage'=>$_POST["choice"],
	      'email'=> $_POST["email"],
		  'password'=> $_POST["password"],
		  'image'=>$_POST["filename"]

	   );
       $existingdata = file_get_contents('mydata.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   
	   if(file_put_contents("mydata.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("mydata.json");
	 $mydata = json_decode($data);

    
	 //echo "my value: ".$mydata[1]->lastName;
/*	 foreach($mydata as $myobject)
	 {
	 foreach($myobject as $key=>$value)
	{
		echo "your ".$key." is ".$value."<br>";
	} 
	}
	*/
?>
