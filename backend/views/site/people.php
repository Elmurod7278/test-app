<table class="table table-bordered">
<tr class="text-center"><th>ID</th><th>Name</th><th>Surname</th><th>Email address</th><th>CV</th></tr>
<?php

/** @var common\models\Person $model */
foreach ($model as $item){
    /** @var \common\models\Person $item */
    echo "<tr><td class='text-center'>{$item->id}</td><td  class='text-center'>{$item->first_name}</td><td  class='text-center'>{$item->last_name}</td><td  class='text-center'>{$item->email}</td><td  class='text-center'>{$item->file}</td></tr>";
} ?>
</table>