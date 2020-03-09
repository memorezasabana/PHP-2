<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Input</title>
</head>
<style>
    body {
        background: url(bgfi.jpg);
        background-repeat: no-repeat;
        background-size:cover;
        margin:0;
        padding:0;
        color: white;   
    }
    #title {
        font-family: "Times New Roman", sans-serif;
        letter-spacing: 4px;
        padding-top: 20px;
        text-align: center;
    }
    #submit-btn {
    background: CYAN;
    border: none;
    border-radius: 12px;
    box-shadow: 0px 1px 8px CYAN;
    cursor: pointer;
    color: BLACK;
    font-family: "Times New Roman", sans-serif;
    height: 35px;
    transition: 0.25s;
    width: 90px;
    margin: 10px;
    margin-top: 50px;
    }
    #copy{
  font-family: "Times New Roman", sans-serif;
  color:#ffffff;
  letter-spacing: 1px;
  padding-bottom: 2px;
  padding-top: 30px;
  text-align: center;
    }
    </style>

<body>
<form method = "post" action = "hasil.php">
<table align="center">
<div class id= "title">
    <h2>FORM PENDAFTARAN</h2>
</div>
<tr>
<td>Nis </td> 
<td><input type ="text" name="text" size="30"></td><br>
</tr>
<tr>
<td>Nama Depan </td>
<td><input type ="text" name="text" size="30"></td><br>
</tr>
<tr>
<td>Nama Belakang </td>
<td><input type ="text" name="text" size="30"><td><br>
</tr>
<tr>
<td>Tempat Lahir </td>
<td><input type ="text" name="text" size="30"><td><br>
</tr>
<tr>
<td>Tanggal Lahir </td>
<td><input type ="date" name="text" size="30"><td><br>
</tr>
<tr>
<td>Agama </td>
<td><input type ="text" name="text"><td><br>
</tr>
<tr>
<td>Jenis Kelamin </td>
<td><input type ="radio" name="text" value= "Pria">Pria
<input type ="radio" name="text" value= "Wanita">Wanita<td><br>
</tr>
<tr>
<td>Email </td>
<td><input type ="email" name="text" size="30"><td><br>
</tr>
<tr>
<td>Telepon </td>
<td><input type ="text" name="text" size="30"><td><br>
</tr>
<tr>
<td>Instagram </td>
<td><input type ="text" name="text" size="30"><td><br>
</tr>
<tr>
<td>Facebook </td>
<td><input type ="text" name="text" size="30"><td><br>
</tr>
<tr>
<td>WebSite </td>
<td><input type ="WebSite" name="text" size="30"><td><br>
</tr>
<tr>
<td>Alamat </td>
<td><textarea type ="textarea" name="text"></textarea><td><br>
</tr>
<tr>
<td>Jurusan </td>
<td><select nama= "select">
<option value ="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
<option value ="Rekayasa Perangkat Lunak">Teknik Komputer dan Jaringan</option>
</select>
<td><br>
</tr>
<tr>
<td>Kelas </td>
<td><select nama= "select">
<option value ="X">X</option>
<option value ="XI">XI</option>
<option value ="XII">XII</option>
</select>
<td><br>
</tr>
<tr>
<td>Username </td>
<td><input type ="username" name="text" size="30"><td><br>
</tr>
<tr>
<td>Password </td>
<td><input type ="password" name="text" size="30"><td><br>
</tr>
<tr>
<td>Pesan </td>
<td><textarea type ="textarea" name="text" size="30"></textarea><td><br>
</table>
<div align="center">
<input id="submit-btn" type="submit" name="Kirim" value="Simpan">
<input id="submit-btn" type="submit" name="Kirim" value="Batal">
</div>
<div class id="copy">&copy; Copyright by Ozzamo</div>
</body>
</html>
