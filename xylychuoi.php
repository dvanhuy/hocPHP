<?php
$select = "<select name=\"cate\">";
for ($i=0; $i < 10; $i++) {
    $select.="<option value=".$i.">Số ".$i."<option/>";
}
$select.="<select/>";
echo $select
?>