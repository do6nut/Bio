<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'bio');

//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'u940419404_bioshine');
//define('DB_PASSWORD', '+NWAqNl62Uh');
//define('DB_NAME', 'u940419404_bioshine');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
<?php
        $config=array(
        //    'DB_HOST'=>'localhost',
        //    'DB_USERNAME'=>'u940419404_bioshine',
        //    'DB_PASSWORD'=>'+NWAqNl62Uh',
        //    'DB_DATABASE'=>'u940419404_bioshine'

            'DB_HOST'=>'localhost',
            'DB_USERNAME'=>'root',
            'DB_PASSWORD'=>'',
            'DB_DATABASE'=>'bio'
        );

?>


