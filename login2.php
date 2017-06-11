       <?php
       
    if(isset($_POST['pseudo']) && (isset($_POST['mdp']))){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = htmlspecialchars(md5($_POST['mdp']));

        if (is_file('utilisateur/'.$pseudo.'.txt')){
            $contenu = file_get_contents('utilisateur/'.$pseudo.'.txt');
            if ($contenu == $mdp){
                session_start();
                $_SESSION['nom'] = $pseudo;
                echo 'connecté';
                header("location:create.php");
            } else {
                echo 'pas connecté';
            }

        } else {
            echo 'l\'utilisateur '.$pseudo.' n\'existe pas';
        }
    } else {
        echo 'pas de données';
    }

        ?>