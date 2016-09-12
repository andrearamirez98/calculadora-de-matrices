<?php
            $operacion = $_POST["opcion"];
            $opc = $operacion;

$numeroN = $_POST["mult"];
$numn = intval($numeroN);

// matriz A

    $nX1 = $_POST["x1"];
        $numX1 = intval($nX1);

    $nX2 = $_POST["x2"];
        $numX2 = intval($nX2);

    $nX3 = $_POST["x3"];
        $numX3 = intval($nX3);

    $nX4 = $_POST["x4"];
        $numX4 = intval($nX4);

    $nX5 = $_POST["x5"];
        $numX5 = intval($nX5);

    $nX6 = $_POST["x6"];
        $numX6 = intval($nX6);

    $nX7 = $_POST["x7"];
        $numX7 = intval($nX7);

    $nX8 = $_POST["x8"];
        $numX8 = intval($nX8);

    $nX9 = $_POST["x9"];
        $numX9 = intval($nX9);


//suma 
        switch ($opc) {

        case 'deter':
         $x = $numX1*$numX5*$numX9 + $numX4*$numX8*$numX3 + $numX7*$numX2*$numX6;
        $z = $x - $numX3*$numX5*$numX7 - $numX6*$numX8*$numX1 - $numX9*$numX2*$numX4;
        echo $z;
        break;

	case 'inversa':

/*    $inre1 = $numX5*$numX9;
    $inre2 = $numX8*$numX6;
    $resul1 = $inre1-$inre2;
    echo $resul1;
    $inre3 = $numX4*$numX9;
    $inre4 = $numx7*$numX6;
    $resul2 = $inre3-$inre4;
    echo $resul2;
    $inre5 = $numX4*$numX8;
    $inre6 = $numX7*$numX5;
    $resul3 = $inre5-$inre6;
    echo $resul3;
    $inre7 = $numX2*$numX9;
    $inre8 = $numX8*$numX3;
    $resul4 = $inre7-$inre8;
    echo $resul4;
    $inre9 = $numX1*$numX9;
    $inre10 = $numX7*$numX3;
    $resul5 = $inre9-$inre10;
    echo $resul5;
    $inre11 = $numX1*$numX8;
    $inre12 = $numX7*$numX2;
    $resul6 = $inre11-$inre12;
    echo $resul6;
    $inre13 = $numX2*$numX6;
    $inre14 = $numX5*$numA3;
    $resul7 = $inre13-$inre14;
    echo $resul7;
    $inre15 = $numX1*$numX6;
    $inre16 = $numX4*$numX3;
    $resul8 = $inre15-$inre16;
    echo $resul8;
    $inre17 = $numX1*$numX5;
    $inre18 = $numX4*$numX2;
    $resul9 = $inre17-$inre18;
    echo $resul9;
    // OPERACIÓN DE NEGACIÓN
    $resul1 = $resul1*1;
    $resul4 = $resul4*(-1);
    $resul7 = $resul7*1;
    $resul2 = $resul2*-1;
    $resul5 = $resul5*1;
    $resul8 = $resul8*-1;
    $resul3 = $resul3*1;
    $resul6 = $resul6*-1;
    $resul9 = $resul9*1;
    */
    break;


//Transpuesta  

	case 'trans':
			echo $numX1.", ".$numX4.", ".$numX7."<br>";
            echo $numX2.", ".$numX9." ,".$numX8."<br>";
            echo $numX3.", ".$numX6.", ".$numX5."<br>";
              

    	break;
     case 'mul':
        $re1 = $numn*$numX1;
        $re2 = $numn*$numX2;
        $re3 = $numn*$numX3;
        $re4 = $numn*$numX4;
        $re5 = $numn*$numX5;
        $re6 = $numn*$numX6;
        $re7 = $numn*$numX7;
        $re8 = $numn*$numX8;
        $re9 = $numn*$numX9;
        echo $re1.", ".$re2." ,".$re3."<br>";
        echo $re4.", ".$re5.", ".$re6."<br>";
        echo $re7.", ".$re8.", ".$re9."<br>";
        
    break;
}
 ?>   
 