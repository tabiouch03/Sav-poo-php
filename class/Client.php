<?php

class Client
{

    private $id;
    private $nom;
    private $numeroClient;
    private $adresse;
    private $telephone;
    private $mail;




    public function __construct(array $paramsClient)
    {
        $this->hydrate($paramsClient);
    }

    public function hydrate(array $paramsClient)
    {
        foreach ($paramsClient as $key => $value) {
            $setter = "set" . ucfirst($key);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
    }


    /* GETTERS */

    /**
     * return $id
     * type : integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * return $nom
     * type : string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * return $numeroClient
     * type : integer
     */
    public function getNumeroClient()
    {
        return $this->numeroClient;
    }

    /**
     * return $adresse
     * type : string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * return $telephone
     * type : integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * return $mail
     * type : string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /* SETTERS */

    /**
     * set id
     * type : integer
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * set nom
     * type : string
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * set numeroClient
     * type : integer
     */
    public function setNumeroClient(int $numeroClient)
    {
        $this->numeroClient = $numeroClient;
    }

    /**
     * set adresse
     * type : string
     */
    public function setAdresse(string $adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * set telephone
     * type : integer
     */
    public function setTelephone(int $telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * set mail
     * type : string
     */
    public function setMail(string $mail)
    {
        $this->mail = $mail;
    }
}

