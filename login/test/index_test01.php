<?php
 






function condition_ascii_ok($plus_petit,$plus_grand,$string){

    $valeur_final ="" ; 
                for($i = 0 ; $i <strlen($string) ; $i ++ )  {
                    
                    if(ord($string[$i])>$plus_petit && ord($string[$i])<$plus_grand){
                        $valeur_final = $valeur_final.$string[$i] ; 
                    }
                
                }
    return $valeur_final  ; 
}





//echo condition_ascii_ok(65,122,$string) ; 

$string ="Terminator (The Terminator) est un film de science-fiction américain réalisé par James Cameron et sorti en 1984. Il met en scène Arnold Schwarzenegger, Michael Biehn et Linda Hamilton dans les rôles principaux.

Traitant du voyage dans le temps et de la menace que pourraient faire naitre des robots créés par une superintelligence issue de la singularité technologique, Terminator est devenu l'un des classiques du cinéma d'action et d’anticipation des années 1980. Si son succès commercial ou critique est resté incertain jusqu'à sa sortie en salles, le film fut néanmoins en tête du boxoffice américain pendant deux semaines. Il a aidé à lancer la carrière cinématographique de Cameron et à consolider celle de Schwarzenegger, confortant son statut de vedette de films d'action acquis en 1982 avec Conan le Barbare.

Le succès du film a conduit à la création d'une franchise avec, notamment, une série de films, une série télévisée, ainsi que plusieurs jeux vidéos.

En 2008, le film est sélectionné par le National Film Registry de la Bibliothèque du Congrès américain pour conservation, en raison de son intérêt « culturellement, historiquement ou esthétiquement important »." ; 
$valeur_final ="" ; 
$a=array();
array_push($a,"1","32");
array_push($a,"32","39");
array_push($a,"39","96");
array_push($a,"96","126");



var_dump($a) ; 
/*
for($i = 0 ; $i <strlen($string) ; $i ++ )  {
                    
    if(ord($string[$i])>$a[0] && ord($string[$i])<$a[1] || ord($string[$i])>$a[2] && ord($string[$i])<$a[3] || ord($string[$i])>$a[4] && ord($string[$i])<$a[5] || ord($string[$i])>$a[6] && ord($string[$i])<$a[7]  ){
        $valeur_final = $valeur_final.$string[$i] ; 
    }

}

echo $valeur_final ; 
*/



$string = str_replace("'","(0)",$string);

$string = str_replace('"',"(1)",$string);

for($i = 0 ; $i <strlen($string) ; $i ++ )  {
                    
    if(ord($string[$i])>0 && ord($string[$i])<250 ){
        $valeur_final = $valeur_final.$string[$i] ; 
    }

}

echo  $valeur_final ; 
?> 
 
 