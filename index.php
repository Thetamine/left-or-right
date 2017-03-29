<?php include "array.php" ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Left or Right?</title>
    <link rel="stylesheet" href="style/components/container.css">
    <link rel="stylesheet" href="style/components/grid.css">
    <link rel="stylesheet" href="style/components/menu.css">
    <link rel="stylesheet" href="style/components/header.css">
    <link rel="stylesheet" href="style/components/list.css">
    <link rel="stylesheet" href="style/components/button.css">
    <link rel="stylesheet" href="style/components/form.css">
</head>
<body>
    <div class="ui container">
      <div class="testResult"></div>
       <div class="ui center aligned large header">
           <p>Welcome to Left or Right!</p>
           <div class="ui header sub header">
               Make your Choice...
           </div>
        </div>
        <div class="ui equal width grid">
            <div class="row">
                <div class="center aligned column">
                    <div class="textContainer">
                        <p id="storyText">
                            <?php echo $story['gameStart']; ?>
                        </p>
                    </div> 
                </div>
            </div>
        </div>
        <form class="ui form" action="index.php" method="post">
            <div class="ui equal width grid">
                <div class="center aligned column">
                    <input type="submit" name="submit" value="X"  id="buttonX" class="ui massive inverted green button">
                </div>
                <div class="center aligned column">
                    <input type="submit" name="submit" value="O"  id="buttonO" class="ui massive inverted green button">
                </div>
            </div>
        </form>
    </div>
    
    <?php 

    if(isset($_POST['submit'])) {
        $result = $_POST['submit'];

        if($result === 'X') {
        ?> 
        <script type="text/javascript">
            var storyText = document.getElementById('storyText');
            var buttonElemX = document.getElementById('buttonX');
                document.getElementById('storyText').innerHTML = '';
                <?php echo 'document.getElementById("storyText").innerHTML ="' . $story['leftDoor'] . '"';?>
                buttonElemX.parentNode
                

    </script>
        <?php
        } else if($result ==='O') {
            ?> 
            <script type="text/javascript">
                var storyText = document.getElementById('storyText');
                document.getElementById('storyText').innerHTML = '';
                <?php echo 'document.getElementById("storyText").innerHTML ="' . $story['rightDoor'] . '"';?>

            </script>
            <?php
        } else {
            echo "Something went wrong during post submission. Please Try again.";
        }
    }
    
    ?>

</body>
</html>