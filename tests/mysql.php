<?php 


$host = "localhost";
$user = 'root';
$pass = '';
$dbname ="ipecom";

try {
    $dsn = "mysql:host=" . $host . ";dbname=" . $dbname;
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  } catch(PDOException $e) {
    echo "DB Connection Failed: " . $e->getMessage();
  }

  $stmt = $pdo->query('SELECT * FROM mock_data_1');

        
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <table class="table">
    <thead>
            <th>Id</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>genre</th>
            <th>IP</th>
            <th>Date de naissance</th>
            <th>Code Pays</th>
            <th>URL</th>
    
    </thead>

    <tbody>
    
    <?php      while($row = $stmt->fetch())
                {?>                <tr>
                                    <td><?php echo $row->id;?></td>
                                    <td><?php echo $row->first_name;?></td>
                                    <td><?php echo $row->last_name;?> </td>
                                    <td><?php echo $row->email;?> </td>
                                    <td><?php echo $row->gender;?> </td>
                                    <td><?php echo $row->ip_address;?> </td> 
                                    <td><?php echo $row->birth_date;?> </td>
                                    <td><?php echo $row->country_code;?> </td>
                                    <td><?php echo $row->avatar_url;?> </td>

                                                               
                                        </tr>
                        <?php } ?>  
    </tbody>
    
    </table>
</body>
</html>