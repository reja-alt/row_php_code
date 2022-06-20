<?php

declare(strict_types=1);

abstract class Adapter
{
    protected $name;
    abstract public function getName(): string;
    abstract public function setName(string $value);
}

class AdapterFoo extends Adapter
{
    public function getName(): string
    {
        return $this->name;
    }
    // return type declaring not defined in abstract class, set here
    public function setName(string $value): self
    {
        $this->name = $value;
        return $this;
    }
}

$feature = new AdapterFoo();
$feature->setName('headphone');
echo $feature->getName();
