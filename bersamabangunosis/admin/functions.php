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

    function programedit($data){
        global $conn;
    $id=$data["id"]; 
    $nama= htmlspecialchars($data["name"]);
    $link= htmlspecialchars($data["redirect"]);
    $detail= htmlspecialchars($data["detail"]);
    $gambarlama= htmlspecialchars($data["oldimage"]);
    
    if($_FILES['image']['error'] === 4){
        $gambar=$gambarlama;
    } else {
    $gambar= upload('image');
    }

    $query= "UPDATE proker SET name='$nama',redirect='$link',detail='$detail',image='$gambar'
    WHERE id= $id
    ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
    }

    function programdelete($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM proker where id = $id");
    
        return mysqli_affected_rows($conn);
    }

    function divisi($data){
        global $conn;
    
        $nama= htmlspecialchars($data["name"]);
        $descr= htmlspecialchars($data["descr"]);
        $gambar = uploadd("image");
    
        $query= "INSERT INTO divisi
         VALUES ('','$nama','$descr','$gambar')
         ";
         mysqli_query($conn,$query);
    
        return mysqli_affected_rows($conn);
        
    }
    
    function uploadd($gambar){
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
        
        $namafilebaru = 'divisi'.uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $ekstgambar;
        
        move_uploaded_file($tmpname,'images/'.$namafilebaru);
        return $namafilebaru;
    
    }
    
        function divisiedit($data){
            global $conn;
        $id=$data["id"]; 
        $nama= htmlspecialchars($data["name"]);
        $descr= htmlspecialchars($data["descr"]);
        $gambarlama= htmlspecialchars($data["oldimage"]);

        if($_FILES['image']['error'] === 4){
            $gambar=$gambarlama;
        } else {
        $gambar= uploadd('image');
        }
    
        $query= "UPDATE divisi SET name='$nama',shortdesc='$descr',image='$gambar'
        WHERE id= $id
        ";
        mysqli_query($conn,$query);
    
        return mysqli_affected_rows($conn);
        }
    
        function divisidelete($id){
            global $conn;
            mysqli_query($conn,"DELETE FROM divisi where id = $id");
            return mysqli_affected_rows($conn);
        }

    
        function artikel($data){
            global $conn;
        
            $title= htmlspecialchars($data["title"]);
            $tag= htmlspecialchars($data["tag"]);
            $author= htmlspecialchars($data["author"]);
            $link= htmlspecialchars($data["link"]);
            $gambar = uploada("image");
        
            $query= "INSERT INTO artikel
             VALUES ('','$title','$tag','$author','$link','$gambar')
             ";
             mysqli_query($conn,$query);
        
            return mysqli_affected_rows($conn);
            
        }
        
        function uploada($gambar){
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
            
            $namafilebaru = 'artikel'.uniqid();
            $namafilebaru .= '.';
            $namafilebaru .= $ekstgambar;
            
            move_uploaded_file($tmpname,'images/'.$namafilebaru);
            return $namafilebaru;
        
        }
        
            function artikeledit($data){
                global $conn;
            $id=$data["id"]; 
            $title= htmlspecialchars($data["title"]);
            $tag= htmlspecialchars($data["tag"]);
            $author= htmlspecialchars($data["author"]);
            $link= htmlspecialchars($data["link"]);
            $gambarlama= htmlspecialchars($data["oldimage"]);
    
            if($_FILES['image']['error'] === 4){
                $gambar=$gambarlama;
            } else {
            $gambar= uploada('image');
            }
        
            $query= "UPDATE artikel SET title='$title',tag='$tag', author='$author',link='$link',image='$gambar'
            WHERE id= $id
            ";
            mysqli_query($conn,$query);
        
            return mysqli_affected_rows($conn);
            }
        
            function artikeldelete($id){
                global $conn;
                mysqli_query($conn,"DELETE FROM artikel where id = $id");
                return mysqli_affected_rows($conn);
            }

            function members($data){
                global $conn;
            
                $nama= htmlspecialchars($data["name"]);
                $divisi= htmlspecialchars($data["divisi"]);
                $dob= htmlspecialchars($data["dob"]);
                $words= htmlspecialchars($data["words"]);
                $akhir= htmlspecialchars($data["akhir"]);
                $gambar = uploadm("image");
            
                $query= "INSERT INTO anggota
                 VALUES ('','$nama','$divisi','$dob','$words','$akhir','$gambar')
                 ";
                 mysqli_query($conn,$query);
            
                return mysqli_affected_rows($conn);
                
            }
            
            function uploadm($gambar){
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
                
                $namafilebaru = 'members'.uniqid();
                $namafilebaru .= '.';
                $namafilebaru .= $ekstgambar;
                
                move_uploaded_file($tmpname,'images/'.$namafilebaru);
                return $namafilebaru;
            
            }
            
                function anggotaedit($data){
                    global $conn;
                $id=$data["id"]; 
                $nama= htmlspecialchars($data["name"]);
                $divisi= htmlspecialchars($data["divisi"]);
                $dob= htmlspecialchars($data["dob"]);
                $words= htmlspecialchars($data["words"]);
                $akhir=htmlspecialchars($data["akhir"]);
                $gambarlama= htmlspecialchars($data["oldimage"]);
    
                if($_FILES['image']['error'] === 4){
                    $gambar=$gambarlama;
                } else {
                $gambar= uploadm('image');
                }
            
                $query= "UPDATE anggota SET name='$nama', divisi='$divisi', dob='$dob',words='$words',image='$gambar', akhirjabatan='$akhir'
                WHERE id= $id
                ";
                mysqli_query($conn,$query);
            
                return mysqli_affected_rows($conn);
                }
            
                function anggotadelete($id){
                    global $conn;
                    mysqli_query($conn,"DELETE FROM anggota where id = $id");
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