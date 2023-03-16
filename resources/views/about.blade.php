<!DOCTYPE html>
<html>
  <head>
    <title>About Autism Aware</title>
  </head>
  <body>
    <h1>Autism Aware </h1>
    <p>A product of RDS</p>
    <p>Email: sumon@example.com</p>
    <p>Phone: 123-456-7890</p>
    <p>Address: 123 Main St, Anytown, USA</p>
    <div class="db_connection">
      <?php 
        if(DB::connection()->getPdo()){
          echo "Sucessfully! Connected. Your databese is: ".DB::connection()->getDatabaseName();
        }
      ?>
    </div>
    <div class="user-info">
      
    </div>
  </body>
</html>
