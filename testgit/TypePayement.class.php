<?php


class TypePayement extends Entity
{
    protected $idPayement,
            $titre;

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
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre): void
    {
        $this->titre = $titre;
    }



}