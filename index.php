<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <title>Gestion etudiant</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>List of students from the classe DSI21 2019</h1>
        </div>
        <div>
            <a href="create.php" class="btn btn-primary">
            <i class="fas fa-user-plus">New student</i></a>
        </div>
        <br>
        <table class="table table-hover">
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Opérations</th>
            </tr>
            <?php
            require 'classes/etudiant.class.php';
            $etudiant=new Etudiant;
            $listetudiant=$etudiant->readAllEtudiant();
            while($data=$listetudiant->fetch())
            {
                echo'<tr>';
                echo'<td>'.$data['id'].'</td>';
                echo'<td>'.$data['firstname'].'</td>';
                echo'<td>'.$data['lastname'].'</td>';
                echo'<td>'.$data['email'].'</td>';
                echo'<td>'.$data['phone'].'</td>';
                echo'<td><a href="edit.php ?id='.$data['id'].'"><i class="fas fa-user-edit">Edit</i></a>&nbsp;&nbsp';
                echo'<a href="delete.php ?id='.$data['id'].'"><i class="fas fa-user-times">Remove</i></a></td>';
                echo'</tr>';
            }
            ?>
        </table>
    </div>
    
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>