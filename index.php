<?php
require_once 'vendor/autoload.php';

use App\Import\CpuImport;
use App\Import\Import;
use App\Import\RamImport;

/** @var Import[] */
$imports = [
  new CpuImport('data/CPUs.json'),
  new RamImport('data/RAMs.json')
];

foreach ($imports as $import) {
  $import->import();
}
