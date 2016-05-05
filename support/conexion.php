<?php 
//date_default_timezone_set('America/Mexico_City');
//srand(time(NULL));
class conexion{
    var $conect;

    function __construct(){
        $this->conect = NULL;
    }

    public function getConnection(){
        $this->conect = new PDO("mysql:host=201.140.110.40;port=3306;dbname=tamatu2;charset=utf8", "root", "woveboWU04", array(PDO::ATTR_PERSISTENT => true));
        $this->conect->query("SET CHARACTER SET utf8");
        $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function initSession($usuario, $pass){
        $query = "select * from usuario where usuario='$usuario' and pass='$pass'";
        $res = $this->getResult($query);
        if(!empty($res)){
            if($res['usuario'] == $usuario && $res['pass'] == $pass){
                $_SESSION['isStarted'] = TRUE;
                $_SESSION['idUsuario'] = $res['idUsuario'];
                $_SESSION['perfil'] = $res['perfil'];
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function endSession(){
        session_start();
        session_destroy();
        echo "finish!";
    }

    public function makeInsertUpdate($query){
        if(is_null($this->conect)){
            $this->getConnection();
        }
        try{
            $this->conect->beginTransaction();
            $this->conect->exec($query);
            $this->conect->commit();
            return true;
        }catch(PDOException $e){
            $this->conect->rollBack();
            echo "Fallo: " . $e->getMessage();
            return false;
        }
    }

    public function getResult($query){
        if(is_null($this->conect)){
            $this->getConnection();
        }
        $statement = $this->conect->prepare($query);
        $statement->execute();
        try{
            $imprime = $statement->fetch();
            if(!empty($imprime)){
                return $imprime;
            }else{
                return NULL;
            }
        }catch(PDOException $e){
            $this->conect->rollBack();
            return "Fallo: " . $e->getMessage();
        }
    }

    public function getResults($query){
        if(is_null($this->conect)){
            $this->getConnection();
        }
        $statement = $this->conect->prepare($query);
        $statement->execute();
        try{
            $imprime = $statement->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($imprime)){
                return $imprime;
            }else{
                return NULL;
            }
        }catch(PDOException $e){
            $this->conect->rollBack();
            return "Fallo: " . $e->getMessage();
        }
    }
}
?>