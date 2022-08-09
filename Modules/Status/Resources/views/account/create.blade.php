@extends('base::master')
@section('content')
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title">مصادر الدخل</h3>
        </div>
        <!--begin::Form-->
        <form class="form">
            <div class="card-body">
                <div class="form-group row mt-2">
                    <label class="col-lg-1 col-form-label text-lg-right"> الاسم البنك : </label>
                    <div class="col-4">
                        <div class="dropdown bootstrap-select show-tick form-control">
                            <select class="form-control selectpicker" data-max-options="2">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                    </div>
                    <label class="col-lg-1 col-form-label text-lg-right">اسم الفرع : </label>
                    <div class="col-4">
                        <div class="dropdown bootstrap-select show-tick form-control">
                            <select class="form-control selectpicker">
                                <optgroup label="Condiments" data-max-options="2">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </optgroup>
                                <optgroup label="Breads" data-max-options="2">
                                    <option>Plain</option>
                                    <option>Steamed</option>
                                    <option>Toasted</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                    <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">رقم الحساب  : </label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control form-control-solid" placeholder=" رقم الحساب ">
                        <span class="form-text text-muted">أدخل حساب العميل </span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right"> إجمالي الدخل  : </label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control form-control-solid" placeholder="إجمالي الدخل ">
                        <span class="form-text text-muted">أدخل إجمالي دخل العميل </span>
                    </div>
                </div>
            </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-7">
                    <button type="reset" class="btn btn-primary mr-2">التالي</button>
                    <button type="reset" class="btn btn-secondary">إلغاء</button>
                </div>
            </div>
        </div>
    </form>
        <!--end::Form-->
@endsection
