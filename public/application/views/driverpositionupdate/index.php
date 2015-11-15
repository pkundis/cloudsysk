<body>
<style media="screen">
  body {
    background-color: #eee;
  }
  td {
    text-align:center;
    color:black;
    border:solid 1px black;
  }
  
  #table {
    line-height:30px;
    background-color:#ddd;
    float:left;
    padding:5px; 
    border-radius: 10px;
  }

</style>

<div id="table">
<table style="align:center;">
  <tr>
    <td colspan="5"><h2>Driver position update</h2></td>
  </tr>
  <tr>
    <td><b>Driver ID</b></td> 
    <td><b>Client ID</b></td> 
    <td><b>Latitude</b></td>
    <td><b>Longitude</b></td>
    <td><b>Notes</b></td>
  </tr>
  <tr>
    <?php foreach($drivers as $driver){ ?>
      <td><?=$driver->driver_id?></td>
      <td><?=$driver->client_id?></td>
      <td><?=$driver->lat?></td>
      <td><?=$driver->lng?></td>
      <td><?=$driver->notes?></td>
    <?php } ?>
  </tr>
</table> 
<br>
<?= Form::open();?>
<?= Form::submit('delete', 'DELETE DATABASE RECORDS', array('type' => 'submit'));?>
<?= Form::close();?>
</div>
</body>
