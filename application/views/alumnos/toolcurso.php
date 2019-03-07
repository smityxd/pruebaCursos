<?
$opc = "crear";
$id = "";
$cursoid = "";
$nota = "";

if(isset($rs)){
    $row = $rs->row();
    $opc = "editar";
    $id = $row->id;
    $cursoid = $row->cursoid;
    $nota = $row->nota;
}
?>
<? $this->load->view('sistema/cabe');?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form id="formid">
                <input type="hidden" id="opc" name="opc" value="<?=$opc?>">
                <input type="hidden" id="id" name="id" value="<?=$id?>">
                <input type="hidden" id="alumnoid" name="alumnoid" value="<?=$alumnoid?>">
                <div class="form-group row">
                    <label for="cursoid" class="col-sm-2 col-form-label">Curso</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="cursoid" name="cursoid">
                            <option value="">[Seleccionar]</option>
                            <?
                            foreach ($rscursos->result() as $row){
                                ?><option value="<?=$row->id?>" <?=$cursoid == $row->id ? 'selected' : ''?>><?=$row->nombre?></option><?
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nota" class="col-sm-2 col-form-label">Nota</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nota" name="nota" placeholder="Nota" value="<?=$nota?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                        <button type="button" class="btn btn-warning" onclick="ira('<?=base_url('alumnos/cursos/').$alumnoid?>')">Cancelar</button>
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
                cursoid: {
                    required: true
                },
                nota: {
                    required: true,
                    number: true,
                    max: 20,
                    min: 0
                }
            },
            submitHandler: function (form) {

                var formData = {
                    'opc': $('#opc').val(),
                    'id': $('#id').val(),
                    'alumnoid': $('#alumnoid').val(),
                    'cursoid' : $('#cursoid').val(),
                    'nota': $('#nota').val()
                };

                $.ajax({
                    type: "POST",
                    url: "<?=site_url('alumnos/procesarcurso')?>",
                    data: formData,
                    beforeSend: function(){
                        waitingDialog.show('');
                    },
                    success: function () {
                        ira('<?=base_url('alumnos/cursos/').$alumnoid?>');
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
