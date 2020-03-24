@extends('template.backend.main')
@section('title')
SIPERDA
@endsection

@section('ribbon')
<li>Pajak Kab/Kota</li>
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
            <div class="col-sm-12">
                @if($errors->any())
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-warning fade in">
                            <button class="close" data-dismiss="alert">
                                ×
                            </button>
                            <i class="fa-fw fa fa-warning"></i>
                            <strong>Peringatan</strong> {{$errors->first()}}
                        </div>
                    </div>
                </div>
                @endif
                @if(session()->has('message'))
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-success fade in">
                            <button class="close" data-dismiss="alert">
                                ×
                            </button>
                            <i class="fa-fw fa fa-check"></i>
                            <strong>Sukses</strong> {{session()->get('message')}}
                        </div>
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col-sm-12">
                    <a href="{{route('user.kab_kota.create')}}" class="btn btn-sm btn-success"><i class="fa fa-save"></i>&nbsp;&nbsp;Tambah Perda</a>
                    </div>
                </div>
                <br/><br/>
                <section id="widget-grid" class="">
                    <div class="row">
                        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="jarviswidget jarviswidget-color-magenta jarviswidget-sortable" id="well_"
                                data-widget-colorbutton="false" data-widget-editbutton="false"
                                data-widget-togglebutton="false" data-widget-deletebutton="false"
                                data-widget-fullscreenbutton="false" data-widget-custombutton="false"
                                data-widget-collapsed="true" data-widget-sortable="true">
                                <header>
                                    <span class="widget-icon"> <i class="fa fa-tasks"></i> </span>
                                    <h2>Data Pajak Kab/Kota</h2>
                                </header>
                                <div>
                                    <div class="jarviswidget-editbox">
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="widget-body">
                                        <table id="dt_basic_1" class="table table-striped table-bordered table-hover"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <center>No</center>
                                                    </th>
                                                    <th>
                                                        <center>Tahun</center>
                                                    </th>
                                                    <th>
                                                        <center>No. Perda</center>
                                                    </th>
                                                    <th>
                                                        <center>Tentang</center>
                                                    </th>
                                                    <th>
                                                        <center>Jenis Pajak</center>
                                                    </th>
                                                    <th>
                                                        <center>Subjek Pajak</center>
                                                    </th>
                                                    <th>
                                                        <center>Objek Pajak</center>
                                                    </th>
                                                    <th>
                                                        <center>Status</center>
                                                    </th>
                                                    <th>
                                                        <center>Aksi</center>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="isiTableedit">
                                                <tr>
                                                    <td>1.</td>
                                                    <td>2020</td>
                                                    <td>Perda Dummy</td>
                                                    <td>Perda Dummy</td>
                                                    <td>Perda Dummy</td>
                                                    <td>Perda Dummy</td>
                                                    <td>Perda Dummy</td>
                                                    <td>Perda Dummy</td>
                                                    <td>
                                                        <center>
                                                            <button class="btn btn-sm btn-success"><i
                                                                    class="fa fa-pencil"></i></button> &nbsp;
                                                            <button class="btn btn-sm btn-primary"><i
                                                                    class="fa fa-eye"></i></button>&nbsp;
                                                            <button class="btn btn-sm btn-danger"><i
                                                                    class="fa fa-close"></i></button>&nbsp;
                                                            <button class="btn btn-sm btn-warning"><i
                                                                    class="fa fa-print"></i></button>
                                                        </center>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>
                <section id="widget-grid" class="">
                    <div class="row">
                        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        </article>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
$('.select').select2({
    placeholder: 'Select an option'
});
</script>
@endsection