<?php 
    include('db_connect.php');
    $conn =  new mysqli($servername,$username,$pwd,$db);
    $results = mysqli_query($conn, "SELECT * FROM persons"); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Middlename</th>
                <th>Lastname</th>
                <th>Email</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        
        <?php 
        include('data_pass.php');
        while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $_REQUEST['firstname']; ?></td>
                <td><?php echo $_REQUEST['middlename']; ?></td>
                <td><?php echo $_REQUEST['lastname']; ?></td>
                <td><?php echo $_REQUEST['email']; ?></td>
                <td>
                    <a href="index.php?edit=<?php echo $_REQUEST['id']; ?>" class="edit_btn" >Edit</a>
                </td>
                <td>
                    <a href="server.php?del=<?php echo $_REQUEST['id']; ?>" class="del_btn">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
