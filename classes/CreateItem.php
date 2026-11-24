<?php
    class CreateItem{
        //privat databasanslutning
        private PDO $pdo;

        public function __construct(PDO $pdo){
            $this->pdo = $pdo;
        }

        public function create(string $name, string $description, string $priority){
            //hade tidigare $_POST["name"] osv här. Onödigt, då värden redan skickas in som parametrar
            $item = new BucketItem($name, $description,$priority);

            $sql = "INSERT INTO bucketitem(name, description, priority) VALUES (:name, :description, :priority)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                //:name = placeholder för värde
                ":name"=>$item->getName(),
                ":description" => $item->getDescription(),
                ":priority" => $item->getPriority()
            ]);
        }
    }
?>