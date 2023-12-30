<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body style="background-color: aliceblue;">
        <div class="container">
                <?php require 'components/header.php'; ?>
        </div>
       
        <div class="container">
                <?php require 'components/main.php'; ?>
        </div>
        
        <div class="container">
                <?php require 'components/footer.php'; ?>
        </div>
</body>
</html>