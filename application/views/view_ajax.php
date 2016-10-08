 <!DOCTYPE html>
<html lang="en">
<head>
  <title>crud ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
</head>
<body onload="viewData()">
<br/><br/> 
<div class="container">
  <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-default">Default</button>
</div>
<div class="container datav">
 
</div>

<!-- Bootstrap modal insert -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-9">
                                <input id="nama" placeholder="Nama lengkap" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Email</label>
                            <div class="col-md-9">
                                <input id="email" placeholder="Email" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Address</label>
                            <div class="col-md-9">
                                <input id="alamat" placeholder="Address" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
            </div>
	            <div class="modal-footer">
	                <button type="submit" class="btn btn-primary" onclick="saveData()">Save</button>
	                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	            </div>
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<!-- javascript bootstrap -->
  <script src="<?php echo base_url()?>assets/jquery/jquery-2.1.4.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<!-- end javascript -->

<script>
//load Data
function viewData() {
  $.ajax ({
    type : "POST",
    url : "<?= site_url('crud_ajax/data') ?>",
  }).done(function( data ) {
        $('.datav').html(data);
  });
}

//Save data
function saveData(){
  var nama    = $('#nama').val();
  var email   = $('#email').val();
  var alamat  = $('#alamat').val();
  $.ajax({
      type  : "POST",
      url   : "<?= site_url('crud_ajax/input') ?>",
      data  : "nama="+nama+"&email="+email+"&alamat="+alamat,
      success: function(data) { 
        $('#myModal').modal('hide');
            viewData();                                         
      },
      error: function(jqXHR, status, error) {
           alert("Request Anda Gagal Dikirim  ");
      }
  });
}

//Update data
function updateData(){
  var id      = $('#id2').val();
  var nama    = $('#nama2').val();
  var email   = $('#email2').val();
  var alamat  = $('#alamat2').val();
  var classs  = $('#eddit'+id);
  console.log(email);
  $.ajax({
      type  : "POST",
      url   : "<?= site_url('crud_ajax/update2') ?>",
      data  : "nama="+nama+"&email="+email+"&alamat="+alamat+"&id="+id,
      success: function(data) { 
        viewData();                                         
        $('.modal-backdrop').remove();
     },
     error: function(jqXHR, status, error) {
          alert("Request Anda Gagal Dikirim  ");
     }
 });
}
//Delet data

function deleteData(id){

  $.ajax({
      type : "POST",
      url : "<?= site_url('crud_ajax/hapus') ?>",
      data : "id="+id,
      success: function() { 
        viewData();                                         
     },
     error: function(jqXHR, status, error) {
          alert("Request Anda Gagal Dikirim  ");
     }
 });
}
</script>

</body>
</html>