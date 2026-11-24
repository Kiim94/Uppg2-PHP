<?php
    class ReadItem{
        //privat databasanslutning
        private PDO $pdo;

        public function __construct(PDO $pdo){
            $this->pdo = $pdo;
        }

        public function getAllItems(){
            $stmt = $this->pdo->query("SELECT id, name, description, priority, created_at FROM bucketitem");
            
            //PDO::FETCH_ASSOC = hämtar resultat som en associativ array. 
            //Gör det möjligt att komma åt kolumnnamn istället för nummer
            // t.ex $user["name"] istället för $user[1]
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>