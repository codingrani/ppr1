<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
  </head>
  <body>
    <h1>View Students</h1>
      <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Address</th>
              <th>School</th>
            </tr>
          </thead>
          <tbody>
              
              <?php
              include 'functions/database.php';
              $sql="select *from student, school where student.school_id_fk=school.school_id";
              $data=mysqli_query($conn,$sql);
              while($row=mysqli_fetch_assoc($data))
              {?>
               <tr>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                      <td><?php echo $row['school_name']; ?></td>
              </tr>
            <?php  }
              
              ?>
         
          </tbody>
      
      </table>
    
  </body>
</html>
