<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практика PHP </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/php.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'Город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                         $x = 15;
                         $x = $x - 8;
                        echo $x;
                    ?>   <br>
                    
                    <?php
                        $a = 56;
                        $b = 15;
                        echo $a * $b . '<br>';
                        var_dump($a != $b);
                    ?> <br>

                     <?php
                        echo $d . '<br>';
                        echo $f;
                    ?>

            </div>

            <div class="article">
                <p class="text">
                    Так и не смог разобраться, как применить стили отдельно к блоку ссылок в футере =(
                </p>
            </div>
        </div>
            <?php include 'footer.inc.php'?>
        </div>


</body>
</html>
