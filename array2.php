<?php
$negara = ['Indonesia', 'Malaysia', 'Singapura', 'Brunei Darussalam', 'Filipina'];

echo '<pre>';
print_r($negara);

echo "<br>";
?>

    <?php 
    $ibukota = [
        'Indonesia' => 'Jakarta', 
        'Malaysia' => 'Kuala Lumpur', 
        'Singapura' => 'Singapura', 
        'Brunei Darussalam' => 'Bangkok', 
        'Filipina' => 'Manila',
    ];

    foreach ($ibukota as $key => $value) {
    echo "<li> Ibukota $key adalah $value";
    echo "<br>";
    }
    ?>

