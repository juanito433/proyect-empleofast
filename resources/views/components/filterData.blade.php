<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FiltrosModal</title>
</head>

<body>
    <div class="modal fade" id="filtersModal" tabindex="-1" role="dialog" aria-labelledby="filtersModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document"> <!-- modal-lg para un modal más grande -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="filtersModalLabel">Filtro de Búsqueda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="filter-section">
                            <h6>Buscar por Palabra Clave</h6>
                            <input type="text" class="form-control" placeholder="Ingrese una palabra clave">
                        </div>
                        <div class="filter-section">
                            <h6>Categoría</h6>
                            <select class="form-control">
                                <option value="">Seleccione una categoría</option>
                                <option value="categoria1">Informática</option>
                                <option value="categoria2">Administración</option>
                                <option value="categoria3">Mecanica</option>
                            </select>
                        </div>
                        <div class="filter-section">
                            <h6>Rango de Fechas</h6>
                            <div class="date-range">
                                <input type="date" class="form-control" placeholder="Desde">
                                <input type="date" class="form-control" placeholder="Hasta">
                            </div>
                        </div>
                        <div class="filter-section">
                            <h6>Estado</h6>
                            <select class="form-control">
                                <option value="">Seleccione un estado</option>
                                <option value="activo">Activo</option>
                                <option value="inactivo">Inactivo</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Aplicar Filtros</button>
                </div>
            </div>
        </div>
    </div>
</body>

<style>
    /* Estilos personalizados para el modal */
    .modal-lg {
        max-width: 50%;
        /* Aumenta el ancho máximo del modal */
    }
    .modal-header {
        background-color: #007bff;
        /* Cambia el color de fondo del encabezado */
        color: white;
        /* Cambia el color del texto del encabezado */
    }
    .modal-body {
        padding: 20px;
        /* Aumenta el padding del cuerpo del modal */
    }
    .filter-section {
        margin-bottom: 20px;
        /* Espaciado entre secciones de filtros */
    }
    .filter-section h6 {
        margin-bottom: 10px;
        /* Espaciado debajo del título de la sección */
        font-weight: bold;
        /* Negrita para los títulos de las secciones */
    }
    .date-range {
        display: flex;
        /* Usar flexbox para alinear los campos de fecha */
        gap: 10px;
        /* Espacio entre los campos de fecha */
    }
</style>

</html>