<?php
$paragraph = $_GET["paragraph"];
$hide = $_GET["hide"];

$blurredParagraph = str_replace($hide, '***', $paragraph);
$lengthParagraph = strlen($paragraph);
$lengthBlurredParagraph = strlen($blurredParagraph);
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
            paragraph:
            <?php echo $paragraph; ?>
        </div>
        <div>
            paragraph length:
            <?php echo $lengthParagraph; ?>
        </div>
        <div>
            blurredParagraph:
            <?php echo $blurredParagraph; ?>
        </div>
        <div>
            blurred paragraph length:
            <?php echo $lengthBlurredParagraph; ?>
        </div>
        <div>
            blurred word:
            <?php echo $hide; ?>
        </div>
    </main>

</body>

</html>