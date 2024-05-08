<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import SQL to PHPMyAdmin</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>Download File Aplikasi</h1>
        <div style="display: flex; justify-content: center;">
            <p style="">copy path ini</p>
            <p id="path" onclick="copyPath()" style="margin-left: 20px;">C:\xampp\htdocs</p>
        </div>
        <div style="display: flex; justify-content: center;">
            <p>download file aplikasi</p>
            <p style="margin-left: 20px;"><a href="TA-WEB.zip">download</a></p>
        </div>
        <div style="display: flex; justify-content: center;">
            <p style="padding: 10px;"><a href="index.php">back</a></p>
            <p style="padding: 10px;"><a href="tutor2.php">next</a></p>
        </div>
    </div>

    <script>
    function copyPath() {
        var pathText = document.getElementById("path").innerText;
        
        // Buat elemen textarea sementara
        var textarea = document.createElement("textarea");
        textarea.value = pathText;
        
        // Sembunyikan elemen textarea
        textarea.style.position = "absolute";
        textarea.style.left = "-9999px";
        
        // Tambahkan elemen textarea ke body
        document.body.appendChild(textarea);
        
        // Pilih dan salin teks dalam elemen textarea
        textarea.select();
        document.execCommand("copy");
        
        // Hapus elemen textarea sementara
        document.body.removeChild(textarea);
        
        // Beri tahu pengguna bahwa path telah disalin
        alert("Path telah disalin: " + pathText);
    }
</script>
</body>
</html>

</body>
</html>