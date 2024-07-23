<!DOCTYPE html>  
     <head>  
      <title>Docker demo</title>
     </head>   
     <style>
        body {
            font-family: Arial, sans-serif;
            outline: none;
        }
        h1 {
            color: #0d5a39;
        }

     </style>
     <body>  
     <h1>Hello, Docker! 🙂</h1> 
      <p><?php echo 'We are running PHP, version: ' . phpversion(); ?></p>  
      <p style="color:#0099ff";><b>New line added</b></p>
      <?  
       $database ="mydb";  
       $user = "cosmi";  
       $password = "demo1234";  
       $host = "db";  
       # $query = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = '{$database}' AND TABLE_TYPE='BASE TABLE'");
       # $tables = $query->fetchAll(PDO::FETCH_COLUMN);

       $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);  
       $query = $connection->query("SELECT name FROM users");
       $users = $query->fetchAll(PDO::FETCH_COLUMN);
  
        if (empty($users)) {
          echo "<p>There are no users in the \"users\" table.</p>";
        } else {
          echo "<p>The \"users\" table has the following users:</p>";
          echo "<ul>";
            foreach ($users as $user) {
              echo "<li>{$user}</li>";
            }
          echo "</ul>";
        }
        ?>
    </body>
</html>