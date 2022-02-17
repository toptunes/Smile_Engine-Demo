<?php


$result = get_sql_as_list('SELECT * FROM `uploads`  ORDER BY `id` DESC limit 20');

$dec = json_decode($result);

for($idx = 0; $idx < count($dec); $idx++){
    $obj = (Array)$dec[$idx];

$VALUE_all.='

  <tr>
        <td>'.$obj["id"].'</td>
        <td>'.$obj["date"].'</td>
        <td><img width="100" src="/upload/image/images/'.$obj["filename"].'"></td>
      </tr>

';
}

$upload_and_showlist_all = '


  <table class="table">
    <thead>
      <tr>
        <th>آی دی</th>
        <th>تاریخ</th>
        <th>عکس</th>
      </tr>
    </thead>
    <tbody>
	'.$VALUE_all.'
      </tbody>
  </table>



';





