<?php 
    include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crud Operations</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <body>
        <div class = "container">
            <button class = "btn btn-primary my-5"><a href = "user.php" class = "text-light">Add user</a></button>

            <!--creating the table -->
            
            <table class="table">
                    <thead>
                         <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Password</th>
                            <th scope="col">Operations</th>
                        </tr>
                     </thead>
                <tbody>

                 <!--Displaying the data that user inserted -->
                <?php
                    $sql = "select * from `crud`";

                    $result  = mysqli_query($con,$sql);
    
                    if($result){
                        while($row =  mysqli_fetch_assoc($result)){
                            $id       =  $row['id'];
                            $name     =  $row['name'];
                            $email    =  $row['email'];
                            $mobile   =  $row['mobile'];
                            $password =  $row['password'];
                
                            echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$mobile.'</td>
                                <td>'.$password.'</td>
                
                                <td>
                                    <button class = "btn btn-primary"><a href = "update.php? updateid= '.$id.'" class= "text-light">Update</a></button>
                                    <button class = "btn btn-danger"> <a href = "delete.php? deleteid= '.$id.'" class= "text-light">Delete</a></button>
                                </td>
                            </tr>';
                        }
                    }
                ?>

            </table>

        </div>
    </body>
</html>