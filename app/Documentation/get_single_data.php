

$obj = (Array)json_decode(get_mysql("

SELECT * FROM `users`

"))[0];


'.$obj["id"].'

'.$obj["username"].'


?>

و سپس دریافت ستون مورد نظر داخل کد های ماژول به این شکل


