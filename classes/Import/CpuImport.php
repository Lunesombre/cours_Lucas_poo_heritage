<?php

namespace App\Import;

use App\Part\Cpu;

class CpuImport extends Import
{
  protected function createPart(array $data): Cpu
  {
    return new Cpu(
      $data['name'],
      $data['Producer'],
      floatval($data['basse_clock']),
      floatval($data['turbo_clock']),
      $data['cores'],
      $data['threads'],
      $data['socket'],
      intval($data['TDP']),
      $data['MPN'],
      $data['EAN'],
      $data['cpu_image_link'] ?? null,
      null,
    );
  }
}
