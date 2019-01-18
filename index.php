<?php include('./php/config.php');?>

<!doctype html>
<html>
<head>
    <?php include('./php/tags.php');?>
</head>
    
<body>
    
    <?php include('./php/header.php');?>
    
    <div class="container">
        
    <?php if ( isset($_GET['success']) && $_GET['success'] == 1 )
        {
            echo '<p>Record added to database sucessfully</p>';
        }
    ?>

   <?php 
        echo '<section class="big" id="'.$pgname.'">';
        echo file_get_contents('htm/'. $pgname. '.htm');
        
        if ( isset($_GET['pg']) && $_GET['pg'] == 'blog' ) { include('./php/get.php');}
        
        echo '</section>';
        ?>
        
    </div>
    
    <footer>
            <a target="_blank" href="https://github.com/patiem"><img src="media/github.svg"/></a>
    </footer>

</body>
</html>
