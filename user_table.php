<?php
    include 'controller/get_all_user.php';
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            color:brown;
            margin:25%;
        }
        table, th, td{
                border: solid 1px green;
    
        }
    </style>
    <title>Table</title>
</head>
<body>
    <table> 
        <thead>
        <tr>
           
            <th>Student ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Year Level</th>
            <th>Section</th>
    
        </tr>
    </thead>
    <tbody> 
        <?php while($row = mysqli_fetch_assoc($sqlExec)) { ?>
        <tr>
           <td> <center><?php echo $row['id']; ?></center></td>
            <td><center><?php echo $row['f_name']; echo" "; echo $row['m_name']; echo" "; echo $row['l_name']; ?></center></td>
            <td><center><?php echo $row['dept']; ?></center></td>
            <td><center><?php echo $row['year_level']; ?></center></td>
            <td><center><?php echo $row['section']; ?></center></td>
          
        </tr>
        <?php }?>
    </tbody>
    </table>
</body>
</html>