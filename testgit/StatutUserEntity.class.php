<?php


class StatutUserEntity extends Entity
{
    protected $idStatut,
            $titre;

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