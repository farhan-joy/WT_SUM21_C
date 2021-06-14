<html>
    <body>
        <?php
        $len = 70;
		
        $wid = 70;
		
        $perimeter = 2*($len+$wid);
        $area = $len*$wid;
        echo "Perameter: ". $perimeter."<br>";
        echo "Area: ".$area."<br>";;
        if ($len == $wid){
            echo "the shape is a square.";
        }
        ?>
    </body>
</html>