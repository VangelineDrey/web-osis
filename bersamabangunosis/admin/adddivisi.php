<?php
    require 'functions.php';
    session_start();
    if(!isset($_SESSION["login"])){
        header('location:../login/login.php'); exit;}

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
               <form id="program" action="" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" name="name" id="name" placeholder="Name" autocomplete="on">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" name="descr" id="descr" placeholder="Description" autocomplete="on">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <label for="image">image</label>
                      <input type=file oninput="pic.src=window.URL.createObjectURL(this.files[0])" name="image" class="form-control @error('image') is-invalid @enderror"/>
                      <img id="pic" style="width:200px;height:auto;"/>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="submit" name="submit" />
                    </fieldset>
                  </div>
                </div>
              </form>