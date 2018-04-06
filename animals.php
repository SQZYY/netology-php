<?php

 $animals = ['Panthera leo', 'Hippotigris', 'Tigris', 'Lupus', 'Castor canadensis', 'Grizzly',
    'Myrmecophaga tridactyla', 'Dasyprocta', 'Phascolarctos cinereus', 'Notoryctes',
    'Arctocephalus gazella', 'Procellariidae'];

$firstName = [];
$secondName = [];

    foreach ($animals as $animal) {
        $nameOfAnimal = str_word_count($animal, 1);
            if (count($nameOfAnimal) == 2)
            {
                $firstName[] = $nameOfAnimal[0];
                $secondName[] = $nameOfAnimal[1];
            }
    }

shuffle($firstName);
shuffle($secondName);

for ($i = 0; $i <= count($firstName); $i++)
{
    echo $firstName[$i] . ' ' . $secondName[$i];
    echo '<br>';
}