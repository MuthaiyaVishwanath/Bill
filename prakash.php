
<?php 
     $con= mysqli_connect('localhost','root','','billing');
     if(!$con){
        echo "not connected";
     }
     if(isset($_POST['submit'])){
        $product=$_POST['prod'];
        $qty=$_POST['qty'];
        //$date=$_POST['date'];
        $name=$_POST['name'];
        $email=$_POST['email'];
     $sql="INSERT INTO bill1 (Product,quantity,namea,email) VALUES ('$product','$qty','$name','$email')";
     $res=mysqli_query($con,$sql);
     if(!$res){
        echo "not working";
     }else{
        $id=$con->insert_id;
     }
    }
     
     ?>