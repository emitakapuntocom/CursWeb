<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monos escritores</title>
</head>
<body>
    <?php

    $pal=(isset($_POST['palabras']) && $_POST["palabras"] != "")? $_POST['palabras'] : "No llenaste este campo";

    $random = rand(1,1000000);

    echo '
    <form>
        <table border="1" widht="100" align="center">
            <thead>
                <tr>
                    <th><br>Libro número: '.$random.'<br><br></th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td align="center">
        ';
        function get_random_string($length = 80){
        $abece = array("b","c","d","f","g","h","j","k","l","m","n","q","p","r","s","t","v","w","x","y","z","B","C","D","F","G","H","J","K","L","M","N","P","Q","R","S","T","V","W","X","Y","Z","a","e","i","o","u","A","E","I","O","U","1","2","3","4","5","6","7","8","9","0");    

        srand((double)microtime()*1000000);
    

        $maxgen = $length/2;
        $gene = "";
        
        for($i=1;$i<=$maxgen;$i++)
            $gene .= $abece[rand(0,count($abece)-1)];
           // $gene .= $pal[rand(0,count($pal)-1)];
        
        

        if(($length % 2) == 1) $gene.= $abece[rand(0,count($abece)-1)];

        return $gene;
        }
        
        $alee= 0;

        while($alee!=1)
        {
            $alee=rand(1,10);
            if($alee!=8)
            {
                echo get_random_string(320);
                echo '<br>';
            }
            else 
            {
                shuffle($alee);
                foreach ($alee as $palla)
                {
                echo $palla;
                }
                $impreso=1;
            }
        }

        $impreso=0;

        while($impreso!=1)
        {
            $palabrita=rand(1,10);
            if($palabrita!=7)
            {
                echo get_random_string(320);
                echo '<br>';

            }
            else 
            {
                echo $pal;
                $impreso=1;
            }
        }

        $after=0;

        while($after!=1)
        {
            $palabrita=rand(1,10);
            if($palabrita!=6)
            {
                echo get_random_string(320);
            }
            else
            {
                $after=1;
            }
            echo '<br>';
        }

    echo   '
                </td>
            </tr>
            </tbody>
        </table>';
        
    echo '
    </form>';


    ?>
</body>
</html>
