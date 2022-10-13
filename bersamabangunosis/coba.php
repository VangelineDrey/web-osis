<?php
include 'admin/functions.php';

if (isset($_POST["submit"])) { 

  if(contact($_POST) > 0){
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
               <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" name="name" id="name" placeholder="Nama" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" name="title" id="kepentingan" placeholder="Kepentingan" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="Pesan" required=""></textarea>  
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="submit" name="submit" />
                    </fieldset>
                  </div>
                </div>
              </form>