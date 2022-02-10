<?php

interface travailleur {
    public function travailler();
}

class Employe implements travailleur {
    public $nom;
    public $prenom;
    /* les propriétés de la class */
    protected $age;
    /* une propriété privée n'appartient qu'à la class */

    public function __construct($nom, $prenom, $age){
    /* la fonction __construct est une fonction magique de PHP, elle s'exécute automatiquement à l'instanciation de la class */

        $this->nom = $nom;
        /* $this->nom fait référence à la propriété de notre class et $nom est le paramètre attendu */
        $this->prenom = $prenom;
        $this->setAge($age);
    }

    // les setter et les getter (accesseurs et mutateurs) permettent d'accéder à nos propriétés privés depuis l'extérieur de la classe
    public function setAge($age){
        if(is_int($age) && $age >= 16 && $age <= 100){
            $this->age = $age;
        }else{
            die('Erreur : âge doit être un nombre entier entre 16 et 99');
        }
    }

    public function getAge() {
        return $this->age;
    }

    /* Ici nous avons une fonction dite méthode de notre class */
    public function presentation() {
        echo "<p>Bonjour, je m'appelle $this->nom $this->prenom et j'ai $this->age ans.</p>";
    }
    /* Ici grâce au $this, nous n'avons pas besoin de mettre les variables en parmaètres */
}

class Patron extends Employe {
    public $salaire; //On surchage la class avec une nouvelle propriété

    public function __construct($nom, $prenom, $age, $salaire){
        parent::__construct($nom, $prenom, $age);
        $this->salaire = $salaire;
    }

    public function riche(){ // Ici on surchage une nouvelle méthode
        echo 'Je suis blindé';
    }

    public function presentation(){
    // Ici nous redéfinissons la méthode presentation() de Employe
        print_r("Bonjour je m'appelle $this->nom, $this->prenom, et j'ai $this->age ans et un salaire de $this->salaire, {$this->riche()} <br>");
    }
}

$employe1 = new Employe('Parker', 'Peter', 20);

$employe2 = new Employe('Durant', 'Juliette', 76);

$patron = new Patron('Etoo', 'Camara', 56, 15000);

function fairetravailler($objet){
    print_r("Travail en cours: {$objet->travailler()}");
}

// $employe1->nom = 'Parker';
// $employe1->prenom = 'Peter';
// $employe1->age = 20;
/* J'initialise les variables d'employé1 */

// $employe2->nom = 'Durant';
// $employe2->prenom = 'Juliette';
// $employe2->age = 76;
/* J'initialise les variables d'employé2 */

$employe1->presentation();
$employe2->presentation();
$patron->riche();
/* J'appelle la fonction presentation() pour mes objets employe1 et employe2 */
?>