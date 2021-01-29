<?php


class CommandEntity extends Entity
{
    protected $idCommande,
            $idArticle,
            $idStatut,
            $dateCommande,
            $statut;

    /**
     * @return mixed
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * @param mixed $idCommande
     */
    public function setIdCommande($idCommande): void
    {
        $this->idCommande = $idCommande;
    }

    /**
     * @return mixed
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * @param mixed $idArticle
     */
    public function setIdArticle($idArticle): void
    {
        $this->idArticle = $idArticle;
    }

    /**
     * @return mixed
     */
    public function getIdStatut()
    {
        return $this->idStatut;
    }

    /**
     * @param mixed $idStatut
     */
    public function setIdStatut($idStatut): void
    {
        $this->idStatut = $idStatut;
    }

    /**
     * @return mixed
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * @param mixed $dateCommande
     */
    public function setDateCommande($dateCommande): void
    {
        $this->dateCommande = $dateCommande;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut): void
    {
        $this->statut = $statut;
    }



}