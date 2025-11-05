<?php 
class database {
    //properti
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "db_oop";
    public $connect;

    function __construct(){
        $this->connect = mysqli_connect($this->host,
        $this->username, $this->password);
        mysqli_select_db($this->connect, $this->database);
    }

    function tampilData(){
        $data = mysqli_query($this->connect, "SELECT * FROM tb_user");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $rows;
    }

    function tambahData($nama,$alamat,$nohp){
        mysqli_query($this->connect,"INSERT INTO tb_user VALUES (NULL, '$nama', '$alamat', '$nohp')");
    }

    function editData($id){
        $data = mysqli_query($this->connect, "SELECT * FROM tb_user WHERE id='$id'");
        $row = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $row;    
    }

    function updateData($id,$nama,$alamat,$nohp){
        mysqli_query($this->connect,"UPDATE tb_user SET nama = '$nama', alamat = '$alamat', nohp = '$nohp'
        WHERE tb_user.id = '$id'");
    }
    
    function hapusData($id){
        mysqli_query($this->connect,"DELETE FROM tb_user WHERE tb_user.`id` ='$id'");
    }
}
?>