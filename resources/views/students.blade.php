<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">      
        <title>Students</title>
    </head>

    <body>
        <h1>Liste des élèves</h1>
        <div>
        <a href="#" class="btn btn-primary">Ajoutez un etudiant</a>
        </div>
        <div>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>prénom</th>
                <th>nom</th>
                <th>email</th>
                <th>password</th>
                <th>year</th>
                <th>remember_token</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($liste_students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->prénom}}</td>
                <td>{{$student->nom}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->password}}</td>
                <td>{{$student->year}}</td>
                <td>{{$student->remember_token}}</td>
                <td>{{$student->created_at}}</td>
                <td>{{$student->updated_at}}</td>
                <td>
                    <a href="#" class="btn btn-info">Editer</a>
                    <a href="#" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </body>
</html>