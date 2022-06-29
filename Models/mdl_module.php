<?php 

    include('Utils/db.php');
    class Mdl_module
    {
        public static function get_data()
        {
           $pdo = db_connect();
           $q = 'SELECT * FROM modules';
           return $pdo->query($q)->fetchAll();
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
