<?php
    require('includes/connection.php');

    if(isset($_POST['register'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gender=$_POST['gender'];
        $admin_num=$_POST['admin'];
        $level=$_POST['level'];
        $email_add=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $date=date('Y/m/d');
        $role=2;
       
        $sql="SELECT * FROM users WHERE username=:admin";
        $statement=$pdo->prepare($sql);
        $statement->bindParam(':admin',$admin_num);
        $statement->execute();
        $ads=$statement->fetchAll(PDO::FETCH_ASSOC);
        if($ads[0]>0){
                echo'<script>alert("Student with the Admission Number Already Exist");location.href="register.php";</script>';
         }else{
        $sql="INSERT INTO users(username,password,role)VALUES(:username,:password,:role)";
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(":username",$admin_num);
        $stmt->bindParam(":password",$admin_num);
        $stmt->bindParam(":role",$role);
        
        try{
            $stmt->execute();
            $user_id=$pdo->lastInsertID();

            $sql="INSERT INTO profile(userid,firstname,lastname,gender,admission_num,level,email,phone,address,date_added)VALUES(:user_id,:fname,:lname,:gen,:admin,:level,:email,:phone,:address,:date)";
            $stmt=$pdo->prepare($sql);
            $stmt->bindParam(":user_id",$user_id);
            $stmt->bindParam(":fname",$fname);
            $stmt->bindParam(":lname",$lname);
            $stmt->bindParam(":gen",$gender);
            $stmt->bindParam(":admin",$admin_num);
            $stmt->bindParam(":level",$level);
            $stmt->bindParam(":email",$email_add);
            $stmt->bindParam(":phone",$phone);
            $stmt->bindParam(":address",$address);
            $stmt->bindParam(":date",$date);
            
            try{
                $stmt->execute();
                echo'<script>alert("Successfully Registered");
                location.href="register.php";</script>';
            }
            catch(Exeception $e){
                echo $e->getMessage();
                echo'<script>alert("Registration Failed");
                location.href="register.php";</script>';
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