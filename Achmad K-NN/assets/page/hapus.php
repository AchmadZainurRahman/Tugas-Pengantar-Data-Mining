<!-- Modal -->
<div class="modal fade" id="HapusData<?php echo $data['no'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="HapusData<?php echo $data['no'] ?>Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bolder" id="HapusData<?php echo $data['no'] ?>Label">Konfirmasi</h5>
      </div>
      <div class="modal-body">
        <h5>Yakin Menghapus Data ke <?php echo $i - 1 ?>?</h5>
      </div>
      <div class="modal-footer justify-content-center">

        <button type="button" class="btn btn-secondary pe-3" data-bs-dismiss="modal" aria-label="Close">Batal</button>

        <a class="btn btn-danger px-4 text-decoration-none text-danger text-white" href="index.php?no=<?php echo $data['no'] ?>&opsi=delete">Ya</a>

      </div>
    </div>
  </div>
</div>