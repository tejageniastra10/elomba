<form action="admin_insert.php" method="post">
          <input class="form-control" required="required" type="text" placeholder="Nama tim" name="namatim" maxlength="30">
                <br>
                 <div class="row">
                    <div class="col-xs-8 col-sm-6">
                        <input class="form-control" required="required" type="text" placeholder="New Username" name="username" maxlength="20">
                    </div>
                    <div class="col-xs-4 col-sm-6">
                        <input class="form-control" required="required" type="text" placeholder="New Password" name="password" maxlength="20">
                    </div>
                </div>
                <br>
                <input class="form-control" required="required"  type="text" placeholder="Alamat" name="alamat" maxlength="20">
                <br>
                <input class="form-control" required="required"  type="text" placeholder="No. Telpon" name="telpon" maxlength="20"> 
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" value="add" name="ADD" class="btn btn-primary">Tambah</button>
</form>