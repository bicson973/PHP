<!-- 
    La programmation orienté objet
    
    Inconvéniants : 
    - Techniquement, on ne peut rien faire de plus avec l'orienté objet qu'avec le procédural. 
    - En général, l'approche orienté objet est moins intuitive pour l'esprit humain. 
    - Légère perte de performance. 

    Avantages :
    - Organisation du code sous forme de classe (objets) et cela va nous aider à nous retrouver dans notre code = développer plus vite.

    Exemple : 
    - Des models pour l'accès aux données. 
    - Des controllers pour les différentes actions (ajouter, supprimer ou maj d'un article). 
    - Des classes statiques pour toutes les fonctionnalités utilitaire.

    - Sécurité dans le code avec l'encapsulation : 
    Cela va nous permettre de sécuriser le code vis a vis d'éventuelles erreurs que l'on pourrait commettre. 
    
    Exemple : Ne pas modifier une variable, au risque de casser le code. 

    Réutilisation du code via l'héritage :
    - Cela va nous permettre la réutilisation de notre code et son évolution. 

    Exemple : Un model et ses enfants

        class felin {
            public $taille; 
            public $pelage;
            public $age;
            // Ici on a des variables qui sont en réalités des propriétés au sein d'une class. 
        }

        class chat extends felin {
            public function miauler(){ // Au sein d'une class les fonctions sont appelés méthodes
                return 'miaou'; 
            }
        }

        $chat1 = new Chat(); // On fait une instance de la class chat avec le mot clé new, on obtient alors un objet $chat1. 

        $chat1->taille = '20cm'; // Pour accéder au propriétés ou aux méthodes on utilise '->'
        
        echo $chat1->taille; // renvoie 20cm / ici on récupère la propriété $taille qui se trouve pourtant dans la class Felin et pas dans Chat => c'est l'héritage grâce au mot clef 'extends'

        $chat1->miauler(); // retourne: miaou; 

    Contrôle du code: l'abstraction et les interfaces
        - Un termetechnique qui signifie que l'on veut obliger certaines classes à implémenter telle propriété ou telle méthode.

        interface griffeur {
            public function griffer(); 
        }

        class chat extends felin implements griffeur {
            public function miauler(){ // Au sein d'une class les fonctions sont appelés méthodes
                return 'miaou'; 
            }

            public function griffer(){
                return 'griffer';
            }
        }
-->


<?php

$nom = 'Dupont'; 
// je declare une variable, qui contient une chaine de caratere.
$prenom = 'Celine';
$age = 30; 
// je declare une variable, qui contient un number.

$nom2 = 'Wayne';
$prenom2 = 'Bruce';
$age2 = 54; 

function presentation($nom, $prenom, $age) { 
// Je crée une fonction présentation(à l'intérieur je place les variables en parametres)
    print_r("Bonjour je m'appelle $nom $prenom et j'ai $age ans. <br>"); 
    // Je lui dit la tâche à accomplir. 
}
presentation($nom, $prenom, $age);
presentation($nom2, $prenom2, $age2);
// J'appel ma fonction

?>

