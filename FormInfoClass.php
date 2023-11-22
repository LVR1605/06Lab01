<?php

class FormInfoClass
{
    private $lastName;
    private $firstName;
    private $middleInitial;
    private $age;
    private $contactNo;
    private $email;
    private $address;

    // Constructor
    public function __construct($lastName, $firstName, $middleInitial, $age, $contactNo, $email, $address)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->middleInitial = $middleInitial;
        $this->age = $age;
        $this->contactNo = $contactNo;
        $this->email = $email;
        $this->address = $address;
    }

    // Getter and Setter methods
    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getMiddleInitial()
    {
        return $this->middleInitial;
    }

    public function setMiddleInitial($middleInitial)
    {
        $this->middleInitial = $middleInitial;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getContactNo()
    {
        return $this->contactNo;
    }

    public function setContactNo($contactNo)
    {
        $this->contactNo = $contactNo;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    // Display method to show entered data
    public function displayInfo()
    {
        echo "<h2>Registration Details:</h2>";
        echo "<p><strong>Last Name:</strong> " . $this->lastName . "</p>";
        echo "<p><strong>First Name:</strong> " . $this->firstName . "</p>";
        echo "<p><strong>Middle Initial:</strong> " . $this->middleInitial . "</p>";
        echo "<p><strong>Age:</strong> " . $this->age . "</p>";
        echo "<p><strong>Contact No.:</strong> " . $this->contactNo . "</p>";
        echo "<p><strong>Email:</strong> " . $this->email . "</p>";
        echo "<p><strong>Address:</strong> " . $this->address . "</p>";
    }
    
}


?>
