<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CoursPHP - Suresnes 2021/2022</title>
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
    
  </head>
  <body>
    <header class="container-fluid bg-light">
      <h1 class="display-4">CoursPHP - Les variables</h1>
      <p class="lead">PHP : Les variables</p>
      <?php echo "<p>Exemple de constante PHP >>> Chemin absolu du fichier en cours : ".__FILE__."</p>"; ?>
    </header>

    <div class="container bg-white">
        <section class="row g-2 p-2">
          <div class="col-md-6">
                <h2>Les variables</h2>
                <p>
                    Chaque variable possède un identifiant particulier, qui commence toujours par le caractère dollar ($) suivi du nom de la variable. Les règles de création des noms de variable sont les suivantes :
                </p>
                <li>
                    Le nom commence par un caractère alphabétique, pris dans les ensembles [a-z], [A-Z] ou par le tiret du bas 
                </li>
                <li>
                    Les caractères suivants peuvent être les mêmes plus des chiffres.
                </li>
                <li>
                    La longueur du nom n’est pas limitée, mais il convient d’être raisonnable sous peine de confusion dans la saisie du code. Il est conseillé de créer des noms de variable le plus « parlant » possible. En relisant le code contenant la variable $nomclient, par exemple, vous comprenez davantage ce que vous manipulez que si vous aviez écrit $x ou $y.
                </li>
          </div>
          <!-- FIN COL  -->
        </section>
        <!-- FIN ROW  -->
            
    </div>
    <!-- fin container  -->
    <?php require_once '../inc/footer.inc.php'; ?> 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>