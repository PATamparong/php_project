<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

//number 1
echo "1-15"."<br>";
    for($x = 0 ; $x <= 15; $x++){
        echo $x. "  ";
    }

//----------------------------------------
//number 2
    $divisibleBy_2=[];
    $divisibleBy_3=[];
    $divisibleBy_5=[];

for($x=1; $x<=15; $x++){
    if($x%2 == 0){
        array_push($divisibleBy_2,$x);
    };
    

    if($x%3 == 0){
        array_push($divisibleBy_3,$x);
   
    };
 
    if($x%5 == 0){
        array_push($divisibleBy_5,$x);
      
    };
}

function for_eachArray($array){
    foreach ($array as $item) {
        echo $item." ";
    }
}
echo "<br> <br> <br> divisible by 2 = ";
print_r(for_eachArray($divisibleBy_2));
echo "<br><br>";
echo "divisible by 3 = ";
print_r(for_eachArray($divisibleBy_3));
echo "<br><br>";
echo "divisible by 5 = ";

print_r(for_eachArray($divisibleBy_5));

//number 3-------------------------------------
$number = 1;
echo "<br><br> Tree <br>";
while($number<=7){
    echo str_repeat("*",$number)."<br>";
    $number++;
}
?>
    <!-- first topic -->
        <!-- var_dump,, dd,, echo,, print_r,, always use arrow head "->" for not string-->
        <!-- constant>> we use define("variable name","value") -->
        <!-- var_dump() - use for objects. -->
        <!-- echo - for strings -->
        <!-- . use to concatenate in php -->
        <!-- strings -  -->
        <!-- conditions - if-else,, switch case -->
        <!-- try ternary operator -->

    <!-- second topic -->
        <!-- 
            arrays/ loops
            --numeric(numeric index for access or store), associative(named indexes), Multidimentional(containing one or more arrays)
            -numeric samples
            --$variable =[]; or $variable[0] = "value"; or $variable = array(0 => 'value');
            -- array_push(arrayname, 'hahaha');
            --associative samples(use names to access or remove an item)-- access an associative array print_r(var["ako"]) (count())
            -- for loop, for each, do while
            --

         -->
         <!-- exercise :
            using loop display 1-15
            display divisible by 2,3,5
            using loop displaythis pattern *
            **
            ***
            up to 7
          -->
          <!-- day 2 ERROR HANDLING
                search : error levels(tutorial republic link: https://www.tutorialrepublic.com/php-reference/php-error-levels.php)
                examples:
                1. set_error_handler("function_name pra maghandle sa error")
                2. can use function for exception handling
                -- File manipulation - if ever mag gamit tag external resources gamit ang other file. file isulod sa file.
                2 ways to use file (external resources)
                1. include - naay warning pru mupadayon and program
                2. require - fatal error, the program will stop if wla ang external file.
                example:
                include("menu.php"); import
                require("menu.php");
                File Handling exception examples:
                study:
                    funtions, sessions, cookies and classes
        -->

<!-- sample use of this :
print isset($this);              //true,   $this exists
print gettype($this);            //Object, $this is an object 
print is_array($this);           //false,  $this isn't an array
print get_object_vars($this);    //true,   $this's variables are an array
print is_object($this);          //true,   $this is still an object
print get_class($this);          //YourProject\YourFile\YourClass
print get_parent_class($this);   //YourBundle\YourStuff\YourParentClass
print gettype($this->container); //object
print_r($this);                  //delicious data dump of $this
print $this->yourvariable        //access $this variable with -> -->
    <!-- passing arguments by reference (&$sdf--arguments) or ($sdf---reference)
    dynamic function call 
    function namesafunction(){
        echo "hello"
    }
    example: $function_holder="namesafunction";
            $function_holder();-- dre nagmatter ug giunsa pagtawag.
            ===
    session
    session_start();
    session- store the info to the server.
    cookie - store data on the client end.
     -- setcookie(name,value,expire,path,domain,secure);
    -->


</body>
</html>