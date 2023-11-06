<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <script>
            function showAlert() {
                alert("MAXXWIN. ANDA MENDAPATKAN 100 JUTA. SILAHKAN JUAL RUMAH DAN TINGGALKAN ISTRI ANDA!");
            }
            function changeText() {
                var span = document.getElementById("output");//mendapatkan objek tulisan
                var textBox = document.getElementById("textbox");//mendapatkan objek text box

                textBox.style.color = "red"; //mengubah DOM CSS, colour text diubah ke red 
                span.innerHTML = textBox.value; //mengubah isi text box, dan mengubah tulisan non input 
            }
        </script>
        <button onclick = "showAlert();" class = "btn btn-primary">Klik disini</button>
        <br>
        <button onclick = "changeText();" class = "btn btn-warning">Click me!</button>
        <span id = "output">Replace Me</span>
        <br>
        <input id = "textbox" type ="text" class = "form-control"/>
    </div>
</body>

</html>