<?php
if (!defined('24647ETW$@^&@%@%*#'))
{
    die('error 24');
}

function get_sql_as_list($sql)
{
    $CPU_conn = new conn();

    $CONe = $CPU_conn->getDBready();

    $VALUE_all = $CPU_conn->read_sql($sql);

    return $VALUE_all;
}
function get_mysql($sql)
{
    $CPU_conn = new conn();

    $CONe = $CPU_conn->getDBready();

    $VALUE_all = $CPU_conn->read_sql($sql);

    return $VALUE_all;
}

function update_mysql($sql)
{
    $CPU_conn = new conn();

    $CONe = $CPU_conn->getDBready();

    $VALUE_all = $CPU_conn->update_sql($sql);

    return $VALUE_all;
}

function Access_permission($user, $userlevel, $forwhat)
{

    return $banned = $userlevel >= $user ? "" : "1";

}

function sync()
{

    $included_files = get_included_files();
    foreach ($included_files as $filename)
    {
        $filenamea = $filenamea . basename($filename, ".php");

    }

    return $filenamea;
}

function child($tag, $name, $data)
{
    //don't take it serious
    $data = str_replace("<form", '<form id="' . $name . '"', $data);
    $data = str_replace('id="form_submit"', 'id="form_submit" who-id="' . $name . '"', $data);
    $data = str_replace('id="form_submit"', 'id="_submit' . $name . '"', $data);
    $export = $data;

    return $export;
}

function admin($tag, $name, $data)
{
     //don't take it serious
    $data = str_replace("<form", '<form id="' . $countme . $name . '"', $data);
    $data = str_replace('id="form_submit"', 'id="form_submit" who-id="' . $countme . $name . '"', $data);
    $data = str_replace('id="form_submit"', 'id="_submit' . $countme . $name . '"', $data);

    $export = $data;

    return $export;
}

function fill($tag, $name, $data)
{

    $export = $data;

    return $export;
}

function mini($tag, $name, $data)
{

     //don't take it serious
    $data = str_replace("<form", '<form id="' . $countme . $name . '"', $data);
    $data = str_replace('id="form_submit"', 'id="form_submit" who-id="' . $countme . $name . '"', $data);
    $data = str_replace('id="form_submit"', 'id="_submit' . $countme . $name . '"', $data);
    $export = $data;
    return $export;
}

function replaceVariablesInTemplate($template, array $variables)
{

    return preg_replace_callback('#{(.*?)}#', function ($match) use ($variables)
    {
        $match[1] = trim($match[1], '$');
        return $variables[$match[1]];
    }
    , ' ' . $template . ' ');
}

function module($tag, $name, $data)
{
    $counter = 0;
    $counter2 = 0;
    if (strpos($data, "<form") == true)
    {
        if (strpos($data, "<form id=") == false)
        {
            $data = str_replace("<form", '<form id="mod_' . $name . '"', $data);
            $data = str_replace("<form", "<form novalidate onsubmit=\"return false\" ", $data);
        }

    }
    else
    {

        $data = '<' . $tag . ' id="mod_' . $name . '">' . $data . '</' . $tag . '>';

    }

    $data = str_replace('id="form_submit"', 'id="form_submit" who-id="mod_' . $name . '"', $data);
    $data = str_replace('id="form_submit"', 'id="_submit' . $name . '"', $data);
    $data = '<' . $tag . ' id="org_' . $name . '">' . $data . '</' . $tag . '>';
    $data = str_replace(array(
        "\r",
        "\n"
    ) , '', $data);
    $export = $data;

    $legh = substr_count($export, '<form id="child_');

    for ($x = 0;$x <= $legh;$x++)
    {
        $counter = $counter + 1;
        $export = str_replace_first('<form id="child_', '<form id="' . $counter . '_child_', $export);
        $export = str_replace_first('id="_submitchild_', 'id="_submit' . $counter . '_child_', $export);
        $export = str_replace_first('who-id="child_', 'who-id="' . $counter . '_child_', $export);

    }

    $legh2 = substr_count($export, '<form id="mini_');

    for ($x = 0;$x <= $legh2;$x++)
    {
        $counter2 = $counter2 + 1;
        $export = str_replace_first('<form id="mini_', '<form id="' . $counter2 . '_mini_', $export);
        $export = str_replace_first('id="_submitmini_', 'id="_submit' . $counter2 . '_mini_', $export);
        $export = str_replace_first('who-id="mini_', 'who-id="' . $counter2 . '_mini_', $export);

    }

    $export = str_replace("<form", "<form novalidate onsubmit=\"return false\"", $export);

    return $export;
}

function calc($tag, $name, $data)
{
    $data = str_replace('input_m_form', 'input_m_form' . $name, $data);
    $data = str_replace('id="form_submit"', 'id="form_submit" who-id="' . $name . '"', $data);
    $data = str_replace("<form", '<form id="' . $name . '"', $data);
    $data = str_replace('id="form_submit"', 'id="form_submit" who-id="' . $name . '"', $data);
    $data = str_replace(array(
        "\r",
        "\n"
    ) , '', $data);
    $export = $data;
    return $export;
}

function database_onstart($tag, $data, $users_r, $num)
{
    $_res = "";
    $export = "";
    $VALUE_all = everything_in_tags($users_r, $tag);

    $VALUE_all = json_decode($VALUE_all);

    if (isset($VALUE_all["{$VALUE_all}"]) && isset($export["{$data}"]))
    {
        $export = ((Array)$VALUE_all[$num]);
        $_res = $export["{$data}"];
    }
    return $_res;
}

function pat($tag, $col, $users_r, $num)
{

    if ($num == 0)
    {
        $num = "{loop_cnt}";
    }

    $export = "{{" . $num . $col . "}}";

    return $export;
}

function preload($tag, $name, $data)
{
    $counter = 0;
    $counter2 = 0;

    if (strpos($data, "<form") == true)
    {
        if (strpos($data, "<form id=") == false)
        {
            $data = str_replace("<form", '<form id="mod_' . $name . '"', $data);
        }
        $data = str_replace("<form", "<form novalidate onsubmit=\"return false\" ", $data);
    }
    else
    {

        if ($tag != "loop")
        {
            $data = '<' . $tag . ' id="mod_' . $name . '">' . $data . '</' . $tag . '>';
        }
    }

    $data = str_replace('id="form_submit"', 'id="form_submit" who-id="mod_' . $name . '"', $data);
    $data = str_replace('id="form_submit"', 'id="_submit' . $name . '"', $data);
    $data = '<' . $tag . ' id="org_' . $name . '">' . rawUrlEncode($data) . '</' . $tag . '>';
    $data = str_replace(array(
        "\r",
        "\n"
    ) , '', $data);
    $export = $data;

    $legh = substr_count($export, '<form id="child_');

    for ($x = 0;$x <= $legh;$x++)
    {
        $counter = $counter + 1;
        $export = str_replace_first('<form id="child_', '<form id="' . $counter . '_child_', $export);
        $export = str_replace_first('id="_submitchild_', 'id="_submit' . $counter . '_child_', $export);
        $export = str_replace_first('who-id="child_', 'who-id="' . $counter . '_child_', $export);

    }

    $legh2 = substr_count($export, '<form id="mini_');

    for ($x = 0;$x <= $legh2;$x++)
    {
        $counter2 = $counter2 + 1;
        $export = str_replace_first('<form id="mini_', '<form id="' . $counter2 . '_mini_', $export);
        $export = str_replace_first('id="_submitmini_', 'id="_submit' . $counter2 . '_mini_', $export);
        $export = str_replace_first('who-id="mini_', 'who-id="' . $counter2 . '_mini_', $export);

    }

    $export = str_replace("<form", "<form novalidate onsubmit=\"return false\"", $export);

    return $export;
}

function includeFileContent($fileName)
{
    ob_start();
    ob_implicit_flush(false);
    include ($fileName);
    return ob_get_clean();
}

function get_sql_onstart($tagname, $sql)
{
    $CPU_conn = new conn();

    $CONe = $CPU_conn->getDBready();

    $VALUE_all = $CPU_conn->read_sql($sql);

    $VALUE_all = "<$tagname>$VALUE_all</$tagname>";

    return $VALUE_all;
}

function get_json($tagname, $string)
{
    $VALUE_all = everything_in_tags($string, $tagname);
    $VALUE_all = strip_tags($VALUE_all);
    return $VALUE_all;
}

function send_sms($to, $from, $text)
{
    $userx = '';
    $passx = '';

    $text = urlencode($text);
    $from = urlencode($from);
    $url = "http://api.payamak-panel.com/post/Send.asmx/SendSimpleSMS?username=$userx&password=$passx&to=$to&from=$from&text=$text&isflash=false";
    $result = file_get_contents($url);
    return $result;
}
function everything_in_tags($string, $tagname)
{
    $pattern = "#<\s*?$tagname\b[^>]*>(.*?)</$tagname\b[^>]*>#s";
    preg_match($pattern, $string, $matches);
    return $matches[1] ?? '';
}

function str_replace_first($from, $to, $content)
{
    $from = '/' . preg_quote($from, '/') . '/';

    return preg_replace($from, $to, $content, 1);
}

function get_rnd_number($digits)
{
    $ywyw = str_pad(rand(0, intval(pow(10, $digits) - 1)) , $digits, '0', STR_PAD_LEFT);

    $ywyw = str_pad($ywyw, $digits, '0', STR_PAD_LEFT);

    if ($ywyw[0] == 0)
    {
        $ywyw = ltrim($ywyw, '0');
        $ywyw = rand(1, 9) . $ywyw;
    }

    return $ywyw;
}
function get_value($type, $value)
{

    if (isset($type['' . $value . '']))
    {
        $export = $type['' . $value . ''];
    }
    else
    {
        $export = "";
    }

    return $export;
}

function ifdef($type, $value)
{

    if (isset($type))
    {
        $export = $value;
    }
    else
    {
        $export = "";
    }
    return $export;
}

function ifnzero($type, $value)
{
    if ($type != "0" || $type != 0)
    {
        $export = $value;

    }
    else
    {
        $export = "";
    }
    return $export;
}

function ifndef($type, $value)
{

    if (!isset($type))
    {
        $export = $value;
    }
    else
    {
        $export = "";
    }
    return $export;
}

function ifempty($type, $value)
{

    if ($type == "")
    {
        $export = $value;
    }
    else
    {
        $export = "";
    }
    return $export;
}
function ifemptyF($type)
{

    if ($type == "")
    {
        return false;
    }
    else
    {
        return true;
    }
  
}
function ifnempty($type, $value)
{

    if ($type != "")
    {
        $export = $value;
    }
    else
    {
        $export = "";
    }
    return $export;
}

function sanitize_output($buffer)
{

    $search = array(
        '/\>[^\S ]+/s', // strip whitespaces after tags, except space
        '/[^\S ]+\</s', // strip whitespaces before tags, except space
        '/(\s)+/s', // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/'
        // Remove HTML comments
        
    );

    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

function replace(&$array, $replaces)
{
    foreach ($array as $k => $v)
    {
        $new_k = replace_word($k, $replaces);
        if (is_array($v))
        {
            replace($v, $replaces);
        }
        else
        {
            $v = replace_word($v, $replaces);
        }
        $array[$new_k] = $v;
        if ($new_k != $k)
        {
            unset($array[$k]);
        }
    }
}

function replace_word($word, $replaces)
{
    if (array_key_exists($word, $replaces))
    {
        $word = str_replace($word, $replaces[$word], $word);
    }
    return $word;
}

function print_like_printf($html_error_msg, $obj_if_uniques, $replaces)
{

    $all_replace_ihave = explode(";", $replaces);

    for ($i = 0;$i <= strlen($all_replace_ihave) + 1;$i++)
    {

        $html_error_msg = str_ireplace('{{' . $i . '}}', get_value($obj_if_uniques, $all_replace_ihave[$i]) , $html_error_msg);

    }

    return $html_error_msg;
}

function encrypt($pure_string, $encryption_key)
{
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string) , MCRYPT_MODE_ECB, $iv);
    return $encrypted_string;
}

function decrypt($encrypted_string, $encryption_key)
{
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
    return $decrypted_string;
}

