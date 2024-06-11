
<?php

    session_start();

    
    echo"Se ha superado el tiempo de espera y la session ".$_SESSION['id']. " a sido cerrada.";
    session_destroy();



?>