<table border = 1>
    <?php 
    $a = 0; 
    $b = 0;
    $c=0;
    for($j = 64;$j > 0;$j--){
    do{
        if($c%2==0){
        ?>
            <tr>
            <?php do{ 
                if($j%2==0){?>
                    <td style="color: #ffffff;background-color: #000000"><?php echo($j); $j--?></td>
                    <?php 
                    $a++;
                    $b++;
                    }
                    else{?>
                    <td style="color: #000000; "><?php echo($j); $j--?></td>
                    <?php 
                    $a++;
                    $b++;}?>
            <?php }while($b<8);
                $b=0;
                ?>
            <tr><?php
            $c++;
            }
            else{
                ?>
            <tr>
            <?php do{ 
                if($j%2==0){?>
                    <td style="color: #000000"><?php echo($j); $j--?></td>
                    <?php 
                    $a++;
                    $b++;
                    }
                    else{?>
                    <td style="color: #ffffff;background-color: #000000"><?php echo($j); $j--?></td>
                    <?php 
                    $a++;
                    $b++;}?>
            <?php }while($b<8);
                $b=0;
                ?>
            <tr><?php
            $c++;
            }
    }while($a <= 63); 
}?>
</tr>
</table>
