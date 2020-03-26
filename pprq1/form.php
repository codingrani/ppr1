<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
  </head>
  <body>
    <h1>student form</h1>
    <form action="functions/addstuf.php" method="POST" onsubmit="return validation()">
        
        <?php 
            $msg="";
            if(isset($_GET['msg']))
                        $msg=$_GET['msg'];
        
        
        
        if($msg==2)
        {
            if(isset($_SESSION['error']))
                print_r($_SESSION['error']);
        }
        
        
        ?>
      <label for="">name deain</label>
      <input type="text" name="name" id="name" />
      <label for="">address</label>
      <input type="text" name="address"  id="address" />
        <select name="school_id" id="school_id">
            <?php
                include 'functions/database.php';
                $sql="select * from school";
                $data=mysqli_query($conn,$sql);
                
                while($row=mysqli_fetch_assoc($data))
                   {?>
                    <option value="<?php echo $row['school_id']; ?>"><?php echo $row['school_name']; ?></option>
                    
               <?php } ?>
        
        </select>
        <select name="t_id" id="t_id">
            <?php
                
                $sql="select * from teacher";
                $data=mysqli_query($conn,$sql);
                
                while($row=mysqli_fetch_assoc($data))
                   {?>
                    <option value="<?php echo $row['t_id']; ?>"><?php echo $row['name']; ?></option>
                    
               <?php } ?>
        
        </select>
        
      <input type="submit" name="submit" />
    </form>
      <script src="functions/js.js"></script>
  </body>
</html>
