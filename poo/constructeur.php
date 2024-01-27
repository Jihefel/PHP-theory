<?php
class astro
{
    public function __construct(string $nom, int $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }
    public function set_age(int $age)
    {
        $this->age = $age;
    }
}