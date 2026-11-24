<?php
    class DeleteItem{
        //privat databasanslutning
        private PDO $pdo;

        public function __construct(PDO $pdo){
            $this->pdo = $pdo;
        }

        public function delete(int $id){
            //:id = placeholder, tillfällig platshållare för värdet att jämföra med
            $stmt = $this->pdo->prepare("DELETE FROM bucketitem WHERE id = :id");

            $stmt->execute([
                ":id" => $id
            ]);
        }
    }
?>