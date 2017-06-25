<?php

class User
{
//Variable
	private $connected;
	private $panierConnected;
	private $id;
    private $idPanier;
    private $nom;
    private $numeros;
    private $nomDeRue;
    private $appartement;
    private $batiment;
    private $lieuDit;
    private $codePostal;
    private $ville;
    private $pays;
    private $pseudo;
    private $motDePasse;
    private $Sex;
    private $tel1;
    private $tel2;
    private $age;
    private $description;
    private $prenom;
    private $email;
    private $situation;
    private $exterieur;
    private $habitant;
	private $panier;
	private $statuePanier;

//méthodes
	//constructeur
	function __construct($data)
	{
		$this->setConnected($data['connected']);
		$this->setPanierConnected($data['panierConnected']);
		$this->setIdAdmin($data['idAdmin']);
		$this->setIdPanier($data['idPanier']);
		$this->setNom($data['nom']);
		$this->setNumeros($data['numeros']);
		$this->setnomDeRue($data['nomDeRue']);
		$this->setAppartement($data['appartement']);
		$this->setBatiment($data['batiment']);
		$this->setLieuDit($data['lieuDit']);
		$this->setCodePostal($data['codePostal'];
		$this->setVille($data['ville']);
		$this->setPays($data['pays']);
		$this->setPseudo($data['pseudo']);
        $this->setMotDePasse($data['motDePasse'])
		$this->setTel1($data['tel1']);
		$this->setTel2($data['tel2']);
        $this->setAge($data['age']);
		$this->setDescription($data['description']);
		$this->setPrenom($data['prenom']);
		$this->setSex($data['Sex']);
		$this->setEmail($data['email']);
		$this->setSituation($data['situation']);
		$this->setExterieur($data['exterieur']);
		$this->setHabitant($data['habitant']);
	}

	//Getter and setter

    public function getId()
    {
        return $this->id;
    }

    public function setConnected($connected)
    {
        $this->connected = $connected;

        return $this;
    }

    public function getConnected()
    {
        return $this->connected;
    }

    public function setPanierConnected($panierConnected)
    {
        $this->panierConnected = $panierConnected;

        return $this;
    }

    public function getPanierConnected()
    {
        return $this->panierConnected;
    }

    public function setIdPanier($idPanier)
    {
        $this->idPanier = $idPanier;

        return $this;
    }

    public function getIdPanier()
    {
        return $this->idPanier;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

  
    public function setNumeros($numeros)
    {
        $this->numeros = $numeros;

        return $this;
    }

    public function getNumeros()
    {
        return $this->numeros;
    }

    public function setNomDeRue($nomDeRue)
    {
        $this->nomDeRue = $nomDeRue;

        return $this;
    }

    public function getNomDeRue()
    {
        return $this->nomDeRue;
    }

    public function setAppartement($appartement)
    {
        $this->appartement = $appartement;

        return $this;
    }

    public function getAppartement()
    {
        return $this->appartement;
    }

    public function setBatiment($batiment)
    {
        $this->batiment = $batiment;

        return $this;
    }

    public function getBatiment()
    {
        return $this->batiment;
    }

    public function setLieuDit($lieuDit)
    {
        $this->lieuDit = $lieuDit;

        return $this;
    }

    public function getLieuDit()
    {
        return $this->lieuDit;
    }

    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getCodePostal()
    {
        return $this->codePostal;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    public function setSex($Sex)
    {
        $this->Sex = $Sex;

        return $this;
    }

    public function getSex()
    {
        return $this->Sex;
    }

    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    public function getTel1()
    {
        return $this->tel1;
    }

    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    public function getTel2()
    {
        return $this->tel2;
    }

    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setSituation($situation)
    {
        $this->situation = $situation;

        return $this;
    }

    public function getSituation()
    {
        return $this->situation;
    }

    public function setExterieur($exterieur)
    {
        $this->exterieur = $exterieur;

        return $this;
    }

    public function getExterieur()
    {
        return $this->exterieur;
    }

    public function setHabitant($habitant)
    {
        $this->habitant = $habitant;

        return $this;
    }

    public function getHabitant()
    {
        return $this->habitant;
    }

    public function setPanier($panier)
    {
        $this->panier = $panier;

        return $this;
    }

    public function getPanier()
    {
        return $this->panier;
    }




}

?>