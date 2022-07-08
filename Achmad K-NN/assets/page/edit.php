<!-- Modal -->
<div class="modal fade" id="EditData<?php echo $data['no'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditData<?php echo $data['no'] ?>Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <form action="index.php?opsi=edit" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="EditData<?php echo $data['no'] ?>Label">Edit Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <input name="no" id="no" value="<?php echo $data['no'] ?>" class="form-control bg-light" type="number" hidden>

          <div class="form-group mb-1 d-flex align-items-center">
            <label for="c1" class="mb-2 col-3 pt-2 pb-2">Nilai c1</label>

            <input name="c1" id="c1" value="<?php echo $data['c1'] ?>" class="form-control bg-light" type="number">
          </div>

          <div class="form-group mb-1 d-flex align-items-center">
            <label for="c2" class="mb-2 col-3 pt-2 pb-2">Nilai c2</label>

            <input name="c2" id="c2" value="<?php echo $data['c2'] ?>" class="form-control bg-light" type="number">
          </div>

          <div class="form-group mb-1 d-flex align-items-center">
            <label for="kategori" class="mb-2 col-3 pt-2 pb-2">Nilai Class</label>

            <select id="kategori" class="form-control bg-light" name="kategori" required>
              <option value="">- Pilih</option>
              <option value="Baik" <?php echo ($data['kategori'] == "Baik") ? "selected" : "" ?>>Baik</option>
              <option value="Buruk" <?php echo ($data['kategori'] == "Buruk") ? "selected" : "" ?>>Buruk</option>
            </select>
          </div>

        </div>
        <div class="modal-footer justify-content-center">

          <input type="submit" name="submit" value="Edit" class="btn btn-outline-success col-11 p-2">

        </div>
      </div>
    </form>
  </div>
</div>