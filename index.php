<!DOCTYPE html>
<html>
<body>

  <?php

  require 'vendor/autoload.php';
  require 'student_model.php';

  use PhpOffice\PhpSpreadsheet\Spreadsheet;
  use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

  $arrayOfStudents = [
    new Student('Marko Markovic', '11101/18', 8.14, 'Banja Luka'),
    new Student('Nikola Nikolic', '1101/19',  9.32, 'Doboj'),
    new Student('Stefan Stefanovic', '1213/17', 6.24 , 'I.Sarajevo')
  ];

  $spreadsheet = new Spreadsheet();

  $sheet = $spreadsheet->getActiveSheet();

  $i=1;
  foreach($arrayOfStudents as $x){
    $sheet->setCellValue("A$i", $x->index);
    $sheet->setCellValue("B$i", $x->name);
    $sheet->setCellValue("C$i", $x->city);
    $sheet->setCellValue("D$i", $x->rating);
    $i++;
  }

  $writer = new Xlsx($spreadsheet);
  $writer->save('helloworld.xlsx');

  echo 'Generisan  dokument.';

  ?>

</body>
</html>
