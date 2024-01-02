<!-- Esta es la clase de la pregunta cuando el campo en la tabla de datos es autoincrementable se define aca la variable -->
<?php 
class Usuario{
    # Atributos
    private $dbh;
    protected $ID;
    protected $NombreUsuario;
    protected $Password;
    protected $ConfirmPass;

    # Sobrecarga de Constructores
    public function __construct()
    {
        try {
            $this->dbh = DataBase::connection();
            $a = func_get_args();
            $i = func_num_args();
            if (method_exists($this, $f = '__construct' . $i)) {
                call_user_func_array(array($this, $f), $a);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function __construct4($ID, $NombreUsuario, $Password, $ConfirmPass)
    {
        $this->ID = $ID;
        $this->NombreUsuario = $NombreUsuario;
        $this->Password = $Password;
        $this->ConfirmPass = $ConfirmPass;
    }

    public function __construct3($NombreUsuario, $Password, $ConfirmPass)
    {
        $this->NombreUsuario = $NombreUsuario;
        $this->Password = $Password;
        $this->ConfirmPass = $ConfirmPass;
    }

    # Métodos: $ID
    public function setID($ID)
    {
        $this->ID = $ID;
    }
    public function getID()
    {
        return $this->ID;
    }


    # Métodos: $NombreUsuario
    public function setNombreUsuario($NombreUsuario)
    {
        $this->NombreUsuario = $NombreUsuario;
    }
    public function getNombreUsuario()
    {
        return $this->NombreUsuario;
    }

    # Métodos: $Password
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }
    public function getPassword()
    {
        return $this->Password;
    }

    # Métodos: $ConfirmPass
    public function setConfirmPass($ConfirmPass)
    {
        $this->ConfirmPass = $ConfirmPass;
    }
    public function getConfirmPass()
    {
        return $this->ConfirmPass;
    }

    public function RegistrarUsuario()
    {
        try {
            $sql = 'INSERT INTO usuarios VALUES (
                            :ID,
                            :NombreUsuario,
                            :Password,
                            :ConfirmPass
                        )';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('ID', $this->getID());
            $stmt->bindValue('NombreUsuario', $this->getNombreUsuario());
            $stmt->bindValue('Password', sha1($this->getPassword()));
            $stmt->bindValue('ConfirmPass', sha1($this->getConfirmPass()));
            $stmt->execute();
        }catch (Exception $e) {
        die($e->getMessage());}
        
    }
    

}

?>



<?php 


?>