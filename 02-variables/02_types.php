<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CoursPHP - 02 types de données</title>
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
    
  </head>
  <body>
    <header class="container-fluid bg-light">
      <h1 class="display-4">CoursPHP - 02 Les types de données</h1>
      <p class="lead">PHP : Les types de données</p>
      <?php echo "<p>Exemple de constante PHP >>> Chemin absolu du fichier en cours : ".__FILE__."</p>"; ?>
    </header>
    <div class="container bg-white">
        <section class="row g-2 p-2">
            <div class="col-md-6">
                <ul>
                    <li>Les types de base :</li>
                    <ul>
                        <li>Entiers, avec le type integer, qui permet de représenter les nombres entiers dans les bases 10, 8 et 16.</li>
                        <li>Flottants, avec le type double ou float, au choix, qui représentent les nombres réels, ou plutôt décimaux au sens mathématique. </li>
                        <li>Chaînes de caractères, avec le type string.</li>
                        <li>Booléens, avec le type boolean, qui contient les valeurs de vérité TRUE ou FALSE (soit les valeurs 1 ou 0 si on veut les afficher).</li>
                    </ul>
                    <li>Les types composés :</li> 
                    <ul>
                        <li>Tableaux, avec le type array, qui peut contenir plusieurs valeurs.</li>
                        <li>Objets, avec le type object.</li>
                    </ul>
                    <li>Les types spéciaux</li>
                    <ul>
                        <li>Objets, avec le type object.</li>
                        <li>Type null.</li>
                    </ul>
                </ul>
            </div>
            <!-- FIN COL  -->
        </section>
        <!-- FIN ROW  -->
    </div>