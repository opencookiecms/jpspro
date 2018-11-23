<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php echo $get_detail[0]->mrk_namakon?></title>
</head>
<body>
  <iframe

    src="  <?php echo site_url('Report/TestReport2') ?>?file=MRK-01.pdf"
    width="100%"
    height="800px"
    style="border: none;"/>

</body>
</html>
