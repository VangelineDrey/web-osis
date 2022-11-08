<?php
    require 'functions.php';

    if (isset($_POST["submit"])) { 

        if(divisi($_POST) > 0){
            echo "<script>
        alert('Data berhasil diubah');
        document.location.href='index.php';
            </script>
            ";
            
        } else {echo "<script>
            alert('Data gagal diubah(fileubah)');
            document.location.href='index.php';
                        </script>;";
        }
        }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Program Kerja</title>
    <style>
    input[type=text], textarea{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }

   input[type=submit] {
   width: 100%;
   background-color: #4CAF50;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   border-radius: 4px;
   cursor: pointer;
   }

  input[type=submit]:hover {
  background-color: #45a049;
   }

  div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  }
</style>
  </head>
  <body>
    <h3>Divisi Osis</h3>
               <form id="program" action="" method="post" enctype="multipart/form-data">
                <div>
                  <div>
                      <input type="text" name="name" id="name" placeholder="Name" autocomplete="on">
                  </div>
                  <div>
                      <input type="text" name="descr" id="descr" placeholder="Description" autocomplete="on">
                  </div>
                  <div>
                      <label for="image">image</label>
                      <input type=file oninput="pic.src=window.URL.createObjectURL(this.files[0])" name="image" class="form-control @error('image') is-invalid @enderror"/>
                      <img id="pic" style="width:200px;height:auto;"/>
                  </div>
                  <div>
                      <input type="submit" name="submit" />
                  </div>
                </div>
              </form>
  </body>
</html>