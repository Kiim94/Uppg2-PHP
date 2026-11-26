<?php
//fil ska användas, men bara en gång. __DIR__ för att sökvägen till filen i rätt mapp ska vara mer tillförlitlig
require_once __DIR__ . "/../../database/db.php"; //databas connection. plats är annorlunda för local
require_once __DIR__ . "/classes/BucketItem.php"; //bucket-item klass

//crud funktioner
require_once __DIR__ . "/classes/CreateItem.php"; //skapa en item
require_once __DIR__ . "/classes/DeleteItem.php"; //radera en item
require_once __DIR__ . "/classes/ReadItem.php"; //skriv ut items

//vill visa felmeddelande på ett bättre ställe än högst upp i hörnet
$errorMsg = "";

//lite validering för skapa/radera
if (isset($_POST["name"], $_POST["description"], $_POST["priority"])) {
    try {
        //variabler för vad som ska skickas
        $name = $_POST["name"];
        $description = $_POST["description"];
        $priority = $_POST["priority"];

        //skapa ny CreateItem-objekt. Skicka databasanslutning (annars blir den olycklig)
        $create = new CreateItem($pdo);
        //kalla på funktion för att skapa objektet: skicka med variabler
        $create->create($name, $description, $priority);

        //upptäckte: utan nedan, vid omladdning, skapas ett exakt likadant item som tidigare.
        //omdirigera till samma sida - undviker att formuläret skickas igen
        header("Location: bucketlist-site.php");
        exit;

    } catch (Exception $e) {
        $errorMsg = "Något gick fel: " . $e->getMessage();
    }
}

if (isset($_POST["delete_id"])) {
    $id = $_POST["delete_id"];

    //kontroll att $id är ett nummer
    if (is_numeric($id)) {
        //klassen förväntar sig en databasanslutning
        $delete = new DeleteItem($pdo);
        //ange parameter, $id
        $delete->delete($id);
        header("Location: bucketlist-site.php");
        exit;
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Bucket-List</title>
</head>

<body>
    <?php include "./junkDrawer/meny.php" ?>
    <main>
        <h1>Bucket-List</h1>
        <section id="section-form">
            <h2>Fyll i ny bucketlist-item</h2>
            <form method="POST" class="form">
                <div class="div-input">
                    <label for="name">Namn på saken</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="div-input">
                    <label for="description">Beskrivning: varför denna sak?</label>
                    <textarea name="description" id="description"></textarea>
                </div>
                <div class="div-input">
                    <label for="priority">Prioritet</label>
                    <select id="priority" name="priority" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="div-input">
                    <?php 
                    //visa felmeddelande, om ett sådant dyker upp
                    if (!empty($errorMsg)){
                        //htmlspecialchars: konverterar sådant som < > till &lt; och &gt;
                        echo "<p class='errorMessage'>" . htmlspecialchars($errorMsg) . "</p>";
                    }
                    ?>
                    <button type="submit">Spara</button>
                </div>

            </form>
        </section>

        <section>
            <h2>Min Bucket-List</h2>
            <div class="table-div">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Namn</th>
                            <th>Beskrivning</th>
                            <th>Prioritet</th>
                            <th>Skapad</th>
                            <th>Radera</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //skapa ett nytt readItem, alltså för att skriva ut/visa
                        $item = new ReadItem($pdo);
                        //kalla på funktion för att skriva ut, spara i variabel
                        $items = $item->getAllItems(); ?>

                        <!--en foreach: skriv ut för varje sak som finns i listan-->
                        <?php foreach ($items as $row): ?>
                            <tr>
                                <!-- <=?: kortform av echo -->
                                <td><?= htmlspecialchars((string) $row["id"]) ?></td>
                                <td><?= htmlspecialchars($row["name"]) ?></td>
                                <td><?= htmlspecialchars($row["description"]) ?></td>
                                
                                <!--en sträng pga att htmlspecialchars förväntar sig en sträng. 
                                Men utan htmlspecialchars så är det möjligt för utomstående att leka med detta-->
                                <td><?= htmlspecialchars((string) $row["priority"]) ?></td>
                                <td><?= htmlspecialchars($row["created_at"]) ?></td>
                                <td>
                                    <form method="post">
                                        <input type="hidden" name="delete_id" value="<?= htmlspecialchars($row["id"]) ?>">
                                        <button type="submit" name="delete">Ta bort</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </section>

    </main>
    <footer>
        <p>mobr2500@student.miun.se</p>
        <p>Uppgift 2: Intro till PHP</p>
    </footer>
</body>

</html>