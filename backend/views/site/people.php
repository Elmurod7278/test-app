<table class="table table-bordered table-striped table-hover">
<tr class="text-center"><th>ID</th><th>Name</th><th>Surname</th><th>Telegram Username</th><th>CV</th></tr>
<?php

/** @var common\models\Person $model */

use common\models\Person;

foreach ($model as $item){
    /** @var Person $item */
    $image = Yii::getAlias('http://client.test.local/uploads/');
    echo "<tr><td class='text-center'>{$item->id}</td>
<td  class='text-center'>{$item->first_name}</td><td  class='text-center'>{$item->last_name}</td>
<td  class='text-center'><a href='https://t.me/$item->email'>@{$item->email}</a></td>
<td  class='text-center'><a class='text-decoration-none text-uppercase text-danger' href='$image/$item->file'  target='_blank'>{$item->first_name}'s CV</a></td>
</tr>";
} ?>
</table>