
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Laporan semasa</title>

   

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/boots/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/boots/bootstrap/css/nav.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/r-2.2.2/datatables.min.css"/>


    <!-- Custom styles for this template -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
  </head>
<style>
th { font-size: 10px; }
td { font-size: 10px; }
</style>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Laporan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
           
           
          </ul>
        
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
    <div class="mt-5"></div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Bil</th>
                <th>Kod Peruntukan</th>
                <th>Tajuk Projek</th>
                <th>Harga Kontrak</th>
                <th>
                  Butiran Kontrak<br>
                  (1)Nama Kontraktor<br>
                  (2)No.Kontrak/Sebutharga<br>
                  (3)Mula/Siap<br>
                  (4)EOT
                </th>
                <th>Wang Diterima</th>
                <th>Perbelanjaan</th>
                <th>Tanggungan</th>
                <th>Baki</th>
                <th>Perbelanjaan Sehingga 2019</th>
                <th>Kemajuan Projek</th>
            </tr>
        </thead>
        <tbody>
          <?php $bil=0;?>
          <?php foreach ($laporan_sb as $row): $bil++?>
          <?php 
         
    

          ?>
            <tr>
                <td><?php echo $bil ?></td>
                <td><?php echo $row->lsk_peruntukan?></td>
                <td><?php echo $row->df_tajuk?></td>
                <td>RM <?php echo number_format($row->mrk_kosprojek,2)?></td>
                <td>
                (1) <?php echo $row->mrk_namakon?><br>
                (2) <?php echo $row->df_nosebutharga?><br>
                (3) <?php echo $row->mrk_tarikhmulakon?>/<?php echo $row->mrk_tarikhjangkasiap?><br>
                </td>
                <td>RM</td>
                <td>RM <?php echo number_format($row->lks_hargasebenar,2)?></td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
            </tr>
              <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                 <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>RM </th>
                <th>Total</th>
                <th>Total</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
    </main>
    <script>
    $(document).ready( function () {
    $('#example').DataTable({
       responsive: true,
        buttons: [
        'copy', 'excel', 'pdf'
    ]
    }
    );
    });
    </script>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    

 


<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/r-2.2.2/datatables.min.js"></script>

    <script src="<?php echo base_url() ?>assets/boots/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/boots/bootstrap/js/bootstrap.min.js"></script>
  
 
  
  </body>
</html>
