<!-- Modal Static-->
<div class="modal fade" id="user<?= $user['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Yakin ingin menghapus ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?= $user['firstname']; ?> <?= $user['lastname']; ?>
      </div>
      <div class="modal-footer">
        <a href="delete.php?user=<?= $user['id']; ?>" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>