<?php 

    include('Utils/db.php');
    class Mdl_module
    {
        public static function get_data()
        {
           $mo = db_connect()->query('SELECT * FROM modules')->fetchAll();
           return $mo;
        }
        public function save_data()
        {
            # code...
        }
        public function set_data()
        {
            # code...
        }
        public function detele_data()
        {
            # code...
        }
    }
?>
