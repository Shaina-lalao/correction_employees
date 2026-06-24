======================== Shaina ETU004733 ==============================

- **CE QUE J'AI MAINTENANT COMPRIS** :
    - ***Fonction.php** :
        - Prendre tous les departements sauf le departement actuel ou se trouve l'employee en utilisant <>
        - CONCAT : pour tout de suite concatener deux colonnes, on utilise cette fonction
        - DATEDIFF

- **CE QUE JE N'ARRIVE PAS A COMPRENDRE** :
    - ***Fonction.php** :
        - INNER JOIN : je n'ai pas bien compris a quoi il sert
        - %%%s%%
        -  $where = empty($conditions) ? '1=1' : implode(' AND ', $conditions);
    
    - urlencode
    - htmlspecialchars
    - trim
    - $nb_pages = (int)ceil($total / $par_page)
    - $results   = $submitted ? search_employees($dept_no, $name, $age_min, $age_max) : array()
    - FOREIGN KEY (emp_no)  REFERENCES employees   (emp_no)  ON DELETE CASCADE
 
======================== Andry ETU 004732 ==============================

inc 
  
  connection.php
  
    - c'est la connexion a la base de donnees 
    - on appelle la fonction dbconnect()
    - si aucune connexion n'existe, la fonction cree une connexion a la base de donnees 'employees'
    - si il y a une erreur de connexion, la page affiche un message d'erreur
    - si aucune connexion n'existe et qu'il n'y a pas eu d'erreur, alors on se connecte a la base et on definit l'encodage des caracteres (c'est pas oblige)

  functions.php

    function get_all_lines 
      - parcourt toutes les lignes
      - stocke chaque ligne dans un tableau
      - affiche le tableau 

    function get_one_line
      - recupere uniquement la premiere ligne avec mysqli_fetch_assoc()
      - retourne cette ligne

    function get_all_departments
      - recupere tous les departements avec leur numero, nom, nom du manager, nombre d'employes 
      - ** ce que j'ai pas compris ** la requete j'ai pas trop compris mais je comprends ce qu'elle fait 

      function get_jobs_stats 
        - ** j'ai pas compris **

      function execute_query 
        - execute une requete sans envoyer le resultat

      function get_current_department 
        - je pense que cette fonction retourne tous les departements sauf celui passe en parametres
        - ** j'ai pas compris le fonctionnement de la fonction **

      function get_one_line 
        - recupere les infos du departement en parametre 

      function add_department 
        - insere un nouveau departement dans la base 

      function update_department 
        - change le nom d'un departement 

      

