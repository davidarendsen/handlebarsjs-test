<?php
header('Content-type: application/json');
echo json_encode([
    'addresses' => [
        [
            'id' => 1,
            'city' => 'London',
            'street' => 'Baker Street',
            'number' => '221B',
        ],
        [
            'id' => 2,
            'city' => 'Amsterdam',
            'street' => 'van Wijngaardenstraat',
            'number' => '2',
        ],
        [
            'id' => 3,
            'city' => 'Bodegraven',
            'street' => 'Tjalk',
            'number' => '20',
        ],
    ]
]);