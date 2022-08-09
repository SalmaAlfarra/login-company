@extends('base::master')
@section('content')
    <div class="card card-custom example example-compact">
        <div class="card-header">
            <h3 class="card-title">القضايا</h3>
        </div>
        <!--begin::Form-->
        <form class="form">
            <div class="card-body">
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">رقم القضية  : </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control form-control-solid" placeholder="اسم القضية">
                        <span class="form-text text-muted">ادخل رقم القضية  </span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">عنوان القضية : </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control form-control-solid" placeholder="عنوان القضية">
                        <span class="form-text text-muted">ادخل عنوان القضية  </span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">وصف القضية : </label>
                    <div class="col-lg-6">
                        <textarea class="form-control form-control-solid" id="exampleTextarea" rows="3"placeholder="وصف القضية"></textarea>
                        <span class="form-text text-muted">ادخل وصف القضية</span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">مبلغ القضية  : </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control form-control-solid" placeholder="مبلغ القضية">
                        <span class="form-text text-muted">ادخل مبلغ القضية  </span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">تكاليف القضية  : </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control form-control-solid" placeholder="تكاليف القضية">
                        <span class="form-text text-muted">ادخل تكاليف القضية  </span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-7">
                        <button type="reset" class="btn btn-primary mr-2">حفظ</button>
                        <button type="reset" class="btn btn-secondary">إلغاء</button>
                    </div>
                </div>
            </div>
        </form>
    <!--end::Form-->
    </div>
<!--end::Card-->
@endsection
