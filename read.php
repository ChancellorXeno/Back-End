<?
require_once 'connect.php';

$sql = "SELECT id, naam FROM lists";
$stmt = $pdo->prepare($sql);
$stmt->execute();

while ($data = $stmt->fetch())
    echo '<div class="list">'
            .'<h5 class="id">'.$data['id'].'</h5>'
            .'<h5 class="card-title">'.$data['naam'].'</h5>'
        .'</div>';
?> 