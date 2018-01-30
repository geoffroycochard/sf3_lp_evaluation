Evaluation
==========

### Description
Dans un Bundle ContactBundle, nous voulons gérer des Contacts.
- Avoir un liste de contact avec le nom et l'organisation.
- Une vue d'édition.
- Une vue de visualisation rendant visible toutes les informations.

L'entité contact porte les attributs suivant :
- firstname
- lastname
- phone
- organisation (relation n:1) **disponible dans AppBundle**

### Installation

***Récupération des sources***
```
$ git clone https://github.com/geoffroycochard/sf3_lp_evaluation.git
```

***Installation des vendors + parameters.yml***
```
$ composer install
```

-----
***Des fixtures sont disponibles pour Organization via*** 
```AppBundle/DataFixtures/ORM/LoadFixtures.php```

Pour les charger :
```
$ bin/console doctrine:fixtures:load --append -e dev
```
