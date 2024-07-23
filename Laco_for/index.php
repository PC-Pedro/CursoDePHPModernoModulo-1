<?php
for ($i=1; $i <= 1000; $i++) {
   
    $i = $i * 0.10;

   if($i % 2 != 0 || $i < 1) {
    echo "$i é impar" ."<br>";
   }
   else {
    echo "$i é par" ."<br>";
   }
}
?>