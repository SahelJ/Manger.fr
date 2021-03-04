<?php

namespace App\Entity;

/**
 * Une entité est une class qui définit des paramètres de lecture des informations d'une table.
 * Lorsqu'on définit le fetch_mode d'une connexion à une base de données en PDO::FETCH_CLASS 
 * (mode de récupération des données sous forme de class), on doit l'associer à une class en question.
 * Cette class est une entité (ici User qui se connecte à la table user de la BDD).
 * Après avoir utilisé la méthode query puis fetch ou fetchAll d'un model, 
 * les données récupérées se connectent à l'entité en question pour suivre les règles imposées 
 * comme par exemple, mettre toutes les informations en private empéchant ainsi de les manipuler à la volée.
 * On peut ainsi définir que nous pouvons par exemple récupérer l'id pour l'afficher mais jamais le modifier,
 * On peut également effectuer des opérations tel qu'un calcul pour obtenir une propriété supplémentaire
 * dès qu'on récupère les informations (ici wrongId qui est égal à Id + 2).
 * 
 * Si vous n'avez pas définit de règle pour une propriété, celle-ci est par défaut en public.
 * 
 * Si l'entité n'existe pas, par défaut le fetch vous retourne les données sous forme de tableau
 */
class User{

    private $Id;
    private $FirstName;
    private $LastName;
    private $Email;
    private $Password;
    private $BirthDate;
    private $Address;
    private $City;
    private $ZipCode;
    private $Country;
    private $Phone;
    private $CreationTimestamp;
    private $LastLoginTimestamp;
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Get the value of FirstName
     */ 
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * Set the value of FirstName
     *
     * @return  self
     */ 
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    /**
     * Get the value of LastName
     */ 
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * Set the value of LastName
     *
     * @return  self
     */ 
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;

        return $this;
    }

    /**
     * Get the value of Email
     */ 
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     *
     * @return  self
     */ 
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Get the value of Password
     */ 
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Set the value of Password
     *
     * @return  self
     */ 
    public function setPassword($Password)
    {
        $this->Password = $Password;

        return $this;
    }

    /**
     * Get the value of BirthDate
     */ 
    public function getBirthDate()
    {
        return $this->BirthDate;
    }

    /**
     * Set the value of BirthDate
     *
     * @return  self
     */ 
    public function setBirthDate($BirthDate)
    {
        $this->BirthDate = $BirthDate;

        return $this;
    }

    /**
     * Get the value of Address
     */ 
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Set the value of Address
     *
     * @return  self
     */ 
    public function setAddress($Address)
    {
        $this->Address = $Address;

        return $this;
    }

    /**
     * Get the value of City
     */ 
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Set the value of City
     *
     * @return  self
     */ 
    public function setCity($City)
    {
        $this->City = $City;

        return $this;
    }

    /**
     * Get the value of ZipCode
     */ 
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * Set the value of ZipCode
     *
     * @return  self
     */ 
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;

        return $this;
    }

    /**
     * Get the value of Country
     */ 
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Set the value of Country
     *
     * @return  self
     */ 
    public function setCountry($Country)
    {
        $this->Country = $Country;

        return $this;
    }

    /**
     * Get the value of Phone
     */ 
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * Set the value of Phone
     *
     * @return  self
     */ 
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;

        return $this;
    }

    /**
     * Get the value of CreationTimestamp
     */ 
    public function getCreationTimestamp()
    {
        return $this->CreationTimestamp;
    }

    /**
     * Set the value of CreationTimestamp
     *
     * @return  self
     */ 
    public function setCreationTimestamp($CreationTimestamp)
    {
        $this->CreationTimestamp = $CreationTimestamp;

        return $this;
    }

    /**
     * Get the value of LastLoginTimestamp
     */ 
    public function getLastLoginTimestamp()
    {
        return $this->LastLoginTimestamp;
    }

    /**
     * Set the value of LastLoginTimestamp
     *
     * @return  self
     */ 
    public function setLastLoginTimestamp($LastLoginTimestamp)
    {
        $this->LastLoginTimestamp = $LastLoginTimestamp;

        return $this;
    }
}