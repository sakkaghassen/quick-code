
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="affichage.css">
    <script src="https://kit.fontawesome.com/48c4fd7bdc.js" crossorigin="anonymous"></script>

    <title>inscription</title>
</head>




<body>
    
    <header>
        <a class="logos" href="#">Quick<span class="x1 ">Code</span>&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        Show me the code!</a>
            <form class="f2 ">
                <input type="text " placeholder="Search here! "><button class="search-button "><i class="fas fa-search "></i></button>
            </form>
        </header>
    
    
    

    <div class="navbar ">
        <ul>
            <li><a href="quickcode.html">Acceuil</a></li>
            <li><a href="presentation.html">Presentation</a>
                
            </li>
            <li><a href="formation.html">Formations</a>
               
            </li>
            <li><a href="inscription.html">Inscription</a></li>
            <li><a href="galerie.html">Galerie</a></li>
            <li><a href="form2.html">Consultation</a></li>
    


        </ul>

    </div>
</div>




<?

mysql_connect('localhost','root','') or die('ereur de connexion');

mysql_select_db('project') or die ('base introuvable');

 if (isset( $_POST['nom']) && isset( $_POST['prenom']) && isset( $_POST['cin']) && isset( $_POST['tel']) && isset( $_POST['mail']) && isset( $_POST['etat']) && isset( $_POST['age']) && isset( $_POST['mode']) && isset( $_POST['mdp']))
 { 
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['cin']) && !empty($_POST['tel']) && !empty($_POST['mail']) && !empty($_POST['genre']) && !empty($_POST['etat'])&& isset( $_POST['mode'])&& isset( $_POST['mdp']) )

  {
 $nom=$_POST['nom'];
	
 $prenom=$_POST['prenom'];
	
    
    $cin=$_POST['cin'];
    $tel=$_POST['tel'];
	$mail=$_POST['mail'];
    $mdp=$_POST['mdp'];
    $genre=$_POST['genre'];
    $etat=$_POST['etat'];
    $age=$_POST['age'];
    $mode=$_POST['mode'];
   



	$q=" select cin from personne where cin='$cin' ";
	$r=mysql_query($q) or die(mysql_error()); 
	if (mysql_num_rows($r)==0 ) 
	{   echo"<div class='affichage'>";
        echo "<div class='title'> Bienvenu C est la premiere que fois que vous allez faire une formation dans QuickCode </div> ";
		$res1=mysql_query(" insert into personne values ('$cin','$nom','$prenom','$tel','$mail','$genre','$etat','$age','$mdp') ") or die (mysql_error());
		
        if ($res1)
         
        { echo" <div class='para1'> Chers Client vos donees </div>";
           
            echo"<table class='tableau'>";
            
          echo' <tr><th> Donnes </th></tr>';
          echo"<tr><td> Cin   :</td> <td> ".$cin."</td></tr>" ;
          echo"<tr><td> Nom   :</td> <td> ".$nom."</td></tr>" ;
          echo"<tr><td> Prenom: </td> <td> ".$prenom."</td></tr>" ;
          echo"<tr><td> Mail  :</td> <td> ".$mail."</td></tr>" ;
          echo"<tr><td> Tel   :</td> <td> ".$tel."</td></tr>" ;
          echo"<tr><td> Age   :</td> <td> ".$age."</td></tr>" ;
          echo"<tr><td> Genre : </td> <td> ".$genre."</td></tr>" ;
          echo"<tr><td> Etat  :</td> <td> ".$etat."</td></tr>" ;
          echo"<tr><td> Etat  :</td> <td> ".$mdp."</td></tr>" ;
        
          echo"</table>";
          

        echo" <div class='para1'> ont ete enregistre dans la base de donnees de QuickCode. <br><br><br><br> </div>";
            
        }       
           
    }    
    if (isset( $_POST['intelligence']))
    {   $intelligence=$_POST['intelligence'];
        $res2=mysql_query(" insert into inscription values ('$cin','$mode','$intelligence') ") or die (mysql_error());
        echo" <div class='para'> inscription avec succses  pour la foramation  :".$intelligence."</div>";
   
   
        }


    
    

    if (isset( $_POST['cyber']))
    {   $cyber=$_POST['cyber'];
        $res2=mysql_query(" insert into inscription values ('$cin','$mode','$cyber') ") or die (mysql_error());
        
        echo" <div class='para'> inscription avec succses  pour la foramation  :". $cyber."</div>";
    }       

    if (isset( $_POST['deep']))
    {   $deep=$_POST['deep'];
        $res2=mysql_query(" insert into inscription values ('$cin','$mode','$deep') ") or die (mysql_error());
        echo" <div class='para'> inscription avec succses  pour la foramation  :".$deep."</div>";
    }       


    if (isset( $_POST['Business']))
    {   $Business=$_POST['Business'];
        $res2=mysql_query(" insert into inscription values ('$cin','$mode','$Business') ") or die (mysql_error());
        echo" <div class='para'> inscription avec succses  pour la foramation  :". $Business."</div>";
    }       



    if (isset( $_POST['commerce']))
    {    $commerce=$_POST['commerce'];
        $res2=mysql_query(" insert into inscription values ('$cin','$mode','$commerce') ") or die (mysql_error());
        echo" <div class='para'> inscription avec succses  pour la foramation  :". $commerce."</div>";
    }       
}
echo"</div>";
} 


?>






<footer>
    <div class="bloc1 ">
        <h2>Reseaux sociaux</h2>
        <div class="links">
            <a href=" " class="fb "> <i class="fab fa-facebook"></i></a>
            <a href=" " class="inst "> <i class="fab fa-instagram"></i></a>
            <a href=" " class="twt "> <i class="fab fa-twitter-square "></i></a>
        </div>

    </div>

    <div class="bloc2 ">
        <h2>Ou nous trouvez</h2>
        <a href=" " class="mp "><i class="fas fa-map-marker-alt "></i>Manar 1</a>
        <a href=" " class="mp "><i class="fas fa-map-marker-alt "></i>Tunis</a>
        

    </div>
    <div class="bloc2 ">
        <h2>Pour plus de details</h2>

        
        
        <a href=" " class="mp "><i class="fas fa-phone-alt "></i>+216-------</a></p>

        <a href=" " class="mp "><i class="fas fa-envelope "></i>Quick@gmail.com</a>
    </div>
    <div class="qr">
    <h2>scanner le code suivant</h2>
        <img  src="qrcode.jpg">
    </div>
</footer>



</body>

</html>