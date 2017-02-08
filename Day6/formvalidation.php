

<!DOCTYPE html>
<html lang= "en">
<head>
  <style>
    .error {color: #FF0000;}
  </style>
</head>
<body>
<?php
   $name=$address=$email=$gender=$comment="";
   $nameErr=$genderErr="";
   if ($_SERVER["REQUEST_METHOD"]=="POST"){
       if (empty($_POST["name"])){
         $nameErr ="Enter your name";
       }
       else{
          $name=$_POST["name"];
       }

       if (empty($_POST["password"])){
         $passErr ="Enter your password";
       }
       else{
          $password=$_POST["password"];
       
       if (!preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password)) {
          $passErr = "Enter srong password";
      }}  

     
       if (empty($_POST["address"])){
         $addErr ="Enter your address";
       }
       else{
          $address=$_POST["address"];
       }

     
       if (empty($_POST["email"])){
         $emailErr ="Enter your email";
       }
       else{
          $email=$_POST["email"];
       
       if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
          $emailErr = "Enter valid email";
       }}

       if (!isset($_POST["gender"])){
           $genderErr="Select your gender";
       }
       else{  
           $gender=$_POST["gender"];  
       }
       
       if (empty($_POST["comment"])){
         $commentErr ="Give your opinion";
       }
       else{
          $comment=$_POST["comment"];
       }}
?>
        
<h2>Form validation</h2>   
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
    Name:<input type="text" name="name"
       value="<?php echo htmlspecialchars($name);?>">
        <span class="error"><?php echo $nameErr;?></span><br><br>
      Password:<input type="text" name="password"
       value="<?php echo htmlspecialchars($password);?>">
        <span class="error"><?php echo $passErr;?></span><br><br>

     Addres:<input type="text" name="address"
         value="<?php echo htmlspecialchars($address);?>">
          <span class="error"><?php echo $addErr;?></span><br><br>
     Email:<input type="text" name="email"
          value="<?php echo htmlspecialchars($email);?>">
           <span class="error"><?php echo $emailErr;?></span><br><br>
      Gender:<input type="radio" name="gender"
                <?php if (isset($gender) && $gender == "female") echo "checked"; ?>
                 value="female">female
              <input type="radio" name="gender"
                <?php if (isset($gender) && $gender == "male") echo "checked"; ?>
                  value="male">Male
                  <span class="error"><?php echo $genderErr;?></span><br><br>
       Comment:<input type="text" name="comment"
                 value="<?php echo htmlspecialchars($comment);?>">
                  <span class="error"><?php echo $commentErr;?></span><br><br>
                 
                  <input type="submit" name="submit" value="Submit"><br><br>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $address;
echo "<br>";
echo $gender;
echo "<br>";
echo $comment;
?>    
</body>
</html>
