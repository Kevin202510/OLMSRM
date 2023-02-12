<?php 
    class DBCRUDAPI{
        public $que;
        private $servername='localhost';
        private $username='root';
        private $password='';
        private $dbname='lmsrm';
        private $result=array();
        private $mysqli='';

        public function __construct(){
            $this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        }

        public function insert($table,$para=array()){
            $table_columns = implode(',', array_keys($para));
            $table_value = implode("','", $para);

            $sql="INSERT INTO $table($table_columns) VALUES('$table_value')";

            $result = $this->mysqli->query($sql);
        }

        public function update($table,$para=array(),$id){
            $args = array();

            foreach ($para as $key => $value) {
                $args[] = "$key = '$value'"; 
            }

            $sql="UPDATE  $table SET " . implode(',', $args);

            $sql .=" WHERE $id";

            $result = $this->mysqli->query($sql);
        }

        public function delete($table,$id){
            $sql="DELETE FROM $table";
            $sql .=" WHERE $id ";
            $sql;
            $result = $this->mysqli->query($sql);
        }

        public $sql;

        public function select($table,$rows="*",$where = null){
            if ($where != null) {
                $sql="SELECT $rows FROM $table WHERE $where";
            }else{
                $sql="SELECT $rows FROM $table";
            }

            $this->sql = $result = $this->mysqli->query($sql);
        }

        public function selectleftjoin($table,$table1,$attributename1,$attributename,$where){
            $sql = "SELECT * FROM $table LEFT JOIN $table1 ON $table1.$attributename1=$table.$attributename WHERE $where";

            $this->sql = $result = $this->mysqli->query($sql);
        }

        public function selectleftjoin3(){
            $sql = "SELECT * FROM `reservations` LEFT JOIN `services` ON services.service_id = reservations.service_id LEFT JOIN `facilities` ON facilities.id = reservations.facility_id LEFT JOIN `users` ON users.id = reservations.customer_id";

            $this->sql = $result = $this->mysqli->query($sql);
        }

        public function selectleftjoin3where($reservation_id){
            $sql = "SELECT * FROM `reservations` LEFT JOIN `services` ON services.service_id = reservations.service_id LEFT JOIN `facilities` ON facilities.id = reservations.facility_id LEFT JOIN `users` ON users.id = reservations.customer_id WHERE res_id = $reservation_id";

            $this->sql = $result = $this->mysqli->query($sql);
        }

        public function __destruct(){
            $this->mysqli->close();
        }

        public function select2(){
            $sql = "SELECT * FROM `users` WHERE `permission_id`=3";

            $this->sql = $result = $this->mysqli->query($sql);
        }

        public function select3($customer_id){
            $sql = "SELECT * FROM reservations LEFT JOIN entrances on entrances.reservation_id = reservations.res_id LEFT JOIN users ON users.id = reservations.customer_id WHERE reservations.customer_id = $customer_id";

            $this->sql = $result = $this->mysqli->query($sql);
        }

        public function select4($id){
            $sql = "SELECT * FROM reservations LEFT JOIN entrances on entrances.reservation_id = reservations.res_id WHERE entrances . id =$id";

            $this->sql = $result = $this->mysqli->query($sql);
        }

        public function select45(){
            $sql = "SELECT * FROM reservations LEFT JOIN entrances on entrances.reservation_id = reservations.res_id ";

            $this->sql = $result = $this->mysqli->query($sql);
        }

        public function select49($ids){
            $sql = "SELECT * FROM entrances LEFT JOIN reservations on reservations.res_id = entrances.reservation_id WHERE entrances . id =$ids";

            $this->sql = $result = $this->mysqli->query($sql);
        }


        public function select41(){
            $sql = "SELECT * FROM `sales` LEFT JOIN users ON users.id = sales.user_id LEFT JOIN reservations ON reservations.res_id=sales.reservation_id";

            $this->sql = $result = $this->mysqli->query($sql);
        }

    }
?>