Création de la BDD nom de la BDD : boutique
la BDD comporte 4 tables
commandes details_commande membres produits

TABLE commandes id_commande id_membre montant date_enregistrement etat (enum : 'en cours de traitement', 'envoyé', 'livré')

TABLE details_commande id_detail_commande id_commande id_produit quantite prix

TABLE membres id_membre pseudo mdp nom prenom email civilite (enum, 'm', 'f') ville code_postal adresse statut // si on est admin ou client

TABLE produit id_produit reference categorie titre description couleur taille public (enum 'm', 'f', 'mixte') photo prix stock

donner schéma BDD

PAGE INSCRIPTION faire un formulaire qui servira à l'inscription d'un utilisateur