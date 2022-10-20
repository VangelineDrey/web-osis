<?php
    require 'functions.php';

    $id=$_GET["id"];

    $datas= query("SELECT * FROM artikel WHERE id =$id")[0];


    if (isset($_POST["submit"])) { 

        if(artikeledit($_POST) > 0){
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
               <input type="hidden" name="id" value="<?= $datas["id"]; ?>">
                <input type="hidden" name="oldimage" value="<?= $datas["image"]; ?>"> 
               <div class="row">
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" name="title" id="title" placeholder="Title" autocomplete="on"value="<?= $datas["title"]; ?>">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" name="tag" id="tag" placeholder="Tag" autocomplete="on" value="<?= $datas["tag"]; ?>">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" name="author" id="author" placeholder="Author" autocomplete="on" value="<?= $datas["author"]; ?>">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" name="link" id="link" placeholder="Link" autocomplete="on" value="<?= $datas["link"]; ?>">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <label for="image">image</label>
                      <input type=file oninput="pic.src=window.URL.createObjectURL(this.files[0])" name="image" class="form-control @error('image') is-invalid @enderror"/>
                      <img id="pic" src="images/<?= $datas["image"]; ?>" style="width:200px;height:auto;"/>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="submit" name="submit" />
                    </fieldset>
                  </div>
                </div>
              </form>