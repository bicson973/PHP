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
      <h1 class="display-4">CoursPHP - Introduction</h1>
      <p class="lead">PHP : Php Hypertext Preprocessor</p>
    </header>

    <div class="container bg-white">
        <section class="row g-2 p-2">
          <div class="col-md-4">
            <h4>1/ Réaliser un site dynamique</h4>
            <p>Pour réaliser une site dynamique nous allons aborder les points suivants : </p>
            <ul>
              <li>La syntaxe et les caractéristiques du langage PHP (v7)</li>
              <li>Les notions essentielles du langage SQL permettant la gestion d'une BDD et la réalisation des requêtes de base</li>
              <li>... et les moyens d'y accéder à l'aide de fonctions spécialisées de PHP (ou d'objet)</li>
              <li>
                <!-- mon 1er passage php et un "echo" -->
                <?php echo "<strong>Mon premier texte fait en PHP</strong>"; ?>
              </li>
            </ul>
          </div>
          <!-- fin col -->

          <div class="col-md-4 p-1 border border-warning">
            <h4>2/ Qu'est-ce que PHP </h4>
            <p>PHP permet de créer des pages interactives ; une page interarctive permet à un visiteur de saisir des données personnelles qui sont ensuite transmises au serveur, où elles peuvent rester stockées dans une BDD pour être diffusées vers d'autres utilisateurs. Un utilisateur peut par exemple s'enregistrer et retrouver une page adaptée à ses besoins lors d'une visite utlérieure. Il peut aussi envoyer des e-mails et des fichiers sans avoir à passer par son logiciel de messagerie. En associant toutes ces caractéristiques il est possible de créer aussi bien des sites de diffusion et de collecte d'informations que des sites e-commerce, de rencontre ou des blogs. </p>
            
          </div>
          <!-- fin col -->

          <div class="col-md-4 p-1 border border-danger">
          <h4>3/ Rappel sur les BDD </h4>
          <p>Pour contenir la masse d'informations collectées, PHP s'appuie généralement sur une BDD, le plus souvent MySQL mais aussi SQLite, et sur des serveurs Apache. PHP, MySQL et Apache forment le trio ultradominant sur les serveurs Internet. Quand ce trio est associé à un serveur Linux on parle de LAMP. PHP est utilisé par les 3/4 des sites de la planète</p>
          <p>Pour utiliser PHP sur un PC on utilisera XAMPP mais aussi Laragon, sur Mac on privilégiera MAMP</p>
          </div>
          <!-- fin col -->
        </section>
        <!-- fin row  -->
        

        <section class="row m-2 p-2">
          <div class="col-md-4 p-1 border border-danger">
          <p>Avec le code suivant écrit dans un fichier nommé 02_infos.php placé sur le serveur d'évaluation on obtient toutes les infos sur le php exécuté dans ce serveur.</p>
          <code>
          &lt;?php <br>
            phpinfo();  // ceci est un commentaire<br>
          ?><br>
          </code>
          <a class="btn btn-secondary btn-sm mb-2" href="02_infos.php">PHP infos </a>
            
          </div>
          <!-- fin col -->

          <div class="col-md-4 p-1 border border-danger">
            <p>La fonction date() avec ses arguments qui nous donne la date et l'heure du serveur </p>
            <?php //echo date('d/m/Y - H:m:s'); ?>
            <?php 
              echo "<h5> Date du jour : ". date('d/m/Y') ."</h5>"; 
              echo "<p>Bienvenue sur le cours PHP</p>";
            ?>
            
          </div>
          <!-- fin col -->
          
          <div class="col-md-4 p-1 border border-danger">
            <h4>Le cycle de vie d'une page PHP</h4>
            <ol>
              <li>Envoie d'une requête HTTP (Hyper Text transfer Protocol) par le navigateur client vers le serveur du type http://www.monsite.fr/infos.php</li>
              <li>Interprétation par le serveur du code PHP contenu dans la page appelée </li>
              <li>Envoi par le serveur d'un fichier dont le contenu est purement HTML</li>

              <p><a href="../00-pages/01_page.php">Ici un lien vers une autre page PHP</a></p>
            </ol>
            
          </div>
          <!-- fin col -->
        </section>
        <!-- fin row  -->

        <section class="row p-2">
          <div class="col-md-10">
            <h3>Inclure des fichiers externes en PHP</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Fonction</th>
                  <th>Description</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td><code>include("../inc/init.inc.php")</code></td>
                  <td>Lors de son interprétation par le serveur, cette ligne est remplacée par tout le contenu du fichier précisé en paramètre, il faut fournir le nom et l'adresse complète ; en cas d'erreur, par ex. si le fichier n'est pas trouvé , include() ne génère qu'une alerte (un warning) et le script continue</td>
                </tr>
                <tr>
                  <td><code>require("../inc/init.inc.php"></code></td>
                  <td>Require() a désormais un comportement identique à include(), à la différence près qu'en cas d'erreur, require() provoque une erreur "fatale" (fatal error) et met fin au script</td>
                </tr>
                <tr>
                  <td><code>include_once("../inc/head.inc.php")
                    <br><br>require_once("../inc/body.inc.php")</code></td>
                  <td>Ces fonctions ne sont pas exécutées plusieurs fois, même si on les trouve dans une boucle ou si elles ont été exécutées une fois dans le code qui précède.</td>
                </tr>
              </tbody>

            </table>
          </div>
          <!-- fin col -->
        </section>
        <!-- fin row  -->
        <div class="row">
          <div class="col-md-6">
            <h2>TitreNiveau2</h2>
          </div>
          <div class="col-md-6">
            <h2>TitreNiveau2</h2>
          </div>
          <!-- fin col -->
        </div>
        <!-- fin row -->

    </div>
    <!-- fin container  -->
    <?php require_once '../inc/footer.inc.php'; ?> 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>