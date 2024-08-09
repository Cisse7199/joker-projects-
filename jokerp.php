<?php
// controle et verification des entrees de l utisateur
if (null !== ( $_POST["Envoie"])){
    if (null !== ($_POST["name"]) and null !== (["prenom"]) and null !==($_POST["ine"])){
        if (!empty($_POST["name"]) and !empty($_POST["prenom"]) and !empty($_POST["ine"])){
    
//controle des caracteres que l utilisateur entre
    $nom=htmlspecialchars($_POST["name"]);
    $prenom=htmlspecialchars($_POST["prenom"]);
    $ine=htmlspecialchars($_POST["ine"]);

        }
        else {
            echo "Veuillez entrer vos informations !!!";
        }
    }

}

//display of users´s entry 
    echo "<strong><h3>Voici les informations que vous avez entrer :</h3></strong>";

    echo "<strong><h4>Nom :"."<u>".$nom."</h4></strong>";
    echo "<strong><h4>Prenom :"."<u>".$prenom."</h4></strong>";
    echo "<strong><h4>ine :"."<u>".$ine."</h4></strong>";

 //server identifiants and database identifiants   

   $servername="localhost";
    $username="root";
    $userpassword="";
    $database="etudiant uvbf";

    //Establish connection of database with PDO

    //$connec= new mysqli($servername,$username,$userpassword,$database);
    $bd=new PDO("mysql:host=localhost;dbname=etudiant uvbf",'root','');
    /*$requette=$bd->prepare("INSERT INTO etudiant(nom,Prenom,ine) VALUES(?,?,?)");
    $requette->execute(array($nom,$prenom,$ine));
    if($requette){
        echo "connexion et enregistrement reussi";
    }*/


    // verification si l ine que l utilisateur a entre existe dans la base de donne
    $requette2=$bd->prepare("SELECT* FROM etudiant WHERE ine=?");
    $requette2->execute(array($ine));

    $control=$requette2->rowCount();

    //Affichage des messages d erreurs
    if($control==0){
        $message="Vous etes n etes pas inscrit a l uvbf";
        //echo $message;
    }
    else{
        $message="Vous etes bien inscrit a uvbf et vous aller recevoir vos identifiants"."<br>";  
        //echo $message;

        $download="Cliquer sur le lien bleu en bas  pour telecharger vos identifiants"."<br>";
    }
       //echo  "<a href=""> Telecharger mes identifiants </a>"
    
    //cursor->$connec.cursor();s
    //$cursor=$connec.cursor();

   // if($bd){
      //  echo "Connexion reussie";
   // }
    //if ($connec->connect_error){
       // die ("error :".$connec->connect_error());
   // }
    //echo "Connexion reussie"."<br>";

    //methode procedurale simple
    //$sql="INSERT INTO etudiant(ine,Nom,Prenom) VALUES('$ine','$nom','$prenom')";//{$ine},{$nom},{$prenom};
    //$test=mysqli_query($connec,$sql);
    //$test.update();
    //if (mysqli_query($connec,$sql)){
       // echo "Donnes bien enregistres";
   // }
    //$insert->execute(array($ine,$nom,$prenom));
    //$cursor=$connec.cursor();
    //$cursor.execute($insert);

    //insert->execute(array($ine,$nom,$prenom))






?>



<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="author" content="ILBOUDO R Narcisse">
            <meta name="description" content="formulaire de connexion">
            <meta name="keywords" content="ine, formulaire">
            <link rel="stylesheet" href="joker.css">
            <title>Page de connexion :</title>
        </head>
        <body>
            <!--<form method="post" action="jokerp.php">
                <fieldset class="fieldset">
                    <legend> Formulaire de connexion </legend>
                    <p>
                        <label style="font-size: 20px; font-weight:bold">Entrez votre nom :</label>
                        <input type="text"  name="name" required style="font-size: 20px; background: #318a7e;" class="inpu">
                        <p>
                            <label style="font-size: 20px; font-weight:bold">Votre prenom :</label>
                            <input type="text" name="prenom" required style="font-size: 20px; background:#318a7e" class="inpu">
                        </p>
                        <p>
                            <label for="" style="font-size: 20px; font-weight:bold">Votre ine :</label>
                            <input type="text" name="ine" required style="font-size: 20px; background:#318a7e" class="inpu">

                        </p>
                        <p>
                            <label></label>
                            <input type="submit" name="Envoie" value="Valider" style="background-color: green;font-size:30px;font-size:20px;">
                            <input type="reset" name="Annuler" value="Annuler" style="background-color: rgb(224, 34, 34);font-size:30px;font-size:20px;">
                        </p>
                        <br><b style="color: red;"><br>
                        //<?php
                        //echo $message;

                        //if ($download)
                       // ?><br><br>
                       </b>
                       <a href=""><b style="color:blue"><i>Telecharger les identifiants</i></b></a>
                    </p>
                </fieldset>
            </form>-->
            <br><b style="color: red;font-size:25px;font-weight:bold"><br>
                        <?php
                        echo $message;

                        if($control !==0 ){
                            echo $download;
                        }
                        ?>
                        <br><br>
                       </b>
                       <a href="C:\xampp\htdocs\jokerr\page de telechargement.html"><b style="color:blue"><i><h3>
                        <?php
                        
                        if($control !==0 ){

                         //   header("Location:C:\xampp\htdocs\jokerr\page de telechargement.html");
                            //switch ($ine) do:
                               // N01745474 : echo "telechargez vos identifiants sur ce lien"
                                //N01745475 : echo "telechargez vos identifiants sur ce lien"
                                //N01745476 : echo "telechargez vos identifiants sur ce lien"
                                //N01745477 : echo "telechargez vos identifiants sur ce lien"
                        echo "Acceder a la page de telechargement de vos identifiants";
                        }
                        ?>

                       </h3> </i></b></a>

                        
                        
        </body>
    </html>

    <!--//page de telechargement

    <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <meta name="author" content="ILBOUDO Cisso">
                <title>Page de telechargement des identifiants</title>
                <link rel="stylesheet" href="identifiant.css">
            </head>
            <body>
                <div class="container">
                    <div class="entete">
                        <p>
                            Merci de telecharger vos identifiants.
                        </p>
                        <br>
                        <div class="vert">Elle vous servira de preuve que vous etes inscrits a l uvbf</div>
                        <p>
                            <a href="C:\xampp\htdocs\jokerr\json\1.json" class="lien_t" download="1.json"> cliquez ici pour telecharger</a>
                            <input file="">
                        </p>
                    </div>
                </div>
            </body>
        </html>