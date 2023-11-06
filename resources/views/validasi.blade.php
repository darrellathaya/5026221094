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
    <script src="operasi.js"></script>
    <script>
        function validate()
        {
            var bil1 = document.getElementById("bil1");
            var bil2 = document.getElementById("bil2");
            var NRP = document.getElementById("NRP");
            var enerpe  = "5026221094";

            if(bil1.value == "" && bil2.value == "" && NRP.value == ""){
                alert("Mohon diisi angka!");
                bil1.focus();
                bil2.focus();
                NRP.focus();
                return false;
            } else if(bil1.value == ""){
                //alert("Bilangan harus diisi");
                bil1.placeholder = "Mohon diisi angka!";
                bil1.focus();
                return false;
            } else if(bil2.value == ""){
                //alert("Bilangan harus diisi");
                bil2.placeholder = "Mohon diisi angka!";
                bil2.focus();
                return false;
            } else if(NRP.value == ""){
                //alert("NRP harus diisi");
                NRP.placeholder = "Mohon diisi angka!";
                NRP.focus();
                return false;
            } else if(isNaN(NRP.value)){
                alert("NRP harus diisi oleh angka!");
                return false;
            } else if(NRP.value.length != enerpe.length){
                alert("NRP harus 10 digit!");
                return false;
            } else {
                return true;
            }

        }
    </script>
</head>

<body>
    <div class="container">
       <form action="https://www.google.com" method="post" onsubmit="return validate();">
            <div class="form-group">
                <label for="bil1">Bilangan 1</label>
                <input type="number" id="bil1" class="form-control">
            </div>
            <div class="form-group">
                <label for="bil2">BIlangan 2</label>
                <input type="number" id="bil2" class="form-control">
            </div>
            <div class="form-group">
                <label for="NRP">NRP</label>
                <input type="text" id="NRP" class="form-control">
            </div>
            <input type="submit" value="KIRIM" class="btn btn-primary">
       </form>
    </div>
</body>

</html>
