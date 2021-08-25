@extends('layouts.master')

@php $header='หน้าแรก'; @endphp
@section('title',$header)

@section('custom-css-script')
@endsection

@section('custom-css')
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $header }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">{{ $header }}</a></li> -->
                        <li class="breadcrumb-item active">{{ $header }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header bg-gradient-info">
                <h3 class="card-title">{{ $header }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <label for="">DDC Laravel #1</label>
                        <img src="{{ asset('images/Laravel_onlineWorkshop.jpeg') }}" alt="" class=" img-fluid img-thumbnail">

                        <p class="h5 py-3">เนื้อหาการเรียน (รวม 8 วัน)</p>
                        <table class="table table-striped table-bordered table-sm">
                            <thead class="bg-gradient-gray">
                                <tr>
                                    <th class="text-center">วันที่</th>
                                    <th>รายการที่สอน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $arr = [
                                    '1' => 'Laravel ?',
                                    '2' => 'Tamplate / CRUD',
                                    '3' => 'Database Advance (Migration,Thinker,Seender,Relation) /  Create Dashboard with CanvasJS,ChartJS',
                                    '4' => 'Workshop : Survey system part1',
                                    '5' => 'Workshop : Survey system part2',
                                    '6' => 'Workshop : Survey system part3',
                                    '7' => 'Basic API',
                                    '8' => 'Workshop : Covid-19 API'
                                ];
                                ?>
                                @foreach($arr as $key=>$val)
                                <tr>
                                    <td class="text-center">{{ $key }}</td>
                                    <td>{{ $val }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="">Extention แนะนำ</label>
                        <img src="{{ asset('images/extention.jpg') }}" alt="" class=" img-fluid img-thumbnail w-100">
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div> <!-- Content Header (Page header) -->
@endsection

@section('custom-js-script')
@endsection

@section('custom-js')
@endsection