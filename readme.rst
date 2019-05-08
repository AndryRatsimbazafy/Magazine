1-Prérecquis:
	-Wamp server (UwAmp 2.2.1 dans mon cas) avec:
		-php 5.2.25 minimum
		-MySql 5.6.11 minimum
		-Apache
		
2-Installation en mode local:
	-Ouvrir l'archive que vous venez de télécharger
	-Copier le dossier dans l'archive dans le répertoire www\ de votre serveur wamp
	-Importer la base de donnée script_base_magazine.sql dans votre MySql local
	-Editer le fichier config.php qui strouve dans application\config\ et modifier la ligne 26 qui est:
		$config['base_url'] = 'http://localhost:70/Magazine/'; en 
		$config['base_url'] = 'http://localhost/[le port de votre apache]/[Nom du dossier contenant le projet dans www\]/';

3-Démarrage:
	-Ouvrir votre navigateur et taper l'url: http://localhost/[le port de votre apache]/[Nom du dossier contenant le projet dans www\]/
	ou lancer le projet depuis votre serveur wammp
