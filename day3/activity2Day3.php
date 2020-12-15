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
    <P>---------------------------------------------------------------------------</P>
    <div>
        <?php 
        class class1{
            private $pre = "why?";
            public $pre1 = "yes";

            private function fun(){
                echo "hala";
            }
            function funny(){
                echo "yehey!";
            }
        } 
        $class = new class1;
        $class->funny();
        ?>
    </div>
    <P>---------------------------------------------------------------------------</P>
    <div>
        <?php 
            session_start();
            $_SESSION["name"]= "precious";
            $_SESSION["email"]="preciousangeltamparong@gmail.com";
            $_SESSION["browser"]=array('Firefox','Chrome','Internet Explorer','Safari','Opera');
            echo $_SESSION["name"]."\n".$_SESSION["email"]."\n".$_SESSION["browser"][1];

        ?>
    </div>
    <P>---------------------------------------------------------------------------</P>
        <div>
            <?php 
            //using min and max
                $marks1 = array(360,310,310,330,313,375,456,111,256);
                $marks2 = array(350,340,356,330,321);
                $marks3 = array(630,340,570,635,434,255,298);
                $max = max(max($marks1),max($marks2),max($marks3)); 
                $min = min(min($marks1),min($marks2),min($marks3));
                echo "maximum marks: ".$max."<br>";
                echo "maximum marks: ".$min."\n";

            ?>
        </div>
        <h2>thank you!</h2>
</body>
</html>