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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Escribir mi Carta</title>
</head>
<body>
    <section class="container-fluid slider d-flex justify-content-center">
        <div class="container">
            <h1 class="display-4 text-center">
                <img src="letter.svg" width="30" height="30" class="d-inline-block"alt="">
                Escribir mi Carta
                <img src="letter.svg" width="30" height="30" class="d-inline-block"alt="">
            </h1>
            <form>
                <textarea class="form-control text form-rounded" id="exampleFormControlTextarea1" rows="14"
                placeholder="Cuentanos tus experiencias..."></textarea>
                <div class="d-flex flex-row justify-content-center mt-3">
                    <button class="btn btn-primary  btn-lg mr-5" type="button" >Anadir imagen</button>
                    <button class="btn btn-primary btn-lg ml-5" type="submit" >Enviar mi carta</button>
                </div>
            </form>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>