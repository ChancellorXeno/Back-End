<? 
$sql = "SELECT id, name FROM lists";
$stmt = $pdo->prepare($sql);
$stmt->execute();

while ($data = $stmt->fetch())
    echo '<div class="list">'
            .'<p class="id">'.$data['id'].'</p>'
            .'<p class="card-title">'.$data['name'].'</p>'
            .'<form action="list_update.php?id='.$data['id'].'?name='.$data['name'].'" method="post">
            List Nameupdt: <input type="text" name="name" /><br><br>
            <input type="submit" />
            </form>'
            .'<a class="edit buttons" href="../Back-End/list_delete.php?id='.$data['id'].'">Delete</button></a>'
        .'</div>';
?>  