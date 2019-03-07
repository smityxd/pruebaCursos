<? $this->load->view('sistema/cabe');?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Listado de Cursos <button class="btn btn-primary" onclick="ira('<?=base_url('cursos/crear')?>')">Crear</button></h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <?
                    foreach($rs->result() as $row){?>
                        <tr>
                            <td>
                                <button class="btn btn-success" onclick="ira('<?=base_url('cursos/editar/').$row->id?>')">Editar</button>
                                <button class="btn btn-danger" onclick="eliminar(<?=$row->id?>,'<?=$row->nombre?>')">Eliminar</button>
                            </td>
                            <td><?=$row->nombre?></td>
                        </tr>
                    <?
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<? $this->load->view('sistema/pie');?>
<script>

    function eliminar(id,nombre) {
        var r = confirm("seguro que desea eliminar: "+nombre);
        if (r == true) {
            $.ajax({
                type: "POST",
                url: "<?=site_url('cursos/eliminar')?>",
                data: {'id':id},
                beforeSend: function(){
                    waitingDialog.show('');
                },
                success: function (dataX) {
                    ira('<?=base_url('cursos')?>');
                },
                error: function () {
                    waitingDialog.hide();
                    alert('error');
                }
            });
        }
    }
</script>
</body>
</html>
