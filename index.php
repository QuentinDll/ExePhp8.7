<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 8</title>
    </head>
    <body>
        <p>
        <?php
        if (!empty($_POST['gender']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['file'])){
            
            $fileInfo = pathinfo($_filES['file']['name']);
            if ($fileInfo['extension'] == 'pdf'){
                echo 'le fichier est un PDF';
            }
            echo $_POST['gender'] ." ". $_POST['firstname'] ." ". $_POST['lastname'] ." ". $_POST['file'];
        }else{
        ?>
        </p>
        <form action="index.php" method="post">
            <label for="firstname">Nom: </label>
            <input type="text" name="firstname" id="firstname" />
            
            <label for="lastname">Prénom: </label>
            <input type="text" name="lastname" id="lastname" />
            
            <label for="gender">Genre</label>
            <select name="gender" id="gender">
                <option selected disabled>Genre</option>
                <option value="M">M</option>
                <option value="Mme">Mme</option>
            </select><br />
            
            <label for="file">Fichier: </label>
            <input type="file" id="file" />
            
            <input type="submit" name="submit" value="Send" />
        </form>
        <p>
        <?php } ?>
        </p>
    </body>
</html>
