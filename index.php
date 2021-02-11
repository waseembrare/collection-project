<?php

require_once 'db.php';
require_once 'functions.php';

?>

<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cheffin' it up bruv</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <nav>
        <div class="header">
            <h1><span class="highlight">cheffin' it up bruv</span> &#127859</h1>
        </div>
    </nav>
    <div class="site-intro">
        <h2>add your own plates using the &#x2795 icon or just check out other plates for some tasty inspiration.</h2>
    </div>
    <?
        echo displayItemCards($results);
    ?>
    <footer>
        <h2><span class="highlight">keep cooking bruv...</span> &#129382</h2>
    </footer>
</body>
</html>

<?php

