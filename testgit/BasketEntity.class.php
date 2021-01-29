<?php


class BasketEntity extends Entity
{
    protected $id_pannier,
            $id_client,
            $id_article,
            $id_payement;

    /**
     * @return int
     */
    public function getIdPannier()
    {
        return $this->id_pannier;
    }

    /**
     * @param int $id_pannier
     */
    public function setIdPannier($id_pannier): void
    {
        $this->id_pannier = $id_pannier;
    }

    /**
     * @return int
     */
    public function getIdClient()
    {
        return $this->id_client;
    }

    /**
     * @param int $id_client
     */
    public function setIdClient($id_client): void
    {
        $this->id_client = $id_client;
    }

    /**
     * @return int
     */
    public function getIdArticle()
    {
        return $this->id_article;
    }

    /**
     * @param int $id_article
     */
    public function setIdArticle($id_article): void
    {
        $this->id_article = $id_article;
    }

    /**
     * @return int
     */
    public function getIdPayement()
    {
        return $this->id_payement;
    }

    /**
     * @param int $id_payement
     */
    public function setIdPayement($id_payement): void
    {
        $this->id_payement = $id_payement;
    }





}