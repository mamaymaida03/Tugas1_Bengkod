<section class="content">
  <div class="container-fluid">
    <!-- general form elements -->
    <div class="card card-danger">
      <div class="card-header">
        <h3 class="card-title">Periksa</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('periksaCreate') }}" method="POST">
        @csrf
        <div class="card-body">
          <input type="hidden" class="form-control" id="id_pasien" name="id_pasien" value="{{ Auth::user()->id }}">

          <div class="form-group">
            <label for="exampleInputDokter">Pilih Dokter</label>
            <select class="form-control" id="id_dokter" name="id_dokter">
              <option value="">-- Pilih Dokter Anda ! --</option>
              @foreach ($showDokter as $dokter)
                <option value="{{ $dokter->id }}">dr. {{ $dokter->nama }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="tgl_periksa">Pilih Tanggal Periksa</label>
            <input type="date" class="form-control" id="tgl_periksa" name="tgl_periksa" required>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-danger">Buat Janji Periksa</button>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- /.content -->
