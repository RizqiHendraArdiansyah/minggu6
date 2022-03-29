<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>        
        <table>
        <?php
            $hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
            $bulan = "Maret";
            $tahun = 2022;
            $x = 28;
            $y = 1;
            echo "<h2>$bulan&emsp; &emsp; &emsp; &emsp;  &emsp; &emsp; $tahun &emsp;  &emsp; &emsp; &emsp; &emsp; &emsp;</h2>";
            for($i = 1; $i <= 1; $i++) {
                echo "<tr>";
                for($j = 0; $j < 7; $j++) {
                    echo "<td>". $hari[$j] ."</td>";
                }
            }
            echo "<br>";
            
            for($i = 1; $i <= 5; $i++) {
                echo "<tr>";
                for($j = 1; $j <= 7; $j++) {
                    if($x >= 29) {
                        echo "<td>". $y ."</td>";
                        $y++;
                    } else {
                        echo "<td>". $x ."</td>";
                        $x++; 
                    }
                    if($y == 32) {
                        break;
                    }
                }
            }
        ?>
        </table>
    </body>
</html>