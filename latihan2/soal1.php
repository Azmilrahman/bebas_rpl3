<fieldset>
<?php
    echo"<h2>Perulangan While</h2>";

    $i =1;
    while ( $i<= 10) {
    echo $i."</br>";
    $i++;
    }
    echo "<br>";
    $i =10;
    while ($i>=1) {
    echo "$i"."</br>";
    $i--;
    }
    echo "<br>";

    $j =1;
    while($j <= 10){
        echo "<br>";
        $k = $j;
        while($k <=10){
            echo"$k ";
            $k++;
        }
        $j++;
    }
    ?>
    </fieldset>

    <fieldset>
    <?php
    echo"<hr>";
    echo"<h2>Perulangan Do While</h2>";

    $a = 1;
    do{
        echo "$a <br>";
        $a++;
    }while ($a <=10);

    echo "<br>";

    $b = 10;
    do{
        echo "$b <br>";
        $b--;
    }while ($b >=1);


    echo "<br>";
    
    $c=0;
    do{
        $d=$c;
        do{
            echo"* ";
            $d++;
        }while($d <= 10);
        echo "<br>";
        $c++;
    }while ($c<=10);
    ?>
    
