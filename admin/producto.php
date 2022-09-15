<?php include("vista/cabecera.php"); ?>


<?php 
$codigo=(isset($_POST['codigo']))?$_POST['codigo']:"";
$nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
$foto=(isset($_FILES['foto']['name']))?$_FILES['foto']['name']:"";
$Descripcion=(isset($_POST['Descripcion']))?$_POST['Descripcion']:"";
$precio=(isset($_POST['precio']))?$_POST['precio']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("config/conexion.php");


switch ($accion) {
        case 'agregar':
          
        
            $result = $conn->query("INSERT INTO `servicios` (`codigo`, `nombre`, `foto`, `Descripcion`, `precio` ) VALUES (NULL, '$nombre', '$foto', '$Descripcion', '$precio');");
          
            
        break;

        case 'modificar':

        
            $result = $conn->query(" UPDATE servicios SET `nombre`='$nombre',`foto`='$foto', `Descripcion`='$Descripcion', `precio`='$precio' WHERE codigo=$codigo");
        break;

        case 'Borrar':

            $result=$conn->query("DELETE FROM servicios WHERE codigo=$codigo");
          
                
            
                        
        break;

        case 'eliminar':
            header("location:producto.php");
            
        break;

        case 'seleccionar':
            $result=$conn->query("SELECT codigo,nombre,foto,Descripcion,precio FROM servicios WHERE codigo=$codigo");
            $producto = mysqli_fetch_all($result, MYSQLI_ASSOC);
           
            
        break;
    
                
     
    
 
}
$result = ("SELECT * FROM servicios");

?>
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">DataTables.Net</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tables</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Datatables</a>
                    </li>
                </ul>
            </div>

    
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-grid align-items-center">
                    <h4 class="card-title">Registro</h4>
                </div>
            </div>
            <div class="card-body">
                
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            Formulario de Registro de Productos
                        </div>
                        <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label >Codigo</label>
                                        <input type="text" required readonly name="codigo" id="codigo"  value="<?php echo $codigo ?>" class="form-control" placeholder="Digite codigo">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text"  name="nombre" id ="nombre" value="<?php echo $nombre ?>" class="form-control" placeholder="Digite Nombre del producto">
                                    </div>
                                    <div class="form-group">
                                        <label>Imagen</label>
                                        <?php echo $foto ?>
                                        <input type="file" name="foto" id ="foto"  class="form-control" placeholder="Cargue imagen del producto">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripcion</label>
                                        <input type="text"  name="Descripcion" id ="Descripcion" value="<?php echo $Descripcion ?>" class="form-control" placeholder="Ingrese Descrpcion">
                                    </div>
                                    <div class="form-group">
                                        <label>Precio</label>
                                        <input type="text"  name="precio" id ="precio" value="<?php echo $precio ?>" class="form-control" placeholder="Digite Precio">
                                    </div>
                                    <div class="btn-group" role="group" aria-label="">
                                        <button type="submit" name="accion" value="agregar" class="btn btn-success">Registro</button>
                                        <button type="submit" name="accion" value="modificar" class="btn btn-warning">Modificar</button>
                                        <button type="submit" name="accion" value="eliminar" class="btn btn-danger">Cancelar</button>
                                    </div>               
                                    
                                </form>
                        </div>
                        
                    </div>
                            
                    
                </div>
                <div class="col-md-7">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre del producto</th>
                            <th>Imagen</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($conn->query($result) as $list){ ?>
                        <tr>
                            <td><?php echo $list['codigo']?> </td>
                            <td><?php  echo $list['nombre']?></td>
                            <td>
                                <img src="../../img/<?php  echo $list['foto']?>" alt="" >
                                <?php  echo $list['foto']?>
                            </td>
                            <td><?php  echo $list['Descripcion']?></td>
                            <td><?php  echo $list['precio']?></td>
                            <td> <form method="post">
                                <input type="hidden" name="codigo" id="codigo" value="<?php echo $list['codigo']?> ">
                            <input type="submit" name="accion" value="seleccionar" class="btn btn-success">
                                <input type="submit" name="accion" value="Borrar" class="btn btn-danger">
                            </form> </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>    

                </div>
            </div>

    <!-- Datatables -->
    <script src="../../assets/js/plugin/datatables/datatables.min.js"></script>
        <!-- Atlantis JS -->
        <script src="../../assets/js/atlantis.min.js"></script>
        <!-- Atlantis DEMO methods, don't include it in your project! -->
        <script src="../../assets/js/setting-demo2.js"></script>
        <script >
            $(document).ready(function() {
                $('#basic-datatables').DataTable({
                });

                $('#multi-filter-select').DataTable( {
                    "pageLength": 5,
                    initComplete: function () {
                        this.api().columns().every( function () {
                            var column = this;
                            var select = $('<select class="form-control"><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                    );

                                column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                            } );

                            column.data().unique().sort().each( function ( d, j ) {
                                select.append( '<option value="'+d+'">'+d+'</option>' )
                            } );
                        } );
                    }
                });

                // Add Row
                $('#add-row').DataTable({
                    "pageLength": 5,
                });

                var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

                $('#addRowButton').click(function() {
                    $('#add-row').dataTable().fnAddData([
                        $("#addName").val(),
                        $("#addPosition").val(),
                        $("#addOffice").val(),
                        action
                        ]);
                    $('#addRowModal').modal('hide');

                });
            });
        </script>
</main>
<?php include("vista/pie.php"); ?>