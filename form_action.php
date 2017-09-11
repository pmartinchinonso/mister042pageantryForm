<?php
	if(isset($_POST["submit"])){
		$first_name = $_POST["first_name"];
		$middle_name = $_POST["middle_name"];
		$last_name = $_POST["last_name"];
		$teller_number = $_POST["teller_number"];
		$dob = $_POST["day2"]." / ".$_POST["month2"]." / ".$_POST["year2"];
		$branch = $_POST["branch"];
		$marital = $_POST["marital"];
		$phone_number = $_POST["phone_number"];
		$home_phone_number = $_POST["home_phone_number"];
		$do_payment = $_POST["day"]." / ".$_POST["month"]." / ".$_POST["year"];		
		$email = $_POST["email"];
		$address = $_POST["address"];
		$state = $_POST["state"];
		$kin = $_POST["kin"];
		$rel_kin = $_POST["rel_kin"];
		$occupation = $_POST["occupation"];
		$address_of_kin = $_POST["addressOfKin"];
		$phone_of_kin = $_POST["phoneOfKin"];
		$about_yourself = $_POST["about_yourself"];
		
		$picName = $_FILES["picture"]["name"];
		$targetPath = "img/".$picName;
		move_uploaded_file($_FILES["picture"]["tmp_name"], $targetPath);
	}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8" />
<title><?php echo "Welcome ".$first_name; ?></title>
<link href="css/myStyle.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="section" id="header">
        <h1><span>MISTER 042 PAGEANT</span>
        </h1>
    </div>
    <div class="section">
    	<img class="passport_img" src="<?php echo $targetPath; ?>" width="100" height="120"/>
     	
        <table width="80%" class="personal_table" align="center">
        	
          <tr>
            <th scope="col" colspan="2" height="30px">Personal Information</th>
          </tr>
          <tr>
            <td width="26%">Full name:</td>
            <td width="74%"><?php echo $first_name." ".$middle_name." ".$last_name; ?></td>
          </tr>
          <tr>
            <td>Teller number:</td>
            <td><?php echo $teller_number; ?></td>
          </tr>
          <tr>
            <td>Phone number:</td>
            <td><?php echo $phone_number; ?></td>
          </tr>
          <tr>
            <td>Home phone number:</td>
            <td><?php echo $home_phone_number; ?></td>
          </tr>
          <tr>
            <td>Date of birth:</td>
            <td><?php echo $dob; ?></td>
          </tr>
          <tr>
            <td>Branch:</td>
            <td><?php echo $branch; ?></td>
          </tr>
          <tr>
            <td>Marital status:</td>
            <td><?php echo $marital; ?></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><?php echo $email; ?></td>
          </tr>
          <tr>
            <td>Home address:</td>
            <td><?php echo $address; ?></td>
          </tr>
          <tr>
            <td>State:</td>
            <td><?php echo $state; ?></td>
          </tr>
          <tr>
            <td>Next of Kin/Guardian:</td>
            <td><?php echo $kin; ?></td>
          </tr>
          <tr>
            <td>Relationship to Next of Kin:</td>
            <td><?php echo $rel_kin; ?></td>
          </tr>
          <tr>
            <td>Occupation:</td>
            <td><?php echo $occupation; ?></td>
          </tr>
          <tr>
            <td>About yourself:</td>
            <td><?php echo $about_yourself; ?></td>
          </tr>
        </table>

    </div>
    <div class="powered">
    	Powered by Pmartin
    </div>
</body>
</html>
