<?php
declare(strict_types=1);

final class User
{
    private $user_name;
    private $first_name;
    private $last_name;
    private $email;
    

    public function __construct(string $user_name,
                                 string $first_name, string $last_name, string $email)
    {
        $this->user_name = $user_name;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
    }

    public function register(string $password)
    {
        $db = makeDatabase();
        $query = $db->prepare("INSERT INTO `tbuser`(`user_name`, " +
                              "`first_name`,`last_name`, `email`, `password`) " +
                              "VALUES (:user_name, :first_name, :last_name, " +
                              ":email, :password)");
        $query->bindParam(":user_name", $this->user_name);
        $query->bindParam(":first_name", $this->first_name);
        $query->bindParam(":last_name", $this->last_name);
        $query->bindParam(":email", $this->email);
        $query->bindParam(":password", $password);
        
        $status = $query->execute();
        
        $db = null;

        return $status;
        
    }

    public static function fromString(string $user_name): self
    {
        return new self($user_name);
    }

    public function __toString(): string
    {
        return $this->user_name;
    }

    
}
