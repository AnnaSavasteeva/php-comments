<?php
$id = (new \Future\Core\Comments())->getId('DESC', 3);

while($row = mysqli_fetch_assoc($id)) {
    $comment = new \Future\Core\Comments($row['id']);
}
