<?php
// Invocare lo script php passando dei parametri (username, password)
//  $argc to find out how many parameters are passed
//  and $argv to access them

if($argc !== 3) {
    echo("Bisogna invocare il file passando username e password per accedere a MySQL.\n");
    echo("php scriptDb.php root password");
    return;
}

$username = $argv[1];
$password = $argv[2];

try {
    $dbh = new PDO('mysql:host=localhost', $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if (file_exists('./tasteit.sql')) {
        $fileContent = file_get_contents('./tasteit.sql');
        $dbh->exec($fileContent);
    }


} catch(PDOException $exception) {
    print_r('Non è stato possibile connettersi al dabatase. Messaggio: ' . $exception->getMessage());
}
