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
        //activity number1
        function sum($num,$num1){
            echo "<h1>activity number1</h1>";
            echo "<h2>".($num+$num1)."</h2>";
        }
        sum(23,34);
        echo "---------------------------------------------------------<br>";

        //activity number2
        function display(){
            echo "<h1>activity number2</h1>";
            $wow = array('samsung','realme','vivo','oppo');

            //with loop
            foreach($wow as $key => $value){
                echo $key." ". $value."<br>";
            }

            // without loop
            $string = join(',', $wow);
            echo "<br>".$string;
            echo "<br>---------------------------------------------------------";
        }
        display();

        //activity number3
        function display_multidimensional(){
            echo "<h1>activity number3</h1>";
            $wow = array(
                'food' => array(
                    'go' => array(
                        1 => 'bread',
                        2 => 'biscuits'
                    ),
                    'grow' => array(
                        1 => 'pork',
                        2 => 'chicken'
                    ),
                    'glow' => array(
                        1 => 'vegetables',
                        2 => 'fruits' 
                    )
                ),
                'section' => array(
                    'sectionA' => array(
                        1 => 'precious',
                        2 => 'jeanita',
                        3 => 'annalie',
                        4 => 'cindy',
                        5 => 'tyron'
                    ),
                    'sectionB' => array(
                        1 => 'precious',
                        2 => 'jeanita',
                        3 => 'annalie',
                        4 => 'cindy',
                        5 => 'tyron'
                    )
                ),
                'ph_presidents' => array(
                    1 =>array(' '=> 'rodrigo duterte'),
                    2 =>array(' ' => 'ninoy aquino'),
                    3 =>array(' ' => 'gloria arroyo')
                ) 
            );

            foreach($wow as $key => $value){
                echo "<h2>"."<br>".$key." : "."</h2>"."<br><br>";
                foreach($value as $inside => $values_inside) {
                    echo "\n"."<h3>".$inside. ': '."</h3>". '<br /><br />';
                    foreach($values_inside as $go => $success){
                        echo "\n".$go. ': '.$success. '<br/><br/>';
                    }
                }
            }
        echo "---------------------------------------------------------<br>";  
        }
        display_multidimensional();

        //activity number4
        echo "<h1>activity number4</h1>";
        function create_Array(){
            $array = array('precious' => 'angel');
            print_r($array);
            echo "<br>---------------------------------------------------------<br>"; 
        } 
        create_Array();

        //activity number5
        echo "<h1>activity number5</h1>";
        $array1 = array('honda');
        function add_Data(){
            global $array1;
            array_push($array1, 'car', 'motors');
            echo "<br>";
            print_r($array1);
            echo "<br><br>---------------------------------------------------------<br>";  
        }
        add_Data();

        //activity number6
        echo "<h1>activity number6</h1>";
        function display_Previous(){
            global $array1;
            //with loop
            echo "<h3>with loop: </h3>";
            foreach($array1 as $key=> $value){
                echo "<br><br>".$key." ". $value."<br>";
            }

            echo "<h3>without loop: </h3>";
            // without loop
            $string = join(',', $array1);
            echo "<br>".$string;
        }
        display_Previous()
    ?>

</body>
</html>
