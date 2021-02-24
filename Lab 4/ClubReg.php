<?php
  $name="";
  $err_name="";
  $uname="";
  $err_uname="";
  $pass="";
  $err_pass="";
  $conpass="";
  $err_conpass="";
  $mail="";
  $err_mail="";
  $code="";
  $err_code="";
  $number="";
  $err_number="";
  $gender="";
  $err_gender="";
  $day="";
  $err_day="";
  $month="";
  $err_month="";
  $year="";
  $err_year="";
  $bio="";
  $err_bio="";
  $source="";
  $err_source="";
  $gender=$genderErr="";
  
  
    if  ($_SERVER["REQUEST_METHOD"]=="POST")
    {
      if (empty($_POST["u_name"]))
      {
        $err_name="*Name Required";
      }
      else
      {
        $name=$_POST["u_name"];
      }
      
      if (strlen($_POST["u_uname"])<6)
      {
        $err_uname="Username length should be 6 or longer";
      }
      elseif(strpos($_POST["u_uname"]," "))
      {
        $err_uname="Space are not allowed";
      }
      else
      {
        $uname=$_POST["u_uname"];
      }
      if(strlen($_POST["u_pass"])>8)
      {
        $pass=$_POST["u_pass"];
      if ((!strpos($_POST["u_pass"],"#"))||(!strpos($_POST["u_pass"],"?")))
        {
        $err_pass="Password should be minimum 1 character like '?'or'#'";
        }
        for ($i=0;$i<strlen($_POST["u_pass"]);$i++)
        {
          if (ctype_lower($_POST["u_pass"][$i]))
          {
            break;
          }
          else
          {
            $err_pass="Password should be minimum 1 lower case ";
          }
        }
        for ($j=0;$j<strlen($_POST["u_pass"]);$j++)
        {
          if (ctype_upper($_POST["u_pass"][$j]))
          {
            break;
          }
          else
          {
            $err_pass="Password should be minimum 1 upper case ";
          }
        }
        for($k=0;$k<strlen($_POST["pass"]);$k++)
        {
          if(is_numeric($_POST["pass"][$k]))
          {
            break;
          }
          else
          {
            $err_pass="Password should be minimum 1 numeric character";
          }
        }
      }
      else
      {
        $err_pass="Password length must be 8 or longer";
      } 
      
      
      if($_POST["u_conpass"]!=$_POST["u_pass"])
      {
        $err_conpass="Password didn't matched";
      }
      else
      {
        $conpass=$_POST["u_conpass"];
      }
      
      if(strpos($_POST["u_mail"],"@"))
      {
        if(strpos($_POST["u_mail"],"."))
         {$mail=$_POST["u_mail"];}
      }
      else
      {
        $err_mail="Email should be contain '@' and '.' sequentially";
      }
      
      if(!is_numeric($_POST["u_code"]))
      {
        $err_code="Code should be numeric";
      }
      else 
      {
        $number=$_POST["u_number"];
      }
      if(!is_numeric($_POST["u_number"]))
      {
        $err_number="Number should be numeric";
      }
      else
      {
        $number = $_POST["u_number"];
      }
      if (!isset($_POST["u_day"]))
      {
        $err_day="Day must be selected";
      }
      else
      {
        $day=$_POST["u_day"];
      }
      if (!isset($_POST["u_month"]))
      {
        $err_month="Month must be selected";
      }
      else
      {
        $month=$_POST["u_month"];
      }
      if (!isset($_POST["u_year"]))
      {
        $err_year="Year must be selected";
      }
      else
      {
        $year=$_POST["u_year"];
      }
      
      if (empty($_POST["u_bio"]))
      {
        $err_bio="Plase fill the text area";
      }
      else
      {
        $bio=$_POST["u_bio"];
      }
      
      
      
      if(!isset($_POST["u_gender"]))
      {
        $err_gender="Please select a gender";
      }
      else
      {
        $gender=$_POST["u_gender"];
      }
      
      if(!isset($_POST["u_source"]))
      {
        $err_source="Least 1 source have to be selected";
      }
      else
      {
        $source=$_POST["u_source"];
      }
      if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  }else {
    $gender =($_POST["gender"]);
  }
    echo "Name: ".htmlspecialchars($_POST["u_name"])."<br>";
    echo "Password: ".htmlspecialchars($_POST["u_pass"])."<br>";
    echo "Gender: ".htmlspecialchars($_POST["gender"])."<br>";
    
    }
?>

<html>
  <head>
    <style>
.error {color: #FF0000;}
</style>
</head>
  <body>
    <center>
    <form action="" method="post">
    <fieldset>
    <legend align="center"><h1>Club Member Registration</h1></legend>
      <table>
        <tr>
          <td><span >Name</span></td>
          <td>:</td>
          <td><input type="text" name="u_name" value="<?php echo $name;?>"><td><span><?php echo $err_name;?></span></td>
        </tr>
        
        <tr>
          <td><span >Username</span></td>
          <td>:</td>
          <td><input type="text" name="u_uname" value="<?php echo $uname;?>"> </td><td><span><?php echo $err_uname;?></span></td>
        </tr>
        <tr>
          <td><span>Password</span></td>
          <td>:</td>
          <td><input type="password" name="u_pass" value="<?php echo $pass;?>"> </td><td><span><?php echo $err_pass;?></span></td>
        </tr>
        <tr>
          <td><span>Confirm Password</span></td>
          <td>:</td>
          <td><input type="password" name="u_conpass" value="<?php echo $conpass;?>"> </td><td><span><?php echo $err_conpass;?></span></td>
        </tr>
        <tr>
          <td><span>Email</span></td>
          <td>:</td>
          <td><input type="text" name="u_mail" value="<?php echo $mail;?>"> </td><td><span><?php echo $err_mail;?></span></td>
        </tr>
        <tr>
          <td><span>Phone</span></td>
          <td>:</td>
          <td><input type="text" name="u_code" value="<?php echo $code;?>" placeholder="Code" size="4">-<input type="text" name="u_number" value="<?php echo $number;?>" placeholder = "Number" size="10"> </td><td><span><?php echo $err_code;?></span><span><?php echo $err_number;?></span></td>
        </tr>
        <tr>
          <td><span>Address</span></td>
          <td>:</td>
          <td><input type="text" name="sa" placeholder="Street Address"></td>
        </tr>
        <tr>
          <td><span>Birth Date</span></td>
          <td>:</td>
          <td><input type="date" name="dob" placeholder="DD-MM-YYYY" ></td>
        </tr>
        <tr>
          <td><span>Gender</span></td>
          <td>:</td>
          <td><input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span></td>
        </tr>
        <tr>
          <td><span>Bio</span></td>
          <td>:</td>
          <td><textarea rows="4" cols="20" name="comment"></textarea></td>
        </tr>
        <tr>
          <td><td><input type="submit" name="submit" value="Register"></td></td>
        </tr>
          <td></td>
          <td></td>