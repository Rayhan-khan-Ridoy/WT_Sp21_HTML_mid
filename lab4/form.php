<html>
	<head></head>
	<body>
        <?php 
        $uname="";
        $err_uname="";
        $password="";
        $err_password="";
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
              /*if(isset($_POST["submit"])){} */  
                 if(empty($_POST["uname"])){

                     $err_uname="*username required";
                 }  
                else if(strlen($_POST["uname"])<6)
                {
                    $err_uname="*username should be at least 6 charecters";
                }
                else{
                    $uname=_POST["uname"];
                }
                if(empty($_POST["pass"])){

                    $err_password="*password required";
                }
                else{

                    $password=$_POST["pass"];
                }
                if(isset($_POST["gender"]))
                    echo "Gender: ".$_POST["profession"]."<br>";
                if(isset($_POST["hobbies"]))
                    $var= $_POST["hobbies"];
             /*
                {
                    echo $var[$i]."<br>";
                }


                  */

            
        }
        
        
        
        
        ?>
            
            
            
		<form action="" method="post">
            <table>
            <tr>
                <td rowspan="2"><span>User access</span></td>
                <td>:<span>Username </span>: <input type="text" placeholder="username" value="<?php echo $uname ?>"> 
                <span><?php echo $err_uname; ?></span>    
                </td>
                
          
            </tr>
                
            <tr>
                <td>:<span>Password </span>:<input type="password" placeholder="password" value="<?php echo $password; ?>">
                <span><?php echo $err_password; ?> </span>
                </td>
                <td></td>
            </tr>
            <tr>
                <td><span>Gender:</span></td>
                <td> :<input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female</td>
            </tr>
                
            <tr>
                <td><span>Hobbies: </span></td>
                <td>:<input type="checkbox" value="Movies" name="hobbies[]">Movies <input type="checkbox" value="Music" name="hobbies[]">Music <input type="checkbox"value="Games" name="hobbies[]">Games</td>
            </tr>
                
            <tr>
                <td><span>Profession:</span></td>
                <td>:
                    <select name="profession">
                    <option>Teaching</option>
                    <option>Business</option>
                    <option>Service</option>
                   </select>
                    </td>
            </tr>
            
            <tr>
                <td><span>Bio</span><textarea></textarea></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
            
            
            </table>
        </form>
    </body>