<?php

$host = 'localhost';
$dbname = 'user_managment';  // Fixed typo 'user_managment' to 'user_management';
$username = 'root';
$password = '';

try {
    // Create a PDO instance;
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception;
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT id, username, email, created_at FROM users";
    $stmt = $pdo->query($sql); 
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Handle database connection errors;
    echo "Error: " . $e->getMessage();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
    </tr>
  </thead>
<tbody>

</tbody>
<?php if (!empty($users)): ?>
    <?php foreach ($users as $user): ?>

        <tr>
        <?php echo htmlspecialchars($user['id']) ?></td>
                <td> <?php echo htmlspecialchars($user['username']) ?></td>
                <td> <?php echo htmlspecialchars($user['email']) ?></td>
                <td> <?php echo htmlspecialchars($user['created_at']) ?></td>
        </tr>

        <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan ="4" class = "text-center">no users found</td>
            </tr>
            <?php endif; ?>
</table>
</body>
</html>