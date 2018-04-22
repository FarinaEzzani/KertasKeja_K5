<style>
  table,tr,th,td{
  padding:10px;}
  tr,th,td
  {
    border:1px solid red;
  }
  th{
  background-color:lightblue;}
  </style>
 

  <body>
  <center>
  <h2><i>SENARAI PENGIRAAN</i></h2>
  <table>
  <tr>
  <th style="text-align;">Bil</th><br>
  <th>Hasil</th><br>
  <th>Catatan</th>

  </tr>
    </center>
  <?php

$no=1;
$ambil=mysql_query("SELECT *FROM kira");


while($data=mysql_fetch_array($ambil))
{?>

  <tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $data['hasil'];?></td>
    <td><?php echo $data['catatan'];?></td>
    
    
    
    <?php
      }
        ?>

</table>
<center>
<p>
  <br>
 
 </center>  
 </html>
 </body>
 </head>
 </html>