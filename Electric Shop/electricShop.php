function getMoneySpent($keyboards, $drives, $b) {
    /*
     * Write your code here.
     */
    $rem = $b;
    foreach($keyboards as $kb) {
      foreach($drives as $dr) {
          $amt = $kb + $dr;
          if($amt > $b) {
              continue;
          }
          $rem = $b - $amt < $rem ? $b - $amt : $rem;
        }  
    }
    
    return $rem != $b ? $b - $rem : -1;
}
