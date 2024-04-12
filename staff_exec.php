<?php
    require('includes/connection.php');

    if(isset($_POST['register'])){
        $role=3;
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gender=$_POST['gender'];
        $sp_num=$_POST['sp_no'];
        $category=$_POST['category'];
        $email_add=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $date=date('Y/m/d');

        $sql="SELECT * FROM users WHERE username=:spnum";
        $statement=$pdo->prepare($sql);
        $statement->bindParam(':spnum',$sp_num);
        $statement->execute();
        // if($statement>rowCount()== 1){
        $ads=$statement->fetchAll(PDO::FETCH_ASSOC);
       if($ads[0]>0){
                echo'<script>alert("Username Already Exist");location.href="register_staff.php";</script>';
                
            }else{
        $sql="INSERT INTO users(username,password,role)VALUES(:username,:password,:role)";
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(":username",$sp_num);
        $stmt->bindParam(":password",$sp_num);
        $stmt->bindParam(":role",$role);
        
        try{
            $stmt->execute();
            $user_id=$pdo->lastInsertID();

            $sql="INSERT INTO staffprofile(userid,firstname,lastname,gender,sp_num,category,email,phone,address,date_added)VALUES(:user_id,:fname,:lname,:gen,:sp_no,:category,:email,:phone,:address,:date)";
            $stmt=$pdo->prepare($sql);
            $stmt->bindParam(":user_id",$user_id);
            $stmt->bindParam(":fname",$fname);
            $stmt->bindParam(":lname",$lname);
            $stmt->bindParam(":gen",$gender);
            $stmt->bindParam(":sp_no",$sp_num);
            $stmt->bindParam(":category",$category);
            $stmt->bindParam(":email",$email_add);
            $stmt->bindParam(":phone",$phone);
            $stmt->bindParam(":address",$address);
            $stmt->bindParam(":date",$date);
            
            try{
                $stmt->execute();
                echo'<script>alert("Successfully Registered");
                location.href="register_staff.php";</script>';
            }
            catch(Exeception $e){
                echo $e->getMessage();
                echo'<script>alert("Registration Failed");
                location.href="register_staff.php";</script>';
            }
        }
        catch(Exeception $e){
            echo $e->getMessage();
            echo'<script>alert("Successfully Registered");
            location.href="index.php";</script>';
        }
    }
}
?>