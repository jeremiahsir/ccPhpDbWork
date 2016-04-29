<?php

for($i = 1; $i <= 300; $i++){

  if( ($i % 3 === 0) && ($i % 5 === 0) && ($i % 7 === 0)){
    echo "fizzbuzzwoof" . "<br>";
  }else if( ($i % 5 === 0) && ($i % 7 === 0) ){
    echo "buzzwoof" . "<br>";
  } else if( ($i % 3 === 0) && ($i % 7 === 0) ){
    echo "fizzwoof" . "<br>";
  } else if( ($i % 3 === 0) && ($i % 5 === 0) ){
    echo "fizzbuzz" . "<br>";
  } else if( ($i % 3 ) === 0){
    echo "fizz" . "<br>";
  } else if ( ($i % 5) === 0){
    echo "buzz" . "<br>";
  } else if(($i % 7 ) === 0){
    echo "woof" . "<br>";
  }

    else {
    echo $i . "<br>";
  }

}



 ?>
