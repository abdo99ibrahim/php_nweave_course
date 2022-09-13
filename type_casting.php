<html lang="en">
  <head>
  </head>
  <body>
    
    Type Juggling<br />
    <?php $count = "2 cats"; ?>
    Type: <?php echo gettype($count); //string ?><br /> 
    
    <?php $count += 3; ?>
    Type: <?php echo gettype($count); //integer ?><br />

    <?php $cats = "I have " . $count . " cats."; ?>
    Cats: <?php echo gettype($cats);  //string ?><br />
    <br />

    <!-- Set Type -->
    <?php settype($count, "integer"); ?>
    count: <?php echo gettype($count); //integer ?><br />

    <?php $count2 = (string) $count; ?>
    count: <?php echo gettype($count); //integer ?><br />
    count2: <?php echo gettype($count2); //string ?><br />
    <br />

    <?php $test1 = 3; ?>
    <?php $test2 = 3; ?>
    <?php settype($test1, "string"); ?>
    <?php (string) $test2; ?>
    test1: <?php echo gettype($test1); //string ?><br />
    test2: <?php echo gettype($test2); //integer ?><br />
  </body>
</html>
