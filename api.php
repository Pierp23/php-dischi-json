<?php
// rendo l'API accessibile a tutti
header("Access-Control-Allow-Origin: *");

$disc = [
    [
        'title' => 'Fake News',
        'artist' => 'Pinguini Tattici Nucleari',
        'img' => 'https://m.media-amazon.com/images/I/61vDkJwmrFL._UXNaN_FMjpg_QL85_.jpg'
    ],
    [
        'title' => 'HELLdorado',
        'artist' => 'Negrita',
        'img' => 'https://m.media-amazon.com/images/I/61PPpBTmiyL._UF1000,1000_QL80_.jpg'
    ],
    [
        'title' => 'Blink-182',
        'artist' => 'Blink-182',
        'img' => 'https://i.discogs.com/D2zLOo8AZwOTUXSQEiPVEreumxod_rrZfaJC-Lk-0hs/rs:fit/g:sm/q:90/h:597/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTYyMjcw/MTUtMTQxNDQ4ODAy/Ni05OTMyLmpwZWc.jpeg'
    ],
    [
        'title' => 'Hybrid Theory',
        'artist' => 'Linkin Park',
        'img' => 'https://m.media-amazon.com/images/I/81iC+O0ec2L._UF1000,1000_QL80_.jpg'
    ],
    [
        'title' => 'Ecliptica',
        'artist' => 'Sonata Arctica',
        'img' => 'https://m.media-amazon.com/images/I/71-enGzLjZL._UF1000,1000_QL80_.jpg'
    ],
    [
        'title' => 'Use Your Illusion I',
        'artist' => "Guns N'Roses",
        'img' => 'https://upload.wikimedia.org/wikipedia/en/e/ea/GnR--UseYourIllusion1.jpg'
    ]
];

// rendo l'array associativo un file json e lo stampo
header('Content-Type: application/json');
echo json_encode($disc);
