<?php
    $startNumber = $_POST['startNumber'];
    $endNumber =$_POST['endNumber'];
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>index</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>FizzBuzz Program</h1>
        </div>
    </header>
    <div class="program">
        <div class="container">
            <?php if($startNumber<=$endNumber): ?>
                <?php for($i=$startNumber; $i<=$endNumber; $i++): ?>
                    <?php if($i % 3 ==0 && $i % 5 ==0): ?>
                           <p><?php echo 'FizzBuzz' ?></p>
                    <?php elseif($i % 3 ==0): ?>
                        <p><?php echo 'Fizz' ?></p>
                    <?php elseif($i % 5 ==0):?>
                        <p><?php echo 'Buzz' ?></p>
                   <?php else:?>
                        <p><?php echo $i ?></p>
                    <?php endif ?>
                <?php endfor?>
            <?php else:?>
                <p class="error-msg">Error: EndにはStartより大きい値を入力してください！</p>
            <?php endif ?>
        </div>
    </div>
<footer>
    <div class="container">
        <a class="btn back" href="index.html">戻る</a>    
    </div>
</footer>
</body>
</html>