<?php
declare(strict_types=1);

final class User
{
    private $user_name;

    private function __construct(string $user_name)
    {
        $this->user_name = $user_name;
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
