<?php
say_hello_loudly();
function say_hello_loudly(){
    echo "Hello World <br>";
}
$name = "Moamen";
function better_hello($greeting,$target,$punct){
    echo $greeting. " ".$target." ".$punct."<br>";
}
better_hello("Hello",$name,"!");
better_hello("Greeting",$name,"!!!");
better_hello("Hello",$name,null);


echo "<br><br>";

function chinese_zodiac($year) {
    switch (($year - 4) % 12) {
      case  0: return 'Rat';
      case  1: return 'Ox';
      case  2: return 'Tiger';
      case  3: return 'Rabbit';
      case  4: return 'Dragon';
      case  5: return 'Snake';
      case  6: return 'Horse';
      case  7: return 'Goat';
      case  8: return 'Monkey';
      case  9: return 'Rooster';
      case 10: return 'Dog';
      case 11: return 'Pig';
    }
  }
  
  $zodiac = chinese_zodiac(2013);
  echo "2013 is the year of the {$zodiac}.<br />";

  echo "2027 is the year of the " . chinese_zodiac(2027) . ".<br />";

// Mulitple Returns Values






 ?>