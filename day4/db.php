<?php 
    session_start();

    include('data_pass.php');
    include('db_connect.php');
    $conn =  new mysqli($servername,$username,$pwd,$db);
    if(isset($_REQUEST['submit']) != ''){
        if($_REQUEST['firstname'] || $_REQUEST['middlename'] || $_REQUEST['lastname'] || $_REQUEST['email']){
            echo "please fill the empty field";
        }else{
            $sql = "insert into person(firstname,middlename,lastname,email) values('".$_REQUEST['firstname']."','".$_REQUEST['middlename']."','".$_REQUEST['lastname']."','".$_REQUEST['email']."')";
            $res = mysqli_query($conn,$sql);
            if($res){
                echo "recorded successfully...";
            }
            echo "there's a problem occurred...";
        }
        $_SESSION['message'] = "Address saved"; 
		header('location: index.php');
    }

    print_r($_POST);
    mysqli_close($conn);
?>