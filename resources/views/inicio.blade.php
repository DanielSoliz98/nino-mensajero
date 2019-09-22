<!doctype html>
<html lang="en">
<style>
.backgroud{
    background: url("background.jpg");
    height: 92vh;
    background-size: cover;
    background-position: center;
}
.content{
    height: 90vh;
}
</style>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>NINO MENSAJERO</title>
  </head>
  <body >
      
      <section>
            <nav class="navbar navbar-expand-lg navbar-light bg-info navbar-toggleable-md sticky-top">
                <a class= "navbar-brand" href="{{route('inicio')}}">
                    <img src="letter.svg" width="30" height="30" class="d-inline-block align-top"alt="">
                    NINO MENSAJERO
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="navbar-nav mr-auto text-center ml-auto">
                    </div>
                    <div class="d-flex flex-row justify-content-center">
                    </div>
                </div>
            </nav>
            <div class="container-fluid backgroud">
                <div class=" content d-flex align-items-center justify-content-center">
                <a href="{{route('escribirCarta')}}" class="btn btn-primary btn-lg">Escribir mi Carta</a>
                </div>
            </div>
      </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>