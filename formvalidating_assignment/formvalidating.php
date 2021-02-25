<html>
	<head></head>
	<body>
        <?php 
        $name="";
        $uname="";
        $err_name="";
        $err_uname="";
        $password="";
        $err_password="";
        $var=array();
        $bio="";
        $email="";
        $err_email="";
        $err_eemail="";
        $Code="";
        $err_Code="";
        $gender="";
        $err_gender="";
        $hear="";
        $err_hear="";
        $bio="";
        $err_bio="";
        $stad="";
        $code="";
        $err_code="";
        $err_stad="";
        $cityad="";
        $err_cityad="";
        $statead="";
        $err_statead="";
        $pocode="";
        $err_pocode="";
        
       
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
              /*if(isset($_POST["submit"])){} */  
                if(empty($_POST["name"])){

                     $err_name="* name required";
                 } 
                else{
                    $name=htmlspecialchars($_POST["name"]);
                   // echo "Name: $name  <br>";
                    
                   
                }
            
            if(empty($_POST["uname"])){

                     $err_uname="* username required";
                 }  
                else if(strlen($_POST["uname"])<6)
                {
                    $err_uname="* username should be at least 6 charecters";
                }
                else{
                    $uname=htmlspecialchars($_POST["uname"]);
                   // echo "Username : $uname";
                   
                }
            
            
            if(empty($_POST["pass"])){

                    $err_password="*password required ";
                }
            else if(strlen($_POST["pass"])<8)
                {
                    $err_password="* password should be at least 8 charecters";
                }
             elseif(!strpos($_POST["pass"],"#"))
			 {
				 $err_password="*Password must contain at least one special character # ";
			 }
             elseif(strpos($_POST["pass"]," "))
			 {
				 $err_password="*Password must not contain spaces";
			 }
            else{   
                 $y=$_POST["pass"];
                     if(ctype_alnum($y) && ctype_upper($y) && ctype_lower($y) && is_numeric($y))
                     {
                            $password=($_POST["pass"]);
                            // echo "Password: $password  <br>";
                     }
                     else{
                            $err_password="* password should have one number, special charecter ,upper ,lower case and at least 8 charecters"; 
                        }
                }
            
                
                
            
            
            
            
            
            if(empty($_POST["email"])){

                     $err_eemail="* Email address required";
                 }
           else if(!empty($_POST["email"])){
                $email=$_POST["email"];
                $a=strpos($email,"@","0");
                $d=strpos($email,".",$a+1);
               if($a>$d)
               {
                   $err_email="* Email address not valid";
               //echo "$err_email";
               }
               
               else{
                    $email=htmlspecialchars($_POST["email"]);
                                    
                   // echo "Email : $email <br>";
                }
                }
            
            
            if(empty($_POST["Code"])){

                     $err_Code="* phone number required";
                 }
           else if(!empty($_POST["Code"])){
                $Code=$_POST["Code"];
                $x=is_numeric($Code);

               if($x==0)
               {
                   $err_Code="* phone number should be numbers type";
               //echo "$err_email";
               }
               
               else{
                    $code=$_POST["Code"];
                                    
                   
                }
                }
            
            		
			If (empty($_POST["stad"])){
				$err_stad="*Street Address Required";
			 }
			else{
				$stad=htmlspecialchars($_POST["stad"]);
			 }
			If (empty($_POST["code"])){
				$err_code="*Region Code Required -";
			 }
			else{
				$code=htmlspecialchars($_POST["code"]);
			 }
			if(empty($_POST["city"]))
			 {
				$err_cityad="*City Name Required -";
			 }
			else
			{
				$cityad=htmlspecialchars($_POST["city"]);
			}
			 if(empty($_POST["state"]))
			{
				$err_statead="*State Name Required";
			}
			else
			{
				$statead=htmlspecialchars($_POST["state"]);
			}
			if(empty($_POST["pocode"]))
			 {
				$err_pocode="*Postal/Zip Code Required";
			 }
			 else
			 {
				$pocode=htmlspecialchars($_POST["pocode"]);
			 }
			
            
               
         
            
           if(!isset($_POST["gender"])){
				$err_gender="*[Gender Required]";
			 }
			else{
				$gender=htmlspecialchars($_POST["gender"]);
			 }
			 
			if(!isset($_POST["hear"])){
				
				$err_hear="*At least one option must be selected";
			 }
			else
			{
			 $hear=htmlspecialchars($_POST["hear"]);
			}
			
			if(empty($_POST["bio"]))
			{
			 $err_bio="[Bio Required]";
			}
			else
			{
			$bio=htmlspecialchars($_POST["bio"]);
			}
            
        }
        
        
        
        
        ?>
        
        <fieldset>
        <fieldset>    
          <legend><h2>Club Member Registration</h2></legend>  
            
		<form action="" method="post">
            <table>
                
                  <tr>
                        <td>
                            <span>Name </span>
                    
                        </td>
                      <td>
                            : <input type="text" name="name" value="<?php echo $name ?>"> 
                             <br>
                                <span><?php echo $err_name; ?></span>  
                        </td>
                
                  </tr>
            
            <tr>
                <td><span>Username</span></td>
                <td> : <input type="text" name="uname"  value="<?php echo $uname ?>"> 
                    <br>
                <span><?php echo $err_uname; ?></span>    
                </td>
                
          </tr>
          
                
            <tr>
                <td><span>Password </span></td>
                 <td>  : <input type="password" name="pass">
                    <br>
                <span><?php echo $err_password; ?> </span>
                </td>
               
            </tr>
                
             <tr>
                <td><span>Confirm Password </span></td>
                 <td>  : <input type="password" name="pass" >
                    <br>
                <span><?php echo $err_password; ?> </span>
                </td>
               
            </tr>
                <tr>
                        <td>
                            <span>Email </span>
                    
                        </td>
                      <td>
                            : <input type="text" name="email"  > 
                          <br>
                               <span><?php echo $err_email; ?></span> 
                          <br>
                               <span><?php echo $err_eemail; ?></span> 
                        </td>
                
                  </tr>
                    <tr>
                        <td>
                            <span>Phone </span>
                    
                        </td>
                      <td>
                           : <input type="text" name="Code" placeholder="Code"> - <input type="text" name="Code" placeholder="Number"> 
                    
                            <br>
                               <span><?php echo $err_Code; ?></span>
                        </td>
                
                  </tr>
             <tr>
					<td><span>Address</span></td>
					<td>:<input type="text" name="stad" placeholder = "Street Address" size="19" value="<?php echo $stad;?>"placeholder="Street Address">
					<span><?php echo $err_stad;?></span></td>
				</tr>
				<tr>
					<td></td>
					<td>:<input type="text" name="city" placeholder = "City" value="<?php echo $cityad;?>" placeholder = "City" size="5"> - <input type="text" name="state" placeholder = "State" value="<?php echo $statead;?>" placeholder ="State" size="6">
					<span><?php echo $err_cityad;?></span><span><?php echo $err_statead;?><br></span></td>
				</tr>
				<tr>
					<td> <span></span></td>
					<td>:<input type="text" name="pocode" value="<?php echo $pocode;?>" placeholder = "Postal/Zip Code">
					<span><?php echo $err_pocode;?></span></td>
				</tr>

                 <tr>
                        <td >
                            <span>Birth Date </span>
                    
                        </td>
                      <td>
                            : <select >
                              
                               <option >Day</option>
                                <?php 
                                for($i=1;$i<32;$i++){
                                                    echo" <option> $i </option>" ;
                                    }
                                ?>
                                                    
                              </select> 
                           <select >
                              
                               <option >Month</option>
                               <?php 
                                for($i=1;$i<13;$i++){
                                                    echo" <option> $i </option>" ;
                                    }
                                ?>
                              </select>
                           <select >
                              
                               <option >Year</option>
                               <?php 
                                for($i=1997;$i<2022;$i++){
                                                    echo" <option> $i </option>" ;
                                    }
                                ?>
                              </select>
                    
                        </td>
                
                  </tr>
            
            <tr>
                <td><span>Gender</span></td>
                <td> :<input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female 
                    <br>
                <span><?php echo $err_gender;?></span>
                </td>
                
            </tr>
                
            <tr>
            
                
                <td><span>Where did you hear about us ? </span></td>
                <td>
                    <input type="checkbox" value="A friend or Colleague" >A friend or Colleague <br> <input type="checkbox" value="Google" > Google  <br> <input type="checkbox"value="Blog Post" > Blog Post  <br>
                    
                    <input type="checkbox"value="News Article" > News Article <br>
                    
                <span><?php echo $err_hear;?></span>
                </td>
                
            </tr>
                
           
            
            <tr>
                <td><span>Bio</span></td>
                <td>
                    : <textarea name="bio" ><?php echo $bio;?></textarea>
                <br>
                    <span><?php echo $err_bio ?> </span>
                    </td>
            </tr>
            
                <tr>
                     <td></td>
                    <td><input type="submit" name="register" value="Register"></td>
                
            </tr>
             
            </table>
        </form>
            </fieldset>
        </fieldset>
    </body>

