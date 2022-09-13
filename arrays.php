<html>

<head>
</head>

<body>
    <?php

    $numbers = array(4, 8, 15, 16, 23, 42);
    echo $numbers[0];
    ?>
    <br />

    <?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?>
    <?php echo $mixed[2]; ?><br />
    <?php //echo $mixed[3]; 
    ?><br />
    <?php //echo $mixed 
    ?><br />

    <?php echo $mixed[3][1]; ?><br />

    <!-- Push -->
    <?php $mixed[2] = "cat"; ?>
    <?php $mixed[4] = "mouse"; ?>
    <?php $mixed[] = "horse"; ?>
    <?php array_push($mixed, "FFF"); ?>

    <pre>
    <?php echo print_r($mixed); ?>
    </pre>

    <?php
    //PHP 5.4 added the short array syntax.
    $array = [1, 2, 3];
    ?>
    <!-- ======================================================= -->
    <h1>Associative Array</h1>
    <?php $assoc = array("first_name" => "Kevin", "last_name" => "Skoglund"); ?>
    <?php echo $assoc["first_name"]; ?><br />
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

    <?php $assoc["first_name"] = "Larry"; ?>
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

    <?php // echo $assoc[0]; 
    ?><br />

    <?php $numbers = array(4, 8, 15, 16, 23, 42); ?>
    <?php $numbers = array(0 => 4, 1 => 8, 2 => 15, 3 => 16, 4 => 23, 5 => 42); ?>
    <?php echo $numbers[0]; ?>

    <!-- ======================================================= -->
    <h1>Array Functions</h1>

    <?php $numbers = array(8, 23, 15, 42, 16, 4); ?>

    Count: <?php echo count($numbers); ?><br />
    Max value: <?php echo max($numbers);   ?><br />
    Min value: <?php echo min($numbers);   ?><br />
    <br />
    <pre>
    Sort:          <?php sort($numbers);
                    print_r($numbers); ?><br />
    Reverse sort: <?php rsort($numbers);
                    print_r($numbers); ?><br />
    </pre>
    <br />
    Implode: <?php echo $num_string = implode(" * ", $numbers); ?><br />
    Explode: <?php print_r(explode(" * ", $num_string)); ?><br />
    <br />

    15 in array?: <?php echo in_array(15, $numbers); // returns T/F 
                    ?><br />
    19 in array?: <?php echo in_array(19, $numbers); // returns T/F 
                    ?><br />

</body>

</html>