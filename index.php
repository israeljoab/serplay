<?php include("includes/header.php"); ?>

<h1 class="textoTopGrande">Podcasts SerPlay</h1>

<div class="gridViewContainer">

    <?php
      $cursoQuery = mysqli_query($conex, "SELECT * FROM cursos ORDER BY RAND() LIMIT 10");
      while($row = mysqli_fetch_array($cursoQuery)) {

           
          
        echo "<div class='gridViewItem'>
                <a href='curso.php?id=" . $row['id'] . "'>
                  <img src='" . $row['caminhoCapa'] . "'>

                  <div class='gridViewInfo'>"
                      . $row['titulo'] .
                  "</div>
                </a>
        
            </div>";



      }

    ?>

</div>

<?php include("includes/footer.php"); ?>
