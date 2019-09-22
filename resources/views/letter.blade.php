<!DOCTYPE html>
<html lang="en">
<style>
.slider{
    background: url("backgroud.jpg");
    height: 100vh;
    background-size: cover;
    background-position: center;
}
.text{
    resize: none;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/618ec73bd6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Nino Mensajero</title>
</head>
<body>
    <section class="container-fluid slider d-flex justify-content-center">
        <div class="container">
            <h1 class="display-4 text-center mt-2">
                <img src="letter.svg" width="30" height="30" class="d-inline-block"alt="">
                Escribir mi Carta
                <img src="letter.svg" width="30" height="30" class="d-inline-block"alt="">
            </h1>
            <form>
                <div class="div d-flex justify-content-end">
                    <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#helpModal">Ayuda <i class="far fa-question-circle"></i></button>
                </div>
                <div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="helpTitle">Como escribir mi carta 
                                  <img src="letter.svg" width="30" height="30">
                                </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body font-italic">
                                <p>
                                    Hola Amiguito..!! Para escribir tu carta no es necesario que nos digas tu nombre o la direccion donde vives, 
                                    solo contarnos lo que hiciste en el dia y como te sientes.
                                </p>
                                <p>
                                    Podras anadir 5 imagenes a tu carta para mostrar mejor las actividades que hiciste: 
                                    como jugar con tus amiguitos, hacer la tarea, ir al parque, etc.
                                </p>
                                <p>
                                    Nino Mensajero te respondera en la seccion "Boletin" que publicamos en la pagina.
                                </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-success">Ir a Boletin</button>
                              <button type="button" class="btn btn-success">Ir a Pagina Inicio</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Ayuda</button>
                            </div>
                          </div>
                        </div>
                      </div>
                <textarea class="form-control text form-rounded border border-primary mt-2" id="exampleFormControlTextarea1" rows="14"
                placeholder="Cuentanos tus experiencias..."></textarea>
                <div class="d-flex flex-row justify-content-center mt-3">
                    <button class="btn btn-primary  btn-lg mr-5" type="button">Anadir imagen <i class="ml-2 far fa-images"></i></button>
                    <button class="btn btn-primary btn-lg ml-5" type="submit">Enviar mi carta <i class="ml-2 fas fa-envelope-open-text"></i></button>
                </div>
            </form>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>