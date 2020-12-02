<?
include "connect.php";
echo 'made it this far fail (nailed)';
// initialize variables for the insert query
echo $_GET['id'];
if (isset($_GET['id'])) {
    echo 'made it this far 1 (nailed)';
    if (!empty($_POST)) {
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        echo 'made it this far 2 (nailed)';
        // Update the record
        $stmt = $pdo->prepare('UPDATE lists SET id = ?, name = ?, WHERE id = ?');
       // $stmt->execute([$id, $name, $_GET['id']]);
        $stmt->execute(['id'=>$id, 'name'=>'$name', $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM contacts WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    echo 'made it this far 3 (not nailed)';
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
}
?>