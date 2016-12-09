<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formAddItem" name="formAddItem" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Barang</h4>
                </div>
                <div class="modal-body">
                        <div id="alertAdding" class="alert alert-danger" role=alert style="display: none;">
                            <h4>Oh snap! You got an error!</h4>
                            <p id="alertAddingMessage"></p>
                        </div>
                        <div class="form-group">
                            <label for="item_name">Barang</label>
                            <input type="text" name="item[name]" class="form-control" placeholder="Nama Barang">
                        </div>
                        <div class="form-group">
                            <label for="receiver_name">Penerima</label>
                            <input type="text" name="item[receiver_name]" class="form-control" placeholder="Nama Penerima">
                        </div>
                        <div class="form-group">
                            <label for="receiver_phone_number">Kontak Penerima</label>
                            <input type="text" name="item[receiver_phone_number]" class="form-control" placeholder="HP Penerima">
                        </div>
                        <div class="form-group">
                            <label for="destination_address">Kirim ke</label>
                            <textarea class="form-control" name="item[destination_address]" rows="3" placeholder="Alamat Tujuan"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="pickup_address">Diambil dari</label>
                            <textarea class="form-control" name="item[pickup_address]" rows="3" placeholder="Alamat Pengambilan Barang"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-loading-text="Loading..." id="buttonAddItem">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>