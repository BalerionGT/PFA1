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
            <?php $__currentLoopData = $liste_students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($student->id); ?></td>
                <td><?php echo e($student->prénom); ?></td>
                <td><?php echo e($student->nom); ?></td>
                <td><?php echo e($student->email); ?></td>
                <td><?php echo e($student->password); ?></td>
                <td><?php echo e($student->year); ?></td>
                <td><?php echo e($student->remember_token); ?></td>
                <td><?php echo e($student->created_at); ?></td>
                <td><?php echo e($student->updated_at); ?></td>
                <td>
                    <a href="#" class="btn btn-info">Editer</a>
                    <a href="#" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>
    </body>
</html><?php /**PATH C:\laragon\www\pfa1\resources\views/students.blade.php ENDPATH**/ ?>