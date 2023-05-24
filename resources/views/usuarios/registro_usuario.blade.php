<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }
    </style>
</head>

<body>
    <section class="h-100 h-custom" style="background-color: #8fc4b7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Nuevo Usuario</h3>

                            <form class="px-md-2"action="{{ url('usuario/guardarUsuario/' )}}" method="POST" role="form" id="main-form">
                            @csrf

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" name="nombre" placeholder="Nombre completo" />
                                    <label class="form-label" for="form3Example1q" >Nombre</label>
                                    @if(count($errors) > 0)
                                @foreach($errors->get('nombre') as $error)
                                <span class="text-center text-danger">{{ $error }}</span>
                                @endforeach

                                @endif
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" name ="telefono" placeholder="Usuario" />
                                    <label class="form-label" for="frm3Example1q" >Télefono</label>
                                    @if(count($errors) > 0)
                                @foreach($errors->get('teleofono') as $error)
                                <span class="text-center text-danger">{{ $error }}</span>
                                @endforeach

                                @endif
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" name ="usuario" placeholder="Usuario" />
                                    <label class="form-label" for="frm3Example1q" >Usuario</label>
                                    @if(count($errors) > 0)
                                @foreach($errors->get('usuario') as $error)
                                <span class="text-center text-danger">{{ $error }}</span>
                                @endforeach

                                @endif
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" name="correo" placeholder="Correo" />
                                    <label class="form-label" for="frm3Example1q" >Correo</label>
                                    @if(count($errors) > 0)
                                @foreach($errors->get('correo') as $error)
                                <span class="text-center text-danger">{{ $error }}</span>       
                                @endforeach

                                @endif
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example1q" class="form-control" name="pass"/>
                                    <label class="form-label" for="frm3Example1q">Contraseña</label>
                                    @if(count($errors) > 0)
                                @foreach($errors->get('correo') as $error)
                                <span class="text-center text-danger">{{ $error }}</span>
                                @endforeach

                                @endif
                                </div>
                                
                                <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>