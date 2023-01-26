<?php

class Person
{
  // variabili
  private $name;
  private $surname;
  private $date_of_birth;
  private $place_of_birth;
  private $fiscal_code;

  // costruttori
  public function __construct($name, $surname, $date_of_birth, $place_of_birth, $fiscal_code)
  {
    $this->setName($name);
    $this->setSurname($surname);
    $this->setDateOfBirth($date_of_birth);
    $this->setPlaceOfBirth($place_of_birth);
    $this->setFiscalCode($fiscal_code);
  }

  // metodo per nome
  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  // metodo per cognome
  public function setSurname($surname)
  {
    $this->surname = $surname;
  }

  public function getSurname()
  {
    return $this->surname;
  }

  // metodo per data di nascita
  public function setDateOfBirth($date_of_birth)
  {
    $this->date_of_birth = $date_of_birth;
  }

  public function getDateOfBirth()
  {
    return $this->date_of_birth;
  }

  // metodo per luogo di nascita
  public function setPlaceOfBirth($place_of_birth)
  {
    $this->place_of_birth = $place_of_birth;
  }

  public function getPlaceOfBirth()
  {
    return $this->place_of_birth;
  }

  // metodo per codice fiscale
  public function setFiscalCode($fiscal_code)
  {
    $this->fiscal_code = $fiscal_code;
  }

  public function getFiscalCode()
  {
    return $this->fiscal_code;
  }

  // funzione che restituisce una stringa di testo formattata in HTML contenente i dettagli degli oggetti creati nella classe
  public function getHtml()
  {
    return "<br><br>" . "Nome: " .
      $this->getName() .
      "<br>" .
      "Cognome: " .
      $this->getSurname() .
      "<br>" .
      "Data di nascita: " .
      $this->getDateOfBirth() .
      "<br>" .
      "Luogo di nascita: " .
      $this->getPlaceOfBirth() .
      "<br>" .
      "Codice fiscale: " .
      $this->getFiscalCode();
  }
}

// classe impiegato
class Employee extends Person
{
  public function __construct($name, $surname, $date_of_birth, $place_of_birth, $fiscal_code)
  {
    parent::__construct($name, $surname, $date_of_birth, $place_of_birth, $fiscal_code);
  }

  public function getHtml()
  {
    return parent::getHtml();
  }
}

// classe stipendio
class Salary
{
  // variabili
  private $monthly;
  private $thirteenth_month;
  private $fourteenth_month;

  // costruttori
  public function __construct($monthly, $thirteenth_month, $fourteenth_month)
  {
    $this->setMonthly($monthly);
    $this->setThirteenth($thirteenth_month);
    $this->setFourteenth($fourteenth_month);
  }

  // metodo per mensilità
  public function setMonthly($monthly)
  {
    $this->monthly = $monthly;
  }

  public function getMonthly()
  {
    return $this->monthly;
  }

  // metodo per tredicesima
  public function setThirteenth($thirteenth_month)
  {
    $this->thirteenth_month = $thirteenth_month;
  }

  public function getThirteenth()
  {
    return $this->thirteenth_month;
  }

  // metodo per quattordicesima
  public function setFourteenth($fourteenth_month)
  {
    $this->fourteenth_month = $fourteenth_month;
  }

  public function getFourteenth()
  {
    return $this->fourteenth_month;
  }

  public function getHtml()
  {
    return "<br><br>" . "Mensile: " .
      $this->getMonthly() .
      "<br>" .
      "Tredicesima: " .
      $this->getThirteenth() .
      "<br>" .
      "Quattordicesima: " .
      $this->getFourteenth();
  }
}

// classe capo
class Boss extends Person
{
  private $dividend;
  private $bonus;

  public function __construct($name, $surname, $date_of_birth, $place_of_birth, $fiscal_code, $dividend, $bonus)
  {
    parent::__construct($name, $surname, $date_of_birth, $place_of_birth, $fiscal_code);

    $this->setDividend($dividend);
    $this->setBonus($bonus);
  }

  // metodo per dividendo
  public function setDividend($dividend)
  {
    $this->dividend = $dividend;
  }

  public function getDividend()
  {
    return $this->dividend;
  }

  // metodo per bonus
  public function setBonus($bonus)
  {
    $this->bonus = $bonus;
  }

  public function getBonus()
  {
    return $this->bonus;
  }

  public function getHtml()
  {
    return parent::getHtml() . "<br>"
      . "Dividendo: " . $this->getDividend() . "<br>"
      . "Bonus: " . $this->getBonus();
  }
}

// creazione di tre oggetti, utilizzando un costruttore e richiamando i dettagli definiti nel padre.
$employees = new Employee(
  "Carlo",
  "Cracco",
  "12-12-1994",
  "Milano",
  "84tf8re9hg8f"
);

$boss = new Boss(
  "Bruno",
  "Barbieri",
  "12-01-1974",
  "Milano",
  "124fgfh44f",
  "2.70",
  "3000"
);

$salary = new Salary(
  "1200",
  "1200",
  "1200"
);

// stampa in pagina il risultato
echo $employees->getHtml();
echo $boss->getHtml();
echo $salary->getHtml();