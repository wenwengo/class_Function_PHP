<?php
include_once "db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自訂函式</title>
</head>

<body>
    <?php

    dd(all('students', " WHERE `id`<5"));
    dd(find('students', ['uni_id' => 'F200000035', 'parents' => '孔進豐']));
    update('students', ['dept' => '2'], ['dept' => '1', 'id' => 3]);    //編輯,原資料必有id,因為是修改舊資料（註id為自然產生之不重複的key world）
    insert('dept', ['code' => '801', 'name' => '綜合演藝學系']);         //新增,原資料必無id,因為是修改舊資料（註id為自然產生之不重複的key world）
    //del('dept', ['name' => '綜合演藝學系']);
    ?>
</body>

</html>