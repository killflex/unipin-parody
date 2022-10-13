<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Staff</h4>
            </div>
            <form method="POST" action="action.php" name="">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-4">
                                <label>Nama</label>
                                <input name="nama" type="text" class="form-control" required autofocus>
                            </div>
                            <!-- <div class="form-group mb-4">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control" required>
                            </div> -->
                            <!-- <div class="form-group mb-4">
                                <label>Phone</label>
                                <input name="phone" type="tel" class="form-control" required>
                            </div> -->


                            <div class="form-group mb-4">
                                <label>Username</label>
                                <input name="username" type="text" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <label>Password</label>
                                <input name="password" type="password" class="form-control" required>
                            </div>
                            <!-- <div class="form-group mb-4">
                                <label>Role</label>
                                <select class="form-select form-select-sm" id="inputGroupSelect01" name="role">
                                    <option value="Choose..." selected>Choose...</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Keuangan">Keuangan</option>
                                </select>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-sm col-sm-2 btn-default" data-dismiss="modal">Batal</button>
                    <input name="adduser" type="submit" class="btn btn-sm col-sm-2 btn-primary" value="Tambah">
                </div>
            </form>
        </div>
    </div>
</div>