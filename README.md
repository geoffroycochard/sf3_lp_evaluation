evaluation
==========

Dans un Bundle ContactBundle, nous voulons gérer des Contacts attachés à une organisation.
- Avoir un liste de contact avec le nom et l'organisation.
- Une vue d'édition.
- Une vue de visualisation rendant visible toutes les informations.

L'entité contact porte les attributs suivant :
- firstname
- lastname
- phone
- organisation (relation n:1) **disponible dans AppBundle**

Des fixtures sont disponibles pour Organization via ```AppBundle/DataFixtures/ORM/LoadFixtures.php```
Pour les charger :
```
bin/console doctrine:fixtures:load --append -e dev
```
