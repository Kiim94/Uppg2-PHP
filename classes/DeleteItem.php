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

            //utför handlingen som bestämdes i stmt ovan
            $stmt->execute([
                //:id = placeholder för id's värde
                ":id" => $id
            ]);
        }
    }
?>