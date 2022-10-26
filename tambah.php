<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <h1>FORM PEMBELIAN BBM</h1>
          <form action="proses_tambah.php" method=POST>
                    <form>
                    <fieldset>
                              <P>
                              <label for="NIK">NIK:</label>
                              <input type="number" name="NIK"/>
</P>
<P>
          <label for="Jenis_Kendaraan">Jenis Kendaraan:</label>
          <select name="jk">
                    <option value="motor">MOTOR</option>
                    <option value="mobil">MOBIL</option>
                    <option value="truk">TRUK</option>
                    <option value="bis">BIS</option>
                    <option value="tussa">TOSSA</option>
</select>
</p>
<input type="submit" value="Kirim Data" name="tambah"/>

                    </fieldset>
                    <form>
</body>
</html>