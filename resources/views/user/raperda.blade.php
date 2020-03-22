@extends('template.backend.main')
@section('title')
SIPERDA
@endsection

@section('ribbon')
<li>Pajak Provinsi</li>
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
                                    <h2>Form Pajak Provinsi</h2>
                                </header>
                                <div>
                                    <div class="jarviswidget-editbox">
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="widget-body">
                                        <form method="post" class="form-horizontal" id="dynamic_form">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">
                                                        Nomor</label>
                                                    <div class="col-sm-7">
                                                        <input class="form-control" type="text" name="nomor_perda"
                                                            id="nomor_perda" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">
                                                        Tahun</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select" id="tahun" name="tahun">
                                                            <?php $now = date('yy') + 4;
                                                                for ($i=$now-6; $i <=$now ; $i++) { 
                                                                    echo "<option>".$i."</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">
                                                        Tentang</label>
                                                    <div class="col-sm-7">
                                                        <input class="form-control" type="text" name="perihal"
                                                            id="perihal" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">
                                                        A.&nbsp;&nbsp;Jenis Pajak Daerah</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select" id="subjek" name="subjek">

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">
                                                        B.&nbsp;&nbsp;Subjek Pajak</label>
                                                    <div class="col-sm-7">
                                                        <input class="form-control" readonly="" type="text"
                                                            name="perihal" id="perihal" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">
                                                        C.&nbsp;&nbsp;Objek Pajak</label>
                                                    <div class="col-sm-7">
                                                        <input class="form-control" type="text" readonly=""
                                                            name="perihal" id="perihal" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">
                                                        D.&nbsp;&nbsp;Pengecualian Objek Pajak</label>
                                                    <div class="col-sm-7">
                                                        <input class="form-control" type="text" name="perihal"
                                                            id="perihal" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="">
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">
                                                            E.&nbsp;&nbsp;Tarif</label>
                                                        <div class="col-sm-7">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label">
                                                        F.&nbsp;&nbsp;Keberpihakan untuk memudahkan berusaha</label>
                                                    <div class="col-sm-7">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <textarea class="form-control" style="resize: none;"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label"></label>
                                                    <div class="col-sm-7">
                                                        <button type="button" id="addmore"
                                                            class="btn btn bg-color-redLight txt-color-white btn-sm pull-right"><i
                                                                class="fa fa-plus-circle"
                                                                aria-hidden="true"></i>&nbsp;&nbsp;Tambah
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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