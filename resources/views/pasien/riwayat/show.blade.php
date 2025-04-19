<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Riwayat Periksa</h3>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Dokter</th>
                  <th>Tanggal Periksa</th>
                  <th>Biaya Periksa</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($periksa as $periksas)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>dr. {{ $periksas->dokter->nama }}</td>
                    <td>{{ $periksas->tgl_periksa ? $periksas->tgl_periksa : '-' }}</td>
                    <td>{{ $periksas->biaya_periksa ? 'Rp. ' . number_format($periksas->biaya_periksa, 2) : '-' }}</td>
                    <td>
                      <span class="badge {{ $periksas->biaya_periksa ? 'badge-success' : 'badge-warning' }}">
                        {{ $periksas->biaya_periksa ? 'Telah Diperiksa' : 'Menunggu Diperiksa' }}
                      </span>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
