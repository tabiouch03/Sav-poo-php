<?php

class Produit
{

    private $id;
    private $nomProduit;
    private $descriptionProduit;
    private $quatiteProduit;
    private $isAvaible;
    private $prixProduit;


    /* SETTERS */

    /**
     * set value $id
     * type: integer
     */
    public function setId(int $id){
        $this->id = $id;
    }

        /**
     * set value $nomProduit
     * type: string
     */
    public function setNomProduit(string $nomProduit){
        $this->nomProduit = $nomProduit;
    }

        /**
     * set value $descriptionProduit
     * type: string
     */
    public function setDescriptionProduit(string $descriptionProduit){
        $this->descriptionProduit = $descriptionProduit;
    }

        /**
     * set value $quatiteProduit
     * type: integer
     */
    public function setQuatiteProduit(int $quatiteProduit){
        $this->quatiteProduit = $quatiteProduit;
    }

        /**
     * set value $isAvaible
     * type: boolean
     */
    public function setIsAvaible(bool $isAvaible){
        $this->isAvaible = $isAvaible;
    }

        /**
     * set value $id
     * type: integer
     */
    public function setPrixProduit(int $prixProduit){
        $this->prixProduit = $prixProduit;
    }



    /* GETTERS */

    /**
     * return $id
     * type: integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * return $NomProduit
     * type: string
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * return $descriptionProduit
     * type: text
     */
    public function getDescriptionProduit()
    {
        return $this->descriptionProduit;
    }

    /**
     * return $quatiteProduit
     * type: integer
     */
    public function getquatiteProduit()
    {
        return $this->quatiteProduit;
    }

    /**
     * return $isAvaible
     * type: boolean
     */
    public function getIsAvaible()
    {
        return $this->isAvaible;
    }

    /**
     * return $prixProduit
     * type: integer
     */
    public function getPrixProduit()
    {
        return $this->prixProduit;
    }
}
