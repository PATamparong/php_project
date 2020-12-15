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
    <div class="navigation">
        <a href="data_pass.php" class="exit">exit</a>
        <a href="day1.php" class="day1">day1</a>
        <a href="day2.php" class="day2">day2</a>
        <a href="day3.php" class="day3">day3</a>
</div>
    <div class="card">
        <center>
        <div class="container3">
            <h1 style="background-color:yellow;">day3</h1>
            <div>
                <?php 
                    echo "<form action=\"/precious/day3/activity1Day3.php\"><button>activity1</button></form>";
                    echo "<form action=\"/precious/day3/activity2Day3.php\"><button>activity2</button></form>";
                    echo "<form action=\"/precious/day3/cookies.php\"><button>cookies</button></form>";
                ?>
            </div>
        </div>
        </center>
    </div>
</body>
</html>