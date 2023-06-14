<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Prueba</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="vanilla-DT/vanilla-datatables.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="vanilla-DT/vanilla-datatables.js"></script>
    <style>
        html,
        body {
            min-height: 100%;
            width: 100%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger bg-gradient">
        <div class="container">
            <a class="navbar-brand" href="./">¡Realiza tus citas!</a>
        </div>
    </nav>
    <div class="container px-5 my-3">
        <h2 class="text-center">Gestor de Citas</h2>
        <div class="row">
            <div class="col-lg-10 col-md-11 col-sm-12  mx-auto">
                <div class="container-fluid">
                    <div class="card shadow rounded-0">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="card-title col-auto flex-shrink-1 flex-grow-1"><b>¡Comienza ahora mismo!</b></div>
                                <div class="col-auto">
                                    <button type="button" id="add_new" class="btn btn-sm btn-danger bg-gradient rounded-0"><i class="fa-solid fa-plus-square"></i> Agregar Nueva Cita</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body rounded-0">
                            <div class="container-fluid">
                                <table id="memberTable" class="table table-stripped table-bordered">
                                    <colgroup>
                                        <col width="10%">
                                        <col width="25%">
                                        <col width="20%">
                                        <col width="30%">
                                        <col width="15%">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Teléfono</th>
                                            <th class="text-center">Comentarios de la Cita</th>
                                            <th class="text-center">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Member Form Modal -->
    <div class="modal fade" id="memberFormModal" aria-labelledby="memberFormModal" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable rounded-0">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h1 class="modal-title fs-5"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <form action="" id="member-form">
                            <input type="hidden" name="id">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control rounded-0" name="name" id="name" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="contact" class="form-label">Teléfono</label>
                                <input type="text" class="form-control rounded-0" name="contact" id="contact" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="comentario" class="form-label">Comentarios de la Cita</label>
                                <textarea rows="2" class="form-control rounded-0" name="comentario" id="comentario" required="required"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" form="member-form" class="btn btn-danger btn-sm rounded-0">Guardar</button>
                    <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Member Form Modal -->
    <script src="js/app.js"></script>
</body>

</html>