<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DATA</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <center>
    <div class="con1">
        <div class="con2">
            <?php ?>
                <form class="form" action="db.php" method="POST">
                    <center>
                    <fieldset class="field" style="width:95%"><legend>LOGIN</legend>
                    </center>
                    <br>
                    <div>
                        <label for="" hidden>input id number</label>
                        <input type="number" name="id" hidden>
                    </div>
                    
                    <label for="firstname">firstname:</label><input type="text" name="firstname" value="<?php echo ""; ?>" require><br><br>
                    
                    <label for="middlename">middlename:</label><input type="text" name="middlename" value="<?php echo ""; ?>" require><br><br>
                    
                    <label for="lastname">lastname:</label><input type="text" name="lastname" value="<?php echo ""; ?>" require><br><br>
                    
                    <label for="email">email:</label><input type="text" name="email" value="<?php echo ""; ?>" require><br><br>
                    <center>
                    <button class="submit" type="submit">SUBMIT</button>
                    </center>
                </form>
        </div>
    </div>
    </center>
</body>

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
</html>