@extends('template')
@section('isi')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <!-- Page-header start -->
            <div class="page-wrapper">
                <div class="page-header card">
                    <div class="row align-items-end">
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tabel">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nik</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Tanggal Lahir</th>
                                            <th scope="col">No Hp</th>
                                            <th scope="col">Unit</th>
                                            <th scope="col">Jenis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; ?>
                                        @foreach ($pegawai as $value)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $value->nik }}</td>
                                            <td>{{ $value->nama_pegawai }}</td>
                                            <td>{{ $value->alamat }}</td>
                                            <td>{{ $value->tgl_lahir }}</td>
                                            <td>{{ $value->no_tlp }}</td>
                                            <td>{{ $value->unit }}</td>
                                            <td>{{ $value->jenis }}</td>
                                        </tr>
                                        <?php $no++ ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
@endsection