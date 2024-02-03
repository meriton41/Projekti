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

            $sql = "INSERT INTO computer(emri, ngjyra, cmimi,memoria,img,pershkrimi,edit) VALUES (?,?,?,?,?,?,?)";

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
        public function editComputer($id, $emri, $ngjyra, $cmimi, $memoria, $img, $pershkrimi, $edit){
            $conn = $this->connection;
            $sql = "UPDATE computer SET emri=?, ngjyra=?, cmimi=?, memoria=?, img=?, pershkrimi=?, edit=? WHERE P_id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $ngjyra, $cmimi, $memoria, $img, $pershkrimi, $edit, $id ]);

            echo "<script>alert('Paisja u ndryshua me sukses!')</script>";

        }

        function deleteComputer($id){
            $conn = $this->connection;

            $sql = "DELETE FROM computer WHERE P_id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        function getComputerByID($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM computer WHERE P_id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $computer=$statement->fetch();

            return $computer;
        }

    }

?>