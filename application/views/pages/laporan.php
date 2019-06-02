
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

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.2/css/responsive.dataTables.min.css"/>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->

</head>
<style>
th { font-size: 10px; }
tfoot th{
  font-size: 9px; 
}
td { font-size: 10px; }
.br{
word-wrap: break-word;
}
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
                <th class="br">
                  Butiran Kontrak<br>
                  (1)Nama Kontraktor<br>
                  (2)No.Kontrak/Sebutharga<br>
                  (3)Mula/Siap<br>
                  (4)EOT<br>
                </th>
                <th>Waran Diterima (A)</th>
                <th>Perbelanjaan (B)</th>
                <th>Tanggungan (C)</th>
                <th>Baki</th>
                <th>Perbelanjaan<br> Sehingga<br> 2019</th>
                <th>Kemajuan Projek</th>
            </tr>
        </thead>
        <tbody>
          <?php $bil=0;?>
          <?php foreach ($laporan_sb as $row): $bil++?>
          <?php
          $a = $row->df_bakiperuntukan;
          $b = $row->lks_hargasebenar;
          $c = $a - $b;
          ?>
            <tr>
                <td><?php echo $bil ?></td>
                <td><?php echo $row->lsk_peruntukan?></td>
                <td><?php echo $row->df_tajuk?></td>
                <td>0.00</td>
                <td>
                (1) <?php echo $row->mrk_namakon?></br>
                (2) <?php echo $row->df_nosebutharga?></br>
                (3) <?php echo $row->mrk_tarikhmulakon?>/<?php echo $row->mrk_tarikhjangkasiap?></br>
                </td>
                <td><?php echo number_format($row->df_bakiperuntukan,2)?></td>
                <td><?php echo number_format($row->lks_hargasebenar,2)?></td>
                <td><?php echo number_format($row->mrk_kosprojek,2)?></td>
                <td><?php echo number_format($c,2)?></td>
                <td>0.00</td>
                <td><?php echo $row->mrk_psebenar.'%'?></td>
            </tr>
              <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
            <?php 
            $ta = $getwaran[0]->totalwaran;
            $tb = $getbelanja[0]->totalbelanha;
            $tc = $ta - $tb;
            ?>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th><?php echo $getwaran[0]->totalwaran?> </th>
                <th><?php echo $getbelanja[0]->totalbelanha?></th>
                <th><?php echo $getkos[0]->totalkos?></th>
                <th><?php echo number_format($tc,2) ?></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
    </main>
    <script>
    $(document).ready(function(){   
    $('#example').DataTable({
      
       responsive: true,
       dom: 'Bfrtip',
        buttons: [
            {
            footer: true,
            extend: "print",
            className: 'btn btn-primary',
             exportOptions: {
             stripHtml: false
              },
         
            customize: function(win)
            {
 
                var last = null;
                var current = null;
                var bod = [];
 
                var css = '@page { size: landscape; }',
                    head = win.document.head || win.document.getElementsByTagName('head')[0],
                    style = win.document.createElement('style');
 
                style.type = 'text/css';
                style.media = 'print';
 
                if (style.styleSheet)
                {
                  style.styleSheet.cssText = css;
                }
                else
                {
                  style.appendChild(win.document.createTextNode(css));
                }
 
                head.appendChild(style);
         }
        },
         
              
            {
               extend: 'excelHtml5',
               footer: true,
               text: '<i class="text-primary"></i> <strong>Export to Excel</strong>',
          
               
               className: 'btn btn-primary', 
                customize: function(xlsx) {
                var sheet = xlsx.xl.worksheets['sheet1.xml'];
                $('row c[r^="E"]', sheet).attr( 's', '55' );
                
              },
                  exportOptions: {
                  format: {
                    body: function ( data, row, column, node ) {
                        // Strip $ from salary column to make it numeric
                         return column === 4 ?
                         data.replace( /<br\s*\/?>/ig, "\n" ):
                         data;
                          }
                     }
                },
            },

          
            {
               extend: 'pdfHtml5',
               footer: true,
               orientation: 'landscape',
               pageSize: 'LEGAL',
               className: 'btn btn-primary',
               exportOptions:{
                 stripNewlines:false
               },
               customize:function(doc){
                  doc.content[1].table.body[0][4].alignment = 'left';
               }
              
            } 
        ]
   
    });
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
    

 





<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.2/js/dataTables.responsive.min.js"></script>


<script src="<?php echo base_url() ?>assets/boots/bootstrap/js/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/boots/bootstrap/js/bootstrap.min.js"></script>  


</body>
</html>
