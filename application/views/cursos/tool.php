<?
$opc = "crear";
$id = "";
$nombre = "";

if(isset($rs)){
    $row = $rs->row();
    $opc = "editar";
    $id = $row->id;
    $nombre = $row->nombre;
}
?>
<? $this->load->view('sistema/cabe');?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form id="formid">
                <input type="hidden" id="opc" name="opc" value="<?=$opc?>">
                <input type="hidden" id="id" name="id" value="<?=$id?>">
                <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?=$nombre?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                        <button type="button" class="btn btn-warning" onclick="ira('<?=base_url('cursos')?>')">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<? $this->load->view('sistema/pie');?>
<script>
    $(document).ready(function() {
        $("#formid").validate({
            rules: {
                nombre: {
                    required: true,
                    maxlength: 50
                }
            },
            submitHandler: function (form) {

                var formData = {
                    'opc': $('#opc').val(),
                    'id': $('#id').val(),
                    'nombre' : $('#nombre').val()
                };

                $.ajax({
                    type: "POST",
                    url: "<?=site_url('cursos/procesar')?>",
                    data: formData,
                    beforeSend: function(){
                        waitingDialog.show('');
                    },
                    success: function () {
                        ira('<?=base_url('cursos')?>');
                    },
                    error: function () {
                        waitingDialog.hide();
                        alert('error');
                    }
                });
            }
        });
    });
</script>
</body>
</html>
