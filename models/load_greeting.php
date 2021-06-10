<?php
require_once '../config/connection.php';

$sql = mysqli_query($conn, "SELECT name, greeting,created_at from greeting order by created_at DESC");
foreach ($sql as $result) : ?>
    <hr>
    <h4 style="margin:0px;padding-bottom:0px"><label for=""><?= $result['name']; ?></label></h4>
    <sub class="text-muted" style="margin:0px;lline-height:1"><i class="fa fa-clock"><?= $result['created_at']; ?></i></sub>
    <h4><?= $result['greeting']; ?></h4>
<?php endforeach; ?>