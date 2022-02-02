<?php

// Ma classe s'apelle personnage
class Personnage {

    // La propriété id est privée, je ne peux pas la modifier ou la lire directement en dehors de cette classe
    private string $id;
    private string $nom;
    private int $x;
    private int $y;

    // Constructeur de ma classe permettant de définir des valeurs par défaut lorsqu'elle est instanciée
    public function __construct() {
        $this->nom = "Nom par défaut";
        $this->x = 0;
        $this->y = 0;
    }

    // Méthode permettant de déplacer le personnage vers la droite
    public function walkRight() {
        $this->x += 1;
    }

    // Méthode permettant de déplacer le personnage vers la gauche
    public function walkLeft() {
        $this->x -= 1;
    }

    // Méthode permettant de déplacer le personnage vers le haut
    public function walkTop() {
        $this->y -= 1;
    }

    // Méthode permettant de déplacer le personnage vers le bas
    public function walkBottom() {
        $this->x += 1;
    }

    /**
     * @param $id
     * @return void
     */
    public function setId($id):void {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId():string {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNom():string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return void
     */
    public function setNom(string $nom):void
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getX():int
    {
        return $this->x;
    }

    /**
     * @param int $x
     * @return void
     */
    public function setX(int $x):void
    {
        $this->x = $x;
    }

    /**
     * @return int
     */
    public function getY():int
    {
        return $this->y;
    }

    /**
     * @param int $y
     * @return void
     */
    public function setY($y):void
    {
        $this->y = $y;
    }


} 