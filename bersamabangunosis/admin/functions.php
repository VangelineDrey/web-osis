<?php 

$conn = mysqli_connect("localhost","root","","oska");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows=[]; 
    while ($row= mysqli_fetch_assoc($result)){
        $rows[]=$row; 
    }
    return $rows;
}

function contact($data){
    global $conn;

    $nama= htmlspecialchars($data["name"]);
    $title= htmlspecialchars($data["title"]);
    $email= htmlspecialchars($data["email"]);
    $message= htmlspecialchars($data["message"]);

    $query= "INSERT INTO guests
     VALUES ('','$nama','$email','$title','$message')
     ";
     mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

    
}

function program($data){
    global $conn;

    $nama= htmlspecialchars($data["name"]);
    $link= htmlspecialchars($data["link"]);
    $detail= htmlspecialchars($data["detail"]);
    $gambar = upload("image");

    $query= "INSERT INTO proker
     VALUES ('','$nama','$detail','$link','$gambar')
     ";
     mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
    
}

function upload($gambar){
    $namafile=$_FILES[$gambar]['name'];
    $sizefile=$_FILES[$gambar]['size'];
    $error=$_FILES[$gambar]['error'];
    $tmpname =$_FILES[$gambar]['tmp_name'];

    if($error===4){
        echo"<script>alert('Tidak menerima gambar');</script>";
        return true;
    }

    $ekstgambarvalid=['jpg','jpeg','png','gif','JPEG'];
    $ekstgambar=explode('.',$namafile);
    $ekstgambar= strtolower(end($ekstgambar));

    if( !in_array($ekstgambar,$ekstgambarvalid)){
        echo"<script>alert('File Bukan gambar');</script>";
        return false;
    }
    if($sizefile >10000000){
        echo"<script>alert('Ukuran gambar terlalu besar');</script>";
        return false;
    }
    
    $namafilebaru = 'programkerja'.uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstgambar;
    
    move_uploaded_file($tmpname,'images/'.$namafilebaru);
    return $namafilebaru;

}

    function hapus($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM buku_tamu where id_pesan = $id");
    
        return mysqli_affected_rows($conn);
    }

    function hapus1($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM fotovideo where id_foto = $id");
    
        return mysqli_affected_rows($conn);
    }
    
        function ubah($data){
            global $conn;
            $id=$data["id"]; 
        $nama= htmlspecialchars($data["nama"]);
        $email= htmlspecialchars($data["email"]);
        $pesan= htmlspecialchars($data["pesan"]);
    
        $query= "UPDATE buku_tamu SET nama='$nama',email='$email',pesan='$pesan'
         WHERE id_pesan= $id
         ";
         mysqli_query($conn,$query);
    
        return mysqli_affected_rows($conn);
        }

    //     function ubah1($data){
    //         global $conn;
    //         $id=$data["id"]; 
    //     $author= htmlspecialchars($data["author"]);
    //     $title= htmlspecialchars($data["title"]);
    //     $id_artinfo = htmlspecialchars($data["id_artinfo"]);
    //     $par1= $data["par1"];
    //     $par2= $data["par2"];
    //     $par3= $data["par3"];
    //     $par4= $data["par4"];
    // $img1lama = htmlspecialchars($data["img1lama"]);
    // $img2lama = htmlspecialchars($data["img2lama"]);
    // $img3lama = htmlspecialchars($data["img3lama"]);

    // if($_FILES['img1']['error'] === 4){
    //     $img1=$img1lama;
    // } else {
    // $img1= upload('img1');
    // }
    
    //     $query= "UPDATE fotovideo SET id_artinfo='$id_artinfo',author='$author',title='$title',par1='$par1',par2='$par2',par3='$par3'
    //     ,par4='$par4', img1='$img1', img2='$img2', img3='$img3'
    //      WHERE id_tulisan= $id
    //      ";
    //      mysqli_query($conn,$query);
    
    //     return mysqli_affected_rows($conn);
    //     }      

?>