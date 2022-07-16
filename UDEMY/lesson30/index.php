<?php
    $transport = [
        'cars' => ['Honda', 'Dodge', 'Mazda'],
        'avia' => ['Boeing', 'Il'],
        'ships' => ['fregat', 'boat']
    ];

    echo '<pre>';
    print_r($transport);
    echo '</pre>';

    echo $transport['cars'][2];