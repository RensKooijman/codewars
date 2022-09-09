<?php
function divisibleBy($numbers, $divisor) {
  foreach($numbers as $number){
    $divided = $number / $divisor;
    if(is_int($divided)){
      $all[]=+$number;
    }
  }
  return $all;
}
 public function testFixedTests() {
      $this->assertEquals([2, 4, 6], divisibleBy([1, 2, 3, 4, 5, 6], 2));
      $this->assertEquals([3, 6], divisibleBy([1, 2, 3, 4, 5, 6], 3));
      $this->assertEquals([0, 4], divisibleBy([0, 1, 2, 3, 4, 5, 6], 4));
    }
?>
