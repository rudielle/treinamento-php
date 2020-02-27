<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Boletim</title>
   <link rel="stylesheet" href="normalize.css">
   <link rel="stylesheet" href="skeleton.css">
</head>

<body>
   <?php
   $nota1 = rand(0, 10);
   $status1 = 'blue';
   if ($nota1 < 6) {
      $status1 = 'red';
   }
   $nota2 = rand(0, 10);
   if ($nota2 >= 6) {
      $status2 = 'blue';
   } else {
      $status2 = 'red';
   }

   //operador ternario       
   $nota3 = rand(0, 10);
   $status3 = $nota3 >= 6 ? 'blue' : 'red';

   $nota4 = rand(0, 10);
   $status = 'blue';
   $status4 = $nota4 >= 6 ? 'blue' : 'red';



   $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
   ?>
   <div class="container">
      <h4>Boletim</h4>
      <table class="u-full-width">
         <thead>
            <tr>
               <th>Bimestre </th>
               <th>Nota</th>
            </tr>
         </thead>
         <tr>
            <td>1</td>
            <td>
               <span style="color: <?php echo $status1; ?>">
                  <?php echo $nota1; ?>
               </span>
            </td>
         </tr>

         <tr>
            <td>2</td>
            <td>
               <span style="color: <?php echo $status2; ?>">
                  <?php echo $nota2; ?>
               </span>
            </td>
         </tr>

         <tr>
            <td>3</td>
            <td>
               <span style="color: <?php echo $status3; ?>">
                  <?php echo $nota3; ?>
               </span>
            </td>
         </tr>

         <tr>
            <td>4</td>
            <td>
               <span style="color: <?php echo $status4; ?>">
                  <?php echo $nota4; ?>
               </span>
            </td>
         </tr>

</body>
<tfoot>
   <tr>
      <td>Média</td>
      <td>
         <?php
         $statusmedia = 'blue';
         if ($media < 6) {
            $statusmedia = 'red';
         } else if  ($media >= 6 and $media < 9) {
               $statusmedia = 'green';
           }else{
                $statusmedia = 'blue';
           }
          ?>
         <span style="color: <?php echo $statusmedia; ?>">
            <?php echo $media; ?>
         </span>
      </td>
   </tr>
</tfoot>


</table>
<p style="color: <?= $statusmedia ?>">
   <?php
   if ($media >= 6 and $media < 9) {
      echo 'Parabéns, você foi aprovado!' . PHP_EOL;
      
   }elseif ($media < 6) {
      echo 'Desculpe, você foi reprovado!'. PHP_EOL;
    
       
  }else {
          echo 'Parabéns, você foi aprovado com excelência!' . PHP_EOL;
  }
  

   ?>
</p>

</div>

</body>

</html>