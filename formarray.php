<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<body>
    <center>
    <p>form array</p>
    </center>
    <fieldset>
    <legend>form array</legend>
    <form action="" method="get">
    <label for="">masukan jumlah</label>
    <input type="number" name="jml">
    <br>
    <input type="submit" name="submit" value="simpan">
    <hr>
    </form>
    <?php
    if (isset($_GET['submit'])) {
        $jml_form = $_GET['jml'];
        for ($a=1; $a <= $jml_form; $a++) { 
            ?>
        <form action="formarraypro.php" method="post">
        <label for="">nama</label>
        <input type="text" name="nama[]" required>
        <label for="">kelas</label>
        <input type="text" name="kelas[]" required><br>
        <br>

        <?php }?>
        <input type="submit" name="sbm" value="simpan">
        <input type="reset" value="reset">
        </form>
        <?php
        }
    ?>
    </fieldset>
</body>
</html>