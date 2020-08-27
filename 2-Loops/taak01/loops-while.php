<html>
  <head>
   
  </head>
  <body>

    <?php
    	
        $leeftijd = 0;

        while($leeftijd <= 17){
         echo  "<ul> Ik ben $leeftijd jaar, dus ik mag nog niet stemmen </ul> ";
         $leeftijd++;
        }
        

        if($leeftijd >= 18){
          echo  " <ul> Ik ben 18 jaar oud dus ik heb stemrecht! </ul>";
        }
    ?>

  </body>
</html>