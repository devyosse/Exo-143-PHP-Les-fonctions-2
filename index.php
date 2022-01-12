<?php

//1
$booleen = true;

function returnTrue ($booleen){
    if(is_bool($booleen)){
        echo "True";
    }
}

returnTrue(true);
echo "<br><br>";

//2
$string = "Hello";

function returnText ($string){
    echo $string;
}

returnText($string);
echo "<br><br>";

//3

function returnMoreText($name, $fName){
    echo "Bonjour $name $fName. <br>";
}

returnMoreText('Hassaini','Hocine');

echo "<br><br>";
//4

function number($numberOne, $numberTwo){
    if($numberOne > $numberTwo){
        echo "Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième";
    }
    elseif ($numberOne < $numberTwo){
        echo "Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième";
    }
    elseif ($numberOne === $numberTwo){
        echo "Les deux nombres sont identiques si les deux nombres sont égaux";
    }
}

number(5,5);
echo "<br><br>";
//5

function numberText($number, $stringText){
    echo "$number + " . $stringText;
}

numberText('5','bonjour');
echo "<br><br>";

//6
function threeparam($nom, $age, $prenom){
    echo "Bonjour $nom $prenom $age ans";
}

threeparam('Buchet','30','Jonathan');
echo "<br><br>";

//7

function twoParam($age, $genre = 'Homme' || 'Femme'){

    if ($age >= 18 && $genre === 'Homme'){
        echo "Vous êtes un homme et vous êtes majeur";
    }
    elseif ($age < 18 && $genre === 'Homme'){
        echo "Vous êtes un homme et vous êtes mineur";
    }
    elseif ($age >= 18 && $genre === 'Femme'){
        echo "Vous êtes une femme et vous êtes majeur";
    }
    elseif ($age < 18 && $genre ==='Femme'){
        echo "Vous êtes une femme et vous êtes mineur";
    }
}

twoParam('30','Homme');

echo "<br><br>";

//8
function eight($numberOne = '0', $numberTwo = '0', $numberThree = '0'){
    echo $numberOne + $numberTwo + $numberThree;
}

eight('5','5','5');

?>