<?php
$id = (new \Future\Core\Company())->getId();

while($row = mysqli_fetch_assoc($id)) {
    $company = new \Future\Core\Company($row['id']);
}
