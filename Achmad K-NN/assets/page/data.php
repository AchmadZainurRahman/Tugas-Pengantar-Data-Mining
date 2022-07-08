<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="HitungData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="HitungDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">

    <form action="index.php?opsi=hitung" method="POST">

      <div class="modal-content px-3">
        <div class="modal-header">
          <h5 class="modal-title" id="HitungDataLabel">Data Tes dan Nilai K</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="form-group mb-1 d-flex align-items-center">
            <label for="d1" class="mb-2 col-3 pt-2 pb-2">Nilai d1</label>

            <input name="d1" id="d1" class="form-control bg-light" type="number">
          </div>

          <div class="form-group mb-1 d-flex align-items-center">
            <label for="d2" class="mb-2 col-3 pt-2 pb-2">Nilai d2</label>

            <input name="d2" id="d2" class="form-control bg-light" type="number">
          </div>

          <div class="form-group mb-1 d-flex align-items-center">
            <label for="K" class="mb-2 col-3 pt-2 pb-2">Nilai K</label>

            <input name="K" id="K" class="form-control bg-light" type="number">
          </div>

        </div>
        <div class="modal-footer justify-content-center">

          <input type="submit" name="submit" value="Hitung" class="btn btn-outline-success  col-12 col-lg-11 p-2">

        </div>
      </div>

    </form>

  </div>
</div>