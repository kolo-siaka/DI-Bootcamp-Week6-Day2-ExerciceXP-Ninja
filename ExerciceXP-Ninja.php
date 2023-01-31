<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercice XP Ninja</title>
</head>
<body>
      <?php 
         
         function fact($n){

                if($n <= 1){
                    return 1;    }
               else{
                    return $n * fact($n - 1); }
                            }

        $i = 7 ;
        $factorielle = fact($i);
        echo "Le factorielle de {$i} :",$factorielle;


       ?>
</body>
</html>