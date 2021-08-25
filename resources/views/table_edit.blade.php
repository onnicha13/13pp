@extends('layouts.master')

@php $header='update'; @endphp
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
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Example</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('table') }}">table</a></li>
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
            <div class="card-header">
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

                <form action="{{ route('table_update') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $edit->id }}" name="id">
                    <div class="form-group">
                        <label for="">จังหวัด</label>
                        <input type="text" name="province" class="form-control" value="{{ $edit->province }}">
                    </div>
                    <div class="form-group">
                        <label for="">ตำบล</label>
                        <input type="text" name="district" class="form-control" value="{{ $edit->district }}">
                    </div>
                    <div class="form-group">
                        <label for="">อำเภอ</label>
                        <input type="text" name="amphoe" class="form-control" value="{{ $edit->amphoe }}">
                    </div>
                    <div class="form-group">
                        <label for="">รหัสไปรษณีย์</label>
                        <input type="text" name="zipcode" class="form-control" maxlength="5" value="{{ $edit->zipcode }}">
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" onclick="location.replace('{{ route('table') }}');" style="width: 100px;">back</button>
                <button type="submit" class="btn btn-success" style="width: 100px;">update</button>
            </div>
            </form>
        </div>

    </section>
</div>
@endsection

@section('custom-js-script')
@endsection

@section('custom-js')
@endsection