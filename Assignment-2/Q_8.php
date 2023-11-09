<?php
function check_vote() {
    $name = "Naruto";
    $age = 29;
    if ($age >= 18) {
        echo $name . ", you are Eligible For Vote";
    } else {
        echo $name . ", you are Not Eligible for vote. ";
    }
}
check_vote(); 
?>