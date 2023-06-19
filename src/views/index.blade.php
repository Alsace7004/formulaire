<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le Formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
        <div class="container mt-5">
            @php
               // $errors = []    

                
            @endphp
            @if (Session::get('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
             
            {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif --}}
            {{-- @if (Session::get('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif --}}
        
            <h5 class="text-center">Formulaire d'envoi</h5>
            <form action="{{route('contact.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nom</label>
                    <input type="text" name="nom" value="{{old('nom')}}" class="form-control @error('nom') is-invalid @enderror" id="exampleFormControlInput1" placeholder="">
                    @error("nom")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                    <input type="text" value="{{old('prenom')}}" name="prenom" class="form-control @error('prenom') is-invalid @enderror" id="exampleFormControlInput1" placeholder="">
                    @error("prenom")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Téléphone</label>
                    <input type="text" value="{{old('telephone')}}" name="telephone" class="form-control @error('telephone') is-invalid @enderror" id="exampleFormControlInput1" placeholder="">
                    @error("telephone")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" value="{{old('email')}}" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="">
                    @error("email")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Adresse</label>
                    <textarea class="form-control @error('adresse') is-invalid @enderror" name="adresse" id="exampleFormControlTextarea1" rows="3">{{old('adresse')}}</textarea>
                    @error("adresse")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Ajouter</button>
                </div>
            </form>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>