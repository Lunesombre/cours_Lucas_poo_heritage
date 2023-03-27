<?php

namespace App\Import;

use App\Part\Part;

abstract class Import
{
  protected array $elements;

  public function __construct(string $filepath)
  {
    // Je récupère le contenu de mon fichier
    $fileContent = file_get_contents($filepath);
    // Je décode le contenu de mon fichier de JSON à PHP Array
    $this->elements = json_decode($fileContent, true);
  }

  protected abstract function createPart(array $data): Part;

  public function import(): void
  {
    foreach ($this->elements as $element) {
      $part = $this->createPart($element);
      var_dump($part);
    }
  }
}
