<?php


class ArticleEntity extends Entity
{
    protected $idArticle,
            $nom,
            $description,
            $prixUnitaire,
            $nombreTotal,
            $type,
            $modele,
            $marque,
            $fabriquant,
            $fournisseur,
            $idImage;

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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrixUnitaire()
    {
        return $this->prixUnitaire;
    }

    /**
     * @param mixed $prixUnitaire
     */
    public function setPrixUnitaire($prixUnitaire): void
    {
        $this->prixUnitaire = $prixUnitaire;
    }

    /**
     * @return mixed
     */
    public function getNombreTotal()
    {
        return $this->nombreTotal;
    }

    /**
     * @param mixed $nombreTotal
     */
    public function setNombreTotal($nombreTotal): void
    {
        $this->nombreTotal = $nombreTotal;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele): void
    {
        $this->modele = $modele;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getFabriquant()
    {
        return $this->fabriquant;
    }

    /**
     * @param mixed $fabriquant
     */
    public function setFabriquant($fabriquant): void
    {
        $this->fabriquant = $fabriquant;
    }

    /**
     * @return mixed
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }

    /**
     * @param mixed $fournisseur
     */
    public function setFournisseur($fournisseur): void
    {
        $this->fournisseur = $fournisseur;
    }

    /**
     * @return mixed
     */
    public function getIdImage()
    {
        return $this->idImage;
    }

    /**
     * @param mixed $idImage
     */
    public function setIdImage($idImage): void
    {
        $this->idImage = $idImage;
    }



}