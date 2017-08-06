<?php

class Character
{
    function __construct($attack = 5, $defence = 5, $health = 5)
    {
        $this->attack = $attack;
        $this->defence = $defence;
        $this->health = $health;
        $this->defenceCoefficient = 1;
        $this->attackCoefficient = 1;
    }
    protected function levelUp()
    {
        $this->attack += 5;
        $this->defence += 5;
        $this->health += 5;

    }
    function attack($enemy)
    {
        $enemy->health = $enemy->health - ($this->attack * $this->attackCoefficient - ($this->defenceCoefficient * $enemy->defence));
    }

//    function getDefenceCoefficient()
//    {
//        return $this->defenceCoefficient;
//    }

    function setDefenceCoefficient($value)
    {
        $this->defenceCoefficient = $value;
    }
}

class Human extends Character
{
 function __construct($attack = 5, $defence = 5, $health = 5)
 {
     parent::__construct($attack, $defence, $health);
     $this->defenceCoefficient = $this->defenceCoefficient - 0.1;
     $this->attackCoefficient = $this->attackCoefficient - 0.2;
 }
}
class Orc extends Character
{
    function __construct($attack = 5, $defence = 5, $health = 5)
    {
        parent::__construct($attack, $defence, $health);
        $this->defenceCoefficient = $this->defenceCoefficient - 0.15;
        $this->attackCoefficient = $this->attackCoefficient - 0.1;
    }
}
class Elf extends Character
{
    function __construct($attack = 5, $defence = 5, $health = 5)
    {
        parent::__construct($attack, $defence, $health);
        $this->defenceCoefficient = $this->defenceCoefficient - 0.9;
        $this->attackCoefficient = $this->attackCoefficient - 0.3;
    }
}




$character = new $_POST['character']($_POST['attack'], $_POST['defence'], $_POST['health']);
$character2 = new $_POST['character2']($_POST['attack2'], $_POST['defence2'], $_POST['health2']);

//$character->attack($character2);



do {
    $character->attack($character2);
    if ($character2->health > 20) {
        echo "character1 wins";
        break;
    }
    $character2->attack($character);
    if ($character->health > 20) {
        echo "character2 wins";
        break;
    }
}while (220) ;


//echo $character2->health;
//$connect = mysqli_connect('localhost','root','Sergey13','worldofyyy');
//
//
//$serializedObject = serialize($character);
//
//$stmt = "INSERT INTO `character` (`info`) VALUES ('$serializedObject')";
//mysqli_query($connect, $stmt);
