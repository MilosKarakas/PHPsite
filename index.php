<!DOCTYPE html>
<html>
<body>

  <?php

  require 'vendor/autoload.php';

  use PhpOffice\PhpSpreadsheet\Spreadsheet;
  use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

  $spreadsheet = new Spreadsheet();
  $sheet = $spreadsheet->getActiveSheet();
  $sheet->setCellValue('A1', 'First document');

  $writer = new Xlsx($spreadsheet);
  $writer->save('helloworld.xlsx');

  echo 'Gotovo.';

  ?>

</body>
</html>
