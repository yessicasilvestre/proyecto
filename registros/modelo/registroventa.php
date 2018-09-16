<?php
class cliente{
    private $id;
    private $nit;
    private $razonsocial;
    public function __construct($id,$ni,$rs){
        $this->setId($id);
        $this->setNit($nit);
         $this->setRazonsocial($rs);
    }
    public function setInt($i){
        $this->id=$i;
    }
      public function setNit($ni){
        $this->nit=$ni;
    }
          public function setRazonsocial($rs){
        $this->razonsocial=$rs;
    }
        public function getRazonsocial($rs){
        return $this->razonsocial=$rs;
    }
    public function grabarCliente(){
include("conexion.php");
$db=new conexion();
$sql=$db->query("insert into cliente(razonsocial,nit,ci)")
values('$this->')

    }
}