<!-- Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formAddItem" name="formAddItem" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Profile</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
                            <tr>
                                <th>Nama</th>
                                <td id="profile-name"></td>
                            </tr>
                                <th>Email</th>
                                <td id="profile-email"></td>
                            </tr>
                            <tr>
                                <th>No Telp</th>
                                <td id="profile-telp"></td>
                            </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>