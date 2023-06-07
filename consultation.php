<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="consultation.css">

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

 if (isset( $_POST['cin']) && isset( $_POST['mdp']) )

    if(!empty($_POST['cin']) && !empty($_POST['mdp']))
    {

    
    $cin=$_POST['cin'];
	
    $mdp=$_POST['mdp'];
    $q=" select cin from personne where cin='$cin' and password='$mdp' ";
	$r=mysql_query($q) or die(mysql_error()); 
	if (mysql_num_rows($r)==0 ) 
    {   
        
        echo"<div class='affichage'>";
        echo "<div class='title'> vous n etes pas inscrit sur notre plateforme QuickCode </div> ";
        echo "</div>";
    }
    
    if (mysql_num_rows($r)!=0 ) 
    {   
        $q=" select cin , mode , formation  from inscription where cin='$cin'";
        $r1=mysql_query($q) or die(mysql_error()); 
            if  (mysql_num_rows($r1)==0 )
            {
                echo"<div class='affichage'>";
                echo " <div class='title'> il n ya pas de formations dont lequelle vous etes inscrit </div> ";
                echo "</div>";
            }


            if  (mysql_num_rows($r1)!=0 )
              {  echo"<div class='affichage'>";  
                echo "<div class='title'> voici les formations dont lequelle vous etes inscrit </div> ";
               
                $resultats = array();


                while($t=mysql_fetch_array($r1))
                {
                    $resultats[] = $t;

                }
                echo"<table class='tableau'>";

                for($i = 0; $i < mysql_num_rows($r1); $i++)
                {
                    if( isset($resultats[$i]) )
                  {  echo"<table class='tableau'>";
                    echo "<tr><td> CIN:</td> <td>". $resultats[$i]['cin']."</td></tr>";
                    echo" <tr><td> formation   :</td> <td>". $resultats[$i]['formation']."</td></tr>";
                    echo "<tr><td> mode  :</td> <td>".$resultats[$i]['mode']."</td></tr>";

                   
                    echo"</table>";  
                }
                
            }
            echo"</div>";
        } 
                
     
   

             }
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