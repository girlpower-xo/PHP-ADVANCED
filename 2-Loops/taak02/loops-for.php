<html>
  <head>
   
  </head>
  <body>

    <?php
    	for($x=0; $x < 18; $x++){
            echo " <ul> Ik ben $x jaar, dus ik mag nog niet stemmen </ul>" ;
        }
        
        if($x >= 17){
           echo " <ul> Ik ben 18 jaar oud dus ik heb stemrecht! </ul>";
        }
    ?>

  </body>
</html>