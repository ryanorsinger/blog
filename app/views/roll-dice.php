<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Roll Dice</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Guess: <?= $guess ?></h1>
    <h1>Random: <?= $random ?></h1>

    <?php if($random == $guess): ?>
        <h3>You guessed correctly</h3>
    <?php endif; ?>
</body>
</html>
