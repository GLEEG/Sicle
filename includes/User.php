<?php
class User{
    private int $id;
    private string $username;
    private string $email;
    private float $weight;
    private int $height;
    private DateTime $inscriptionDate;
    private int $age;
    private string $gender;
    private string $weightGoal;
    // private bool $athletic;
    private int $siCoins;
    private bool $idAdmin;


    public function getId(){
        return $this->id;
    }

    public function getUsername(){
        return $this->username;
    }
    public function setUsername($username){
        if(is_string($username)){
            $this->gender = $username;
        }else{
            return "Value must be a string";
        }
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        if(is_string($email)){
            $this->gender = $email;
        }else{
            return "Value must be a string";
        }
    }

    public function getWeight(){
        return $this->weight;
    }
    public function setWeight($weight){
        $weight = (float) $weight;
        $this->weight = $weight;
    }

    public function getHeight(){
        return $this->height;
    }
    public function setHeight($height){
        $height = (int) $height;
        $this->height = $height;
    }

    public function getInscriptionDate(){
        return $this->inscriptionDate;
    }
    // Format String ou Date ????
    public function setInscriptionDate($inscriptionDate){
        $inscriptionDate = DateTime::createFromFormat('Y-m-d H:i:s', $inscriptionDate);
        if ($inscriptionDate !== false) {
            $this->inscriptionDate = $inscriptionDate;
        } else {
            return "Value must be a date";
        }
    }

    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $age = (int) $age;
        $this->age = $age;
    }

    public function getGender(){
        return $this->gender;
    }
    public function setGender($gender){
        if(is_string($gender)){
            $this->gender = $gender;
        }else{
            return "Value must be a string";
        }
    }

    public function getWeightGoal(){
        return $this->weightGoal;
    }
    public function setWeightGoal($weightGoal){
        $weightGoal = (float) $weightGoal;
        $this->gender = $weightGoal;
    }

    public function getSiCoins(){
        return $this->siCoins;
    }
    public function setSiCoins($siCoins){
        $siCoins = (int) $siCoins;
        $this->siCoins = $siCoins;
    }

    public function getIsAdmin(){
        return $this->isAdmin;
    }
    public function setIsAdmin($isAdmin){
        $isAdmin = (bool) $isAdmin;
        $this->isAdmin = $isAdmin;
    }

    public function hydrate(array $data){
        if (isset($donnees['username'])){
            $this->setUsername($donnees['username']);
        }
        if (isset($donnees['email'])){
            $this->setEmail($donnees['email']);
        }
        if (isset($donnees['weight'])){
            $this->setWeight($donnees['weight']);
        }
        if (isset($donnees['height'])){
            $this->setHeight($donnees['height']);
        }
        if (isset($donnees['inscription_date'])){
            $this->setInscriptionDate($donnees['inscription_date']);
        }
        if (isset($donnees['age'])){
            $this->setAge($donnees['age']);
        }
        if (isset($donnees['gender'])){
            $this->setUsername($donnees['gender']);
        }
        if (isset($donnees['weight_goal'])){
            $this->setWeightGoal($donnees['weight_goal']);
        }
        if (isset($donnees['sicoins'])){
            $this->setSiCoins($donnees['sicoins']);
        }
        if (isset($donnees['is_admin'])){
            $this->setIsAdmin($donnees['is_admin']);
        }
    }
}