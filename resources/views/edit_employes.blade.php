<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier des employés</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <h2>Modifier Employés</h2>
                @if (Session::has('success'))
                <div class="alert alert-danger">{{ Session::get('success') }}</div>
                @endif
                <form method="post" action="{{url('update-employes') }}">
                    @csrf
                    <div class="md-3">
                        <input type="hidden" name="id" class="form-control" value="{{ $data->id }}" />
                        <label>Prenom</label>
                        <input type="text" name="prenom" class="form-control" placeholder="Entrer votre prénom" value="{{ $data->prenom }}" />
                        @error('prenom')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label>Nom</label>
                        <input type="text" name="nom" class="form-control" placeholder="Entrer votre nom" value="{{ $data->nom }}" />
                        @error('nom')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Entrer votre email" value="{{ $data->email }}" />
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label>Télephone</label>
                        <input type="text" name="télephone" class="form-control" placeholder="Entrer votre numéro" value="{{ $data->télephone }}" />
                        @error('télephone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label>Agence</label><br>
                        <select class="form-control" name='agence_id'>
                          @foreach($agence as $ag)
                          <option value="{{$ag->id}}" @if($data->agence_id == $ag->id) selected @endif>{{$ag->nom}}</option>
                          @endforeach
                        </select>
                        @error('agence')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    <div class="md-3">
                        <label>Adresse</label>
                        <textarea name="adresse" class="form-control">{{ $data->adresse }}</textarea>
                        @error('adresse')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="md-3"><br>
                        <input type="submit" name="submit" class="btn btn-success" value="submit" />
                    </div>
                </form>
            </div>
        </div>

    
</body>
</html>