<?php

$data = get_all_data($db, '*', 'future_group');
$company = mysqli_fetch_assoc($data);
