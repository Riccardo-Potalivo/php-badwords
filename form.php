<?php
$paragraph = $_GET["paragraph"];
$hide = $_GET["hide"];

$blurredParagraph = str_replace($hide, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>

    <main>
        <div>
            <?php echo $paragraph; ?>

        </div>
        <div>
            <?php echo $blurredParagraph; ?>

        </div>
        <!-- <div>
            <?php echo $hide; ?>

        </div> -->
    </main>

</body>

</html>