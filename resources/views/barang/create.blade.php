@extends('layouts.admin')

@section('title', 'Tambah Data Barang')

@section('content')

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah Data Barang Inventaris</h1>
                    <p class="mb-4">Silahkan Isi Formulir Di Bawah Ini Untuk Menambahkan Data Barang!</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-betwen">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Formulir Tambah Barang
                        </h6>
                            <a href="{{ route('barang.index') }}" class="btn btn-secondary btn-sm showdow-sm">
                            <i class="fas fa-arrow-left fa-sm text-white-50-mr-1"></i>
                             Kembali

                            </a>
                      </div>
                      <div class="card-body">

                            <!--peringatan jika terjadi error-->
                             @if($errors->any())
                             <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->any() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                             </ul> 
                         </div>
                     @endif

                            <!--Formulir Tambah Barang-->
                            <form action="{{ route('barang.store') }}" method= "POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="kode_barang">Kode Barang</span class="text_danger">
                                                *</span></label>
                                                <input type="text" name="kode_barang" id="kode_barang"
                                                   class="fotm-control @error('kode_barang') is-invalid @enderror"
                                                   value="{{ old('kode_barang') }}" placeholder="Contoh: INV_001" required>
                                            </div>

                                            <div class="form-group">
                                            <label for="Nama_barang">Nama Barang<span class="text_danger">
                                                <input type="text" name="Nama_barang" id="Nama_barang"
                                                   class="fotm-control @error('Nama_barang') is-invalid @enderror"
                                                   value="{{ old('Nama_barang') }}" placeholder="Contoh: Laptop ASSUS" required>
                                            </div>

                                            <div class="form-group">
                                            <label for="Kategori">Kode Barang<span class="text_danger">
                                                *<span></label>
                                                <select name="Kategori" id="Kategori" class ="form-control" required>
                                                    <option value="">-- pilih kategori --</option>
                                                    <option value="Elektronik"{{ old('kategori') == 'Elektronik' ? 'selected': ''}}>
                                                    Elektronik
                                                </option>
                                                <option value="Komputuer & Jaringan" {{  old('kategori') == 'Komputer & Jaringan' ? 'selected' : ''}}>
                                                Komputer & Jaringan
                                            </option>
                                            <option value="Furnitur"{{ old('kategori') == 'Furnitur' ? 'selected': '' }}>
                                                Furnitur
                                            </option>
                                            <option value="ATK"{{ old('kategori') == 'ATK' ? 'selected': '' }}>
                                                ATK
                                            </option>
                                        </select>

                                    </div>
                                            <div class="form-group">
                                            <label for="Kategori">Kondisi<span class="text_danger">
                                                *<span></label>
                                                <select name="Kondisi" id="kondisi" class ="form-control" required>
                                                    <option value="">-- Pilih kondisi --</option>
                                                    <option value="Baik"{{ old('kondisi')=='Elektronik'?'selected':'' }}>
                                                    Baik
                                                </option>
                                                <option value="Rusak Ringan"{{  old('kondisi')=='Rusak Ringan' ? 'selected' : ''}}>
                                                Rusak Ringan
                                            </option>
                                            <option value="Rusak Berat"{{ old('kondisi')=='Rusak Berat'? 'selected': '' }}>
                                                Rusak Berat
                                            </option>
                                                </select>
                                            </div>
                                    </div>

                                     <div class="col-md-6">
                                        <div class="form-row">
                                        <div class="form-group col-md-7">
                                            <label for="kode_barang">Jumlah<span class="text_danger">
                                                *</span></label>
                                                <input type="number" name="jumlah" id="jumlah"
                                                   class="fotm-control @error('jumlah') is-invalid @enderror"
                                                   value="{{ old('jumlah') }}" min-0" required>
                                            </div>
                                            <div class="form-group">
                                            <label for="Lokasi">Lokasi<span class="text_danger">
                                                *</span></label>
                                                <input type="text" name="Lokasi" id="Lokasi"
                                                   class="fotm-control @error('Lokasi') is-invalid @enderror"
                                                   value="{{ old('Lokasi') }}" placeholder="Contoh: Laptop ASSUS" required>
                                            </div>
                                            <div class="form-group">
                                            <label for="Tanggal_masuk">Tanggal masuk<span class="text_danger">
                                                *</span></label>
                                                <input type="date" name="Tanggal_masuk" id="tanggal_masuk"
                                                   class="fotm-control @error('tanggal_masuk') is-invalid @enderror"
                                                   value="{{ old('tanggal_masuk', date('Y-m-d')) }}">
                                            </div>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save mr-1"></i>
                                            Simpan Data
                                        </button>
                                   </div>
                                </form>
                    </div>
                   </div>

        @endsection


    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>