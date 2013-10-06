<?php
    $array_adi = Array(
        "nama" => "adiputra",
        "nim" => "10107633",
        "jurusan" => "TI",
        "kelas" => "IF-13"
    );
    echo "Array dalam PHP : ";
    print_r($array_adi);
    echo "<br />";
    echo "-------------------------------------------<br />";
     
    echo "Array yang sudah convert ke JSON : ";
    $json_adi = json_encode($array_adi);
    print_r($json_adi);
     
     
    echo "<br /><br />"
?>
 
<html>
<head>
    <script language='javascript'>
        function ubah_json(){
            var text_json = document.getElementById("json_id").value;
             
            var json_obj = eval('('+text_json+')');
             
            alert(json_obj.nama+ " kelas " +json_obj.kelas+ " jurusan " +json_obj.jurusan+ " NIM "+json_obj.nim);
        }
    </script>
</head>
<body>
<form action="json.php" method='POST'>
    <input type='hidden' name='json_text' id='json_id' value='<?php echo $json_adi; ?>' />
    <input type='submit' name='tbl' value="Convert ke Array lagi" />
    <input type='button' name='button1' value='Ubah ke Object JSON' onclick='ubah_json()'/>
</form>
</body>
</html>
 
<?php
	error_reporting(0);
    if($_POST['tbl']==="Convert ke Array lagi"){
        // ubah bentuk string menjadi bentuk array
        echo "<b>Sebelum Slash dihapus : </b>".$_POST['json_text']."<br /><br />";
         
        $hilang_slash = stripslashes($_POST['json_text']);
        echo "<b>Sesudah Slash dihapus : </b>".$hilang_slash."<br /><br />";
         
        $array_back = json_decode($hilang_slash);
        echo "<b>Hasil convert menjadi array kembali : </b>";
        print_r($array_back);
    }
?>