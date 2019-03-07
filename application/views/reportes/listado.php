<? $this->load->view('sistema/cabe');?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group row">
                <label for="alumnoid" class="col-sm-2 col-form-label">Alumno</label>
                <div class="col-sm-10">
                    <select class="form-control" id="alumnoid" name="alumnoid">
                        <option value="">[Seleccionar]</option>
                        <?
                        foreach ($rsalumnos->result() as $row){
                            ?><option value="<?=$row->id?>"><?=$row->nombre?></option><?
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="listado"></div>
        </div>
    </div>
</div>
<? $this->load->view('sistema/pie');?>
<script>
    function cargarDatos(){
        var alumnoid = $('#alumnoid').val();
        if (alumnoid!=""){
            $.ajax({
                type: "POST",
                url: "<?=site_url('reportes/cursosxalumno')?>",
                data: {'alumnoid' : alumnoid},
                beforeSend: function(){
                    waitingDialog.show('');
                },
                success: function (dataX) {
                    waitingDialog.hide();
                    $("#listado").html(dataX);
                },
                error: function () {
                    waitingDialog.hide();
                    $("#mensaje").html('Error al Procesar Peticion');
                }
            });
        }else{
            $("#listado").html('');
        }
    }
    //eventos
    $("#alumnoid").change(function(){
        cargarDatos();
    });
</script>
</body>
</html>
