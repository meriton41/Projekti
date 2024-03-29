<?php
    include_once('DatabaseConnection.php');

    class PaisjetRepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        //kur kemi parametra kryesisht e pergatisim sql per marrjen e parametrave me prepare
        //dhe e bejme lidhjen e parametrave permes metodes execute
        //Pikepyetjet neper queries (?) zevendesohen nga parametrat te metoda execute
        //kurse pa parametra, vazhdojme direkt me metoden query
        //metodat fetch/fetchAll perdoren kur duam te kthejme/marrim ndonje vlere
        


        public function insertPaisja($paisja){
            $conn = $this->connection;

            $emri = $paisja->getEmri();
            $ngjyra =$paisja->getNgjyra();
            $cmimi = $paisja->getCmimi();
            $memoria = $paisja->getMemoria();
            $img = $paisja->getImg();
            $pershkrimi = $paisja->getPershkrimi();
            $edit = $paisja->getEdit();

            $sql = "INSERT INTO paisja(Emri, Ngjyra, Cmimi,Memoria,img,pershkrimi,edit) VALUES (?,?,?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $ngjyra, $cmimi, $memoria, $img, $pershkrimi, $edit]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        public function getAllPaisjet(){
            $conn = $this->connection;

            $sql = "SELECT * FROM paisja";
            $statement = $conn->query($sql);

            $paisjet = $statement->fetchAll();
            return $paisjet;
        }


        //Pjesa tjeter e funksioneve CRUD: 
        //dergohet parametri ne baze te cilit e identifikojme paisjen (ne kete rast id, por mund te jete edhe ndonje atribut tjeter) dhe parametrat e tjere qe mund t'i ndryshojme (emri, mbiemri, etj...)
        public function editPaisja($id, $emri, $ngjyra, $cmimi, $memoria,$img,$pershkrimi,$edit){
            $conn = $this->connection;
            $sql = "UPDATE paisja SET Emri=?, Ngjyra=?, Cmimi=?, Memoria=?, img=?, pershkrimi=?, edit=? WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $ngjyra, $cmimi, $memoria, $img, $pershkrimi, $edit, $id]);

            echo "<script>alert('U ndryshua me sukses!')</script>";

        }

        //delete

        function deletePaisja($id){
            $conn = $this->connection;

            $sql = "DELETE FROM paisja WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        //shtese per update: merr studentin ne baze te Id

        function getPaisjaById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM paisja WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $paisja=$statement->fetch();

            return $paisja;
        }

    }

?>