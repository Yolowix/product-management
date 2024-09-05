# Prérequis au lancement

- php8.2
- composer
- symfony7.1

# Initialisation du projet

- Faire un `composer install`, pour installer toutes les librairies

# BDD

- Changer l'url de la bdd dans le `.env` si besoin ou se baser dessus  
  *(Attention : si vous utilisez PostgreSQL, il faut activer l'extension dans le `php.ini`, faire un `php --ini` dans le terminal 'pdo_postgresql')*
- Une fois l'url correcte et la bdd créée, exécutez la commande suivante pour exécuter les migrations :
  ```bash
  php bin/console doctrine:migration:migrate

# Lancement du projet

- Faire un `symfony server:start` pour lancer le projet

# Information supplémentaire

L'identifiant administrateur est `admin` et le mot de passe `root`.
