@extends('template')
@section('isi')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <!-- Page-header start -->
            <div class="page-wrapper">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if ($message = Session::get('gagal'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <!-- <label >ini</label> -->
                <div class="page-header card">
                    <div class="row align-items-end">
                        <div class="card-block table-border-style">
                            <form method="POST" action="/pegawai/posts" enctype="multipart/form-data"
                                class="was-validated">
                                @csrf
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-block">
                                                <h3 class="sub-title">TAMBAH DATA PEGAWAI</h3>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">NIK</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="nik" id="nik" class="form-control"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">NAMA</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="nama" id="nama" class="form-control"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-sm-10">
                                                        <textarea rows="5" cols="5" class="form-control" name="alamat"
                                                            id="alamat" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">NO HP</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="no_hp" id="no_hp" class="form-control"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">JENIS PEGAWAI</label>
                                                    <div class="col-sm-4">
                                                        <select name="jenis_pegawai" id="jenis_pegawai" class="form-control" required>
                                                            <option selected disabled value="">Jenis Pegawai</option>
                                                            <option value="Tetap">Tetap</option>
                                                            <option value="Kontrak">Kontrak</option>
                                                        </select>
                                                    </div>
                                                    <label class="col-sm-2 col-form-label">UNIT KERJA</label>
                                                    <div class="col-sm-4">
                                                        <select name="unit" id="unit" class="form-control" required>
                                                            <option selected disabled value="">Unit Kerja</option>
                                                            <option value="IT">IT</option>
                                                            <option value="Management">Management</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                    <div class="col-sm-4">
                                                        <input type="date" name="tgl_lahir" id="tgl_lahir"
                                                            class="form-control" required>
                                                    </div>
                                                    <label class="col-sm-2 col-form-label">JENIS KELAMIN</label>
                                                    <div class="col-sm-4">
                                                        <select name="jenis_kelamin" id="jenis_kelamin"
                                                            class="form-control" required>
                                                            <option selected disabled value="">Jenis Kelamin </option>
                                                            <option value="laki-laki">Laki - Laki</option>
                                                            <option value="perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary btn-round" type="submit">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
        </div>
    </div>
    <!-- Main-body end -->

    <div id="styleSelector">

    </div>
</div>
{{-- <script>
    $(document).ready(function() {
        $('#jenis_pegawai').select2();
    });
</script> --}}
{{-- <script>
    $(function() {
      $('input[name="tgl_lahir"]').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });
    });
    </script> --}}
@endsection