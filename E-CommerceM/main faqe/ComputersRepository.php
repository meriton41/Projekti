<?php
    include_once('DatabaseConnection.php');

    class ComputersRepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }
        
        public function insertPC($computer){
            $conn = $this->connection;
        
            $emri = $computer->getEmri();
            $ngjyra =$computer->getNgjyra();
            $cmimi = $computer->getCmimi();
            $memoria = $computer->getMemoria();
            $img = $computer->getImg();
            $pershkrimi = $computer->getPershkrimi();
            $edit = $computer->getEdit();

            $sql = "INSERT INTO computer(Emri, Ngjyra, Cmimi,Memoria,img,pershkrimi,edit) VALUES (?,?,?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $ngjyra, $cmimi, $memoria, $img, $pershkrimi, $edit]);

            echo "<script>alert('Paisja u shtua me sukses!')</script>";
        }

        public function getAllComputers(){
            $conn = $this->connection;

            $sql = "SELECT * FROM computer";
            $statement = $conn->query($sql);

            $computer = $statement->fetchAll();
            return $computer;
        }
        public function editComputer( $emri, $ngjyra, $cmimi, $memoria, $img, $pershkrimi, $edit){
            $conn = $this->connection;
            $sql = "UPDATE computer SET Emri=?,Ngjyra=?, Cmimi=?, Memoria=?,img=?,pershkrimi=?,edit=?, WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([ $emri, $ngjyra, $cmimi, $memoria, $img, $pershkrimi, $edit]);

            echo "<script>alert('Paisja u ndryshua me sukses!')</script>";

        }

        function deleteComputer($P_id){
            $conn = $this->connection;

            $sql = "DELETE FROM computer WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$P_id]);
        }

        function getComputerByID($P_id){
            $conn = $this->connection;

            $sql = "SELECT * FROM computers&servers WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$P_id]);
            $computer=$statement->fetch();

            return $computer;
        }

    }

?>