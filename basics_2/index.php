<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics 2.0</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php 
    $name = $_GET['name'];
    if (!$name) {
        $name = "Unknown";
    }
    ?>

    <?php if ($name){ ?>
        <h1 class="underline font-bold text-3xl text-purple-500">Hello <?php echo $name ?>!</h1>
    <?php } ?>
    
</body>
</html>