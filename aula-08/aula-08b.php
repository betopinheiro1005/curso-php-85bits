<?php
class Animal {}

class Felino extends Animal {}

class Gato extends Felino {}

$class = new ReflectionClass(Gato::class);

while ($parent = $class->getParentClass()) {
  $parents[] = $parent->getName();
  $class = $parent;
}

echo "Parents: " . implode(", ", $parents);
