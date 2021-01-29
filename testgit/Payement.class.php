<?php


class Payement extends Entity
{
    protected $idPayement,
            $idArticle,
            $idClient;

    /**
     * @return mixed
     */
    public function getIdPayement()
    {
        return $this->idPayement;
    }

    /**
     * @param mixed $idPayement
     */
    public function setIdPayement($idPayement): void
    {
        $this->idPayement = $idPayement;
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
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $idClient
     */
    public function setIdClient($idClient): void
    {
        $this->idClient = $idClient;
    }



}