<?php

//Set the proper timezone 
    //Date was not displaying correctly becuase I added this...
date_default_timezone_set('America/New_York');

//Print the greeting to the page
echo "<p>Today is " . date('l, F j, Y');

?>