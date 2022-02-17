<?php
// get $set_to_switcher from modules
if (!defined('24647ETW$@^&@%@%*#'))
{
    die('error 24');
}

class switcher_index
{

    private $switcher_case;
    private $data_string;
    private $tablename;
    private $not_user;
    private $user_level;
    private $user_id;
    private $o_db;
    public function getswitcher_nav($switcher_case, $not_user, $user_level, $user_id, $o_db)
    {
        $this->not_user = $not_user;
        $this->user_level = $user_level;
        $this->user_id = $user_id;

        $this->o_db = urldecode($o_db);
        include "./switcher/lanq_index.php";

        include "./modules/menu_nav.php";

        return $app_nav;

    }

    public function getswitcher_case($switcher_case, $data_string, $tablename, $not_user, $user_level, $user_id, $o_db)
    {
        $html_final = "";
        $this->switcher_case = $switcher_case;
        $this->data_string = $data_string;
        $this->tablename = $tablename;
        $this->not_user = $not_user;
        $this->user_level = $user_level;
        $this->user_id = $user_id;
        $this->o_db = urldecode($o_db);

        include "./switcher/switchers.php";
        include "./switcher/security.php";

        $this->data_string = str_ireplace($replacevalue2, $findkey2, $this->data_string);
        $this->tablename = str_ireplace($replacevalue2, $findkey2, $this->tablename);
        $this->o_db = str_ireplace($replacevalue2, $findkey2, $this->o_db);
        $this->switcher_case = preg_replace("/\([^)]+\)/", "", $this->switcher_case);
        $path = $this->switcher_case;
        if (strpos($path, '/') !== false)
        {
            $q_path = explode("/", $path);
            $this->switcher_case = $q_path[0] ? ? '';
            for ($x_rothing = 1;$x_rothing <= count($q_path);$x_rothing++)
            {
                $
                {
                    "_q$x_rothing"
                } = $q_path[$x_rothing] ? ? '';
            }

        }

        include "./modules/" . $this->switcher_case . ".php";

        $html_final = str_ireplace($findkey, $replacevalue, $html_final);

        if (isset($Access_p) && $Access_p == "1")
        {
            $html_final = "شما مجاز نیستید - برای دسترسی به این ماژول";
            $Access_p = "";
        }

        return $html_final;

    }

}

