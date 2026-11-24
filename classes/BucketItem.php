<?php
class BucketItem
{
    private int $id;
    private string $name;
    private string $description;
    private int $priority;
    private DateTime $created_at;

    public function __construct(string $name, string $description, int $priority)
    {
        //hade innan $this->name = $name; 
        //gick att göra på viset nedan för att validera när nytt objekt skapas
        $this->setName($name);
        $this->setDescription($description);
        $this->setPriority($priority);
    }

    //getters
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPriority()
    {
        return $this->priority;
    }

    //getters för id och created_at: ska inte ha setters för dessa
    public function getId()
    {
        return $this->id;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    //setters
    public function setName(string $name){
        //trimma namnet som ska sparas så att det inte är fullt av blankspace
        $trimName = trim($name);

        if ($trimName == "") {
            throw new Exception("Du kan inte ha ett så litet namn.");
        }
        //strlen: räknar antal tecken. används för att jämföra om namnet är kortare än ett tecken
        if (strlen($trimName) > 200) {
            throw new Exception("Whoa! Behövs ett sådant långt namn?");
        }
        //ucfirst(): gör så att första bokstaven alltid blir stor
        $this->name = ucfirst($trimName);
    }
    public function setDescription(string $description){
        if (strlen($description) > 500) {
            throw new Exception("Behöver du en så lång beskrivning?");
        }
        $this->description = trim($description);
    }
    public function setPriority(int $priority){
        if ($priority < 1 || $priority > 5) {
            throw new Exception("Välj ett tal mellan 1 och 5 för prioriteringsnivå.");
        }
        $this->priority = $priority;
    }
}
?>