
<?php
 define('DB_HOST', 'localhost:3306');
   define('DB_USERNAME', 'marco_lionel');
   define('DB_PASSWORD', 'Psm9?s47');
   define('DB_DATABASE', 'marcosimeony_lionelministries');
   $db = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("There is a problem with the database:" .mysqli_error);

?>