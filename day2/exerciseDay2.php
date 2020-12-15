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
        <a href="/precious/day4/day2.php">day2</a>
    </nav>
    <?php 
        //activity number 1
        $color = array('white', 'green', 'red', 'blue', 'black');
        $color_Chosen = $color[1];
        echo "<div class='color'><p>The memory of that scene for me is like a frame of $color[4] forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, $color[0] house, the leaden $color[3]. The new president and his first lady.
        - Richard M. Nixon</p></div>";

        //activity number2
        $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
        //using slice
        $wow = array_slice($ceu,20);
        foreach($wow as $key => $value){
            echo "the capital of $key is $value <br>";
        }

        //activity number3
        $x = array(1, 2, 3, 4, 5);
        print_r(array_splice($x,1));
        
    ?>
</body>
</html>
