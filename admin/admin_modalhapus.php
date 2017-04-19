
    <?php
      $nama = $_POST['nama'];
      
      $id = $_POST['id'];
  ?>
    Anda yakin menghapus <?=$nama;?> ?
    <br><br>
    <form action="admin_hapus.php" method="post">
          <input type="hidden" value="<?=$id;?>" name="id">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" value="hapus" name="HAPUS" class="btn btn-danger">Hapus</button>
    </form>