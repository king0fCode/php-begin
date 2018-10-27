<?php
class Car{

function moveWheels(){
    echo "wheels move";
}


}

if(method_exists('Car', 'moveWheels')) {
    echo "method exist";
}
else {
    echo "no it does not exist";
}

?>
