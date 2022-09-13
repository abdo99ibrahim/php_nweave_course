<html>
    <head>
        String Function
    </head>
    <body>
        <?php
        $first = "first";
        $second = " second";
        $third = $first;
        $third .= $second;
        echo "<h1> $third </h1>";
        ?>
        <br>
        Lowercase: <?php echo strtolower($third); ?> <br>
        Uppercase: <?php echo strtoupper($third); ?> <br>
        uppercase first: <?php echo ucfirst($third); ?> <br>
        uppercase words: <?php echo ucwords($third); ?> <br>
        <br>
        length: <?= strlen($third);?><br>
        trim: <?= "A".trim("B C D"). "E";?><br>
        find: <?= strstr($third,"first");?><br>
        replace by string: <?= str_replace("second","third",$third);?><br>
        <br>
        Explain trim <br>
        <?php
        $str = "I Love Backend";
        echo var_dump($str)."<br>" ; // string(14) "I Love Backend"

        $str = "  I Love Backend  ";
        echo var_dump($str)."<br>" ; // string(18) " I Love Backend "

        $trimmed = trim($str);
        echo var_dump($trimmed)."<br>";

        $leftTrimmed = ltrim($str);
        echo var_dump($leftTrimmed)."<br>"; // string(16) "I Love Backend "

        $rightTrimmed = rtrim($str);
        echo var_dump($rightTrimmed)."<br>"; // string(16) " I Love Backend"

        $trimmed = trim($str,"I ");
        echo $trimmed;
        ?>
        <br>
        <br>
        Repeat:<?= str_repeat($third,2)."<br>"?>
        Substring:<?= substr($third,1,3)."<br>"?>
        Find Postion: <?= strpos($third,"second")."<br>"; ?>
        Find Character: <?= strchr($third,"f")."<br>"; ?>
    </body>
</html>