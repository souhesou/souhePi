<?php

namespace RefugieBundle\Entity;

/**
 * Refugie
 */
class Refugie
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var int
     */
    private $age;

    /**
     * @var string
     */
    private $origine;

    /**
     * Refugie constructor.
     * @param string $nom
     * @param string $prenom
     * @param int $age
     * @param string $origine
     */
    public function __construct($nom, $prenom, $age, $origine)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->origine = $origine;
    }


    /**
     * Set id
     *
     * @param int $id
     *
     * @return Refugie
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Refugie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Refugie
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set age
     *
     * @param int $age
     *
     * @return Refugie
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set origine
     *
     * @param string $origine
     *
     * @return Refugie
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;

        return $this;
    }

    /**
     * Get origine
     *
     * @return string
     */
    public function getOrigine()
    {
        return $this->origine;
    }


}

