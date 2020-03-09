<!DOCTYPE html>
<html>
<head>
    <title>Membuat Form login</title>
</head>

<style>
    body {
        background: url(matbg.jpg);
        background-repeat: no-repeat;
        background-size:cover;
        margin:0;
        padding:0;
       
    }

    #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 490px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
    }

    #card-content {
        padding: 12px 44px;
    }

    #card-title {
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 4px;
        padding-bottom: 22px;
        padding-top: 13px;
        text-align: center;
    }

    .underline-title {
        background: -webkit-linear-gradient(right, #7a110a, #7a110a);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 89px;
    }

    a {
        text-decoration: none;
    }

    label {
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
    }

    #forgot-pass {``
        color: #7a110a;``
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 3px;
        text-align: right;
    }

    .form {
        align-items: left;
        display: flex;
        flex-direction: column;
    }

    .form-border {
        background: -webkit-linear-gradient(right, #7a110a, #7a110a);
        height: 1px;
        width: 100%;
    }

    .form-content {
        background: #fbfbfb;
        border: none;
        outline: none;
        padding-top: 14px;
    }
    #signup {
    color: #bf6300;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #bf6300, #874600);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #874600;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    margin-right: 15px;
    margin-left: 3.5px;
    transition: 0.25s;
    width: 100px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #ff0400;
}
#copy{
  font-family: "Raleway Thin", sans-serif;
  <color: #000000;
  text-align: center;
}
</style>
</head>
<body>
<div id="card">
<div id="card-content">
    <div id="card-title">
        <h5>LUAS PERMUKAAN & VOLUME KERUCUT</h5>
        <div class="underline-title"></div>
    </div>
    <form action="hitung.php" method="POST" class="form"> 
    <label style="padding-top:13px">&nbsp;Panjang Jari-Jari</label>
    <input id="jari" class="form-content" type="text" name="jari" autocomplete="on" required />
    <div class="form-border"></div>
    <label for="sisi" style="padding-top:22px">&nbsp;Panjang Sisi</label>
    <input id="sisi" class="form-content" type="text" name="sisi" required />
    <div class="form-border"></div>
    <label for="tinggi" style="padding-top:31px">&nbsp;Tinggi</label>
    <input id="tinggi" class="form-content" type="text" name="tinggi" required />
    <div class="form-border"></div>
    <p>
    <input id="submit-btn" type="submit" name="submit" value="LUAS" />
    <input id="submit-btn" type="submit" name="submit" value="VOLUME" />
    </p>
</div>
</div> 
<div class id="copy">&copy; Copyright by Ozzamo</div>
</form>
</body>
</html>