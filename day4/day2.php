<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WEBSITE</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <div class="top_name">
        <h1 class="text">Backend:PHP</h1>
    </div>
    <nav class="navigation">
        <a href="data_pass.php" class="exit">exit</a>
        <a href="day1.php" class="day1">day1</a>
        <a href="day2.php" class="day2">day2</a>
        <a href="day3.php" class="day3">day3</a>
    </nav>
    <div class="card">
        <center>
        <div class="container2">
            <h1 style="background-color:yellow;">day2</h1>
            <div>
                <?php 
                    echo "<form action=\"/precious/day2/activityDay2.php\"><button>activity1</button></form>";
                    echo "<form action=\"/precious/day2/exerciseDay2.php\"><button>exercise2</button></form>";
                    echo "<form action=\"/precious/day2/file2.php\"><button>file2</button></form>";
                ?>
            </div>
        </div>
        </center>
    </div>
</body>
</html>