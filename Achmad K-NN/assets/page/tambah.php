<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success mb-3" data-bs-toggle="modal" data-bs-target="#TambahData" style="font-size: 14px;"><i class="bi bi-plus-square-fill"></i>
  Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="TambahData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="TambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">

    <form action="index.php?opsi=input" method="POST">

      <div class="modal-content px-3">
        <div class="modal-header">
          <h5 class="modal-title" id="TambahDataLabel">Tambah Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="form-group mb-1 d-flex align-items-center">
            <label for="c1" class="mb-2 col-3 pt-2 pb-2">Nilai c1</label>

            <input name="c1" id="c1" class="form-control bg-light" type="number">
          </div>

          <div class="form-group mb-1 d-flex align-items-center">
            <label for="c2" class="mb-2 col-3 pt-2 pb-2">Nilai c2</label>

            <input name="c2" id="c2" class="form-control bg-light" type="number">
          </div>

          <div class="form-group mb-1 d-flex align-items-center">
            <label for="kategori" class="mb-2 col-3 pt-2 pb-2">Data Kategori</label>

            <select id="kategori" class="form-control bg-light" name="kategori" required>
              <option value="">- Pilih-</option>
              <option value="Baik">Baik</option>
              <option value="Buruk">Buruk</option>
            </select>
          </div>

        </div>
        <div class="modal-footer justify-content-center">

          <input type="submit" name="submit" value="Simpan" class="btn btn-outline-success col-12 col-lg-11 p-2">

        </div>
      </div>

    </form>

  </div>
</div>