<?php
    include 'database.php';
    include 'validationf.php';
    session_start();
    if(isset($_POST['submit']))
    {
        sanatization($_POST);
        
        $name= $_POST['name'];
        $address= $_POST['address'];
        $school_id= $_POST['school_id'];
        $t_id= $_POST['t_id'];
        
        if($a=isempty($_POST))
        {
            $_session['error']=$a;
            header("location:../form.php?msg=2");
            exit();
        }
        if(!preg_match("/^[A-Za-z]+$/",$name))
           {
             header("location:../form.php?msg=3");
               exit();
           }
    }

    $sql="insert into  student (name,address,school_id_fk, teacher_id_fk) values('$name','$address','$school_id','$t_id')";
    $data=mysqli_query($conn,$sql);
    if($data)
    {
     header("location:../form.php?msg=4");
               exit();   
    }
    else
    {
        header("location:../form.php?msg=5");
               exit();
    }
?>