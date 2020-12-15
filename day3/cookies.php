<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="/precious/day4/day3.php">day3</a>
    </nav>
    <?php 
    //setcookie
        setcookie("username","precious",time()+30*24*60*60);
        if(isset($_COOKIE["username"])){
            echo $_COOKIE["username"]." "."was set";
        }else{
            echo "not set";
        }
    // //delete cookie ....................-> uncomment to see results
    //     unset($_COOKIE['username']);
    //     setcookie("username","precious",time()-3600);
    //     if(isset($_COOKIE["username"])){
    //         echo $_COOKIE["username"];
    //     }else{
    //         echo "not set";
    //     }
    ?>
</body>
</html>
