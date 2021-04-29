<?php

include 'Speedometer.php';

echo 'POO6 <br>' ;

echo 'Conversion de 10 km en mile(s) : ' ; echo number_format(Speedometer::convertKMtoMiles('10'), 2, ',', ' ') ; echo ' miles';
echo '<br>' ;
echo 'Conversion de 10 miles en km(s) : ' ; echo number_format(Speedometer::convertMilestoKM('10'), 2, ',', ' ') ; echo ' km';