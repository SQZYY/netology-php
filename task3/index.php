<?php

$animals = [
    'Africa' => ['Panthera leo', 'Dermochelys coriacea'],
    'Asia' => ['Phelsuma guentheri', 'Lupus'],
    'South America' => ['Castor canadensis', 'Leptonycteris nivalis'],
    'North America' => ['Myrmecophaga tridactyla', 'Alouatta macconnelli'],
    'Australia' => ['Phascolarctos cinereus', 'Notoryctes'],
    'Antarctic' => ['Arctocephalus gazella', 'Procellariidae']
];

$firstName = [];
$secondName = [];

foreach ($animals as $continents => $animal) {
    foreach ($animal as $name) {
        $nameOfAnimal = str_word_count($name, 1);
        if (count($nameOfAnimal) == 2) {
            $firstName[] = $nameOfAnimal[0];
            $secondName[] = $nameOfAnimal[1];
        }
    }
}

shuffle($firstName);
shuffle($secondName);

for ($i = 0; $i < count($firstName); $i++)
{
    echo $firstName[$i] . ' ' . $secondName[$i];
    echo '<br>';
}