<?php


class ComputerEntity extends ArticleEntity
{
    protected $idComputer,
            $idArticle,
            $carteReseau,
            $tailleDisque;

    /**
     * @return mixed
     */
    public function getIdComputer()
    {
        return $this->idComputer;
    }

    /**
     * @param mixed $idComputer
     */
    public function setIdComputer($idComputer): void
    {
        $this->idComputer = $idComputer;
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
    public function getCarteReseau()
    {
        return $this->carteReseau;
    }

    /**
     * @param mixed $carteReseau
     */
    public function setCarteReseau($carteReseau): void
    {
        $this->carteReseau = $carteReseau;
    }

    /**
     * @return mixed
     */
    public function getTailleDisque()
    {
        return $this->tailleDisque;
    }

    /**
     * @param mixed $tailleDisque
     */
    public function setTailleDisque($tailleDisque): void
    {
        $this->tailleDisque = $tailleDisque;
    }



}