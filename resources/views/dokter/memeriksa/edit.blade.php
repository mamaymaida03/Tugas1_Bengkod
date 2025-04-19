@extends('layouts.app')

@section('title', 'Edit Pemeriksaan')

@section('nav-item')
    @include('dokter.components.navbar')
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0">Edit Pemeriksaan Pasien</h1>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Form Pemeriksaan</h3>
            </div>
            <form action="/dokter/memeriksa/{{ $memeriksa->id }}/edit" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Pasien</label>
                        <input type="text" class="form-control" value="{{ $memeriksa->pasien->nama }}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Pemeriksaan</label>
                        <input type="date" name="tgl_periksa" class="form-control" value="{{ $memeriksa->tgl_periksa }}">
                    </div>

                    <div class="form-group">
                        <label>Catatan</label>
                        <textarea name="catatan" class="form-control" rows="3" placeholder="Masukkan catatan pemeriksaan">{{ $memeriksa->catatan }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Pilih Obat</label>
                        <select id="select-obat" class="form-control select2">
                            <option value="">-- Pilih Obat --</option>
                            @foreach ($obats as $obat)
                                <option value="{{ $obat->id }}"
                                    data-nama="{{ $obat->nama_obat }}"
                                    data-kemasan="{{ $obat->kemasan }}"
                                    data-harga="{{ $obat->harga }}">
                                    {{ $obat->nama_obat }} - {{ $obat->kemasan }} - Rp{{ number_format($obat->harga, 0, ',', '.') }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Obat yang Dipilih:</label>
                        <ul id="obat-terpilih" class="list-group mb-2">
                            {{-- Akan diisi oleh JS --}}
                        </ul>
                    </div>

                    <div id="obat-inputs">
                        {{-- Hidden input dari JS --}}
                    </div>

                    <div class="form-group">
                        <label>Biaya Pemeriksaan (Rp)</label>
                        <input type="number" id="biaya-periksa" name="biaya_periksa" class="form-control" value="150000" readonly>
                    </div>

                    <div class="card-footer text-right">
                        <a href="{{ url('/dokter/memeriksa') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-save"></i> Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@push('scripts')
<script>
    const selectObat = document.getElementById('select-obat');
    const listObat = document.getElementById('obat-terpilih');
    const inputContainer = document.getElementById('obat-inputs');
    const biayaPeriksaInput = document.getElementById('biaya-periksa');
    const biayaAwal = 150000;

    const selectedObats = new Map();

    function renderObatTerpilih() {
        listObat.innerHTML = '';
        inputContainer.innerHTML = '';

        let totalHargaObat = 0;

        selectedObats.forEach((data, id) => {
            const listItem = document.createElement('li');
            listItem.className = 'list-group-item d-flex justify-content-between align-items-center';
            listItem.innerHTML = `
                ${data.nama} - ${data.kemasan} - Rp${Number(data.harga).toLocaleString('id-ID')}
                <button type="button" class="btn btn-danger btn-sm ml-2 hapus-obat" data-id="${id}">Hapus</button>
            `;
            listObat.appendChild(listItem);

            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'obats[]';
            input.value = id;
            inputContainer.appendChild(input);

            totalHargaObat += Number(data.harga);
        });

        biayaPeriksaInput.value = biayaAwal + totalHargaObat;
    }

    selectObat.addEventListener('change', function () {
        const option = this.options[this.selectedIndex];
        const id = option.value;

        if (!id || selectedObats.has(id)) return;

        const nama = option.getAttribute('data-nama');
        const kemasan = option.getAttribute('data-kemasan');
        const harga = option.getAttribute('data-harga');

        selectedObats.set(id, { nama, kemasan, harga });
        renderObatTerpilih();

        this.value = '';
    });

    listObat.addEventListener('click', function (e) {
        if (e.target.classList.contains('hapus-obat')) {
            const id = e.target.getAttribute('data-id');
            selectedObats.delete(id);
            renderObatTerpilih();
        }
    });
</script>
@endpush
@endsection
