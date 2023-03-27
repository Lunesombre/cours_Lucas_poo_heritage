<?php

namespace App\Import;

use App\Part\Ram;

class RamImport extends Import
{
  protected function createPart(array $data): Ram
  {
    return new Ram(
      $data['name'],
      $data['producer'],
      $data['RAM_TYPE'],
      intval($data['size']),
      $data['clock'],
      $data['sticks'],
      $data['MPN'],
      $data['EAN'],
      $data['image_url'] ?? null,
      null
    );
  }
}
