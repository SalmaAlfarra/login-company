@extends('base::master')
@section('content')
    <div class="card card-custom example example-compact">
        <div class="card-header">
            <h3 class="card-title">المحاكم</h3>
        </div>
        <!--begin::Form-->
        <form class="form" action="{{route('court.store')}}" method="POST" >
            @csrf
            <div class="card-body">
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">اسم المحكمة : </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control form-control-solid" name="name" placeholder="اسم المحكمة">
                        <span class="form-text text-muted">ادخل اسم المحكمة</span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">عنوان المحكمة : </label>
                    <div class="col-lg-5">
                        <input type="text" name="address" class="form-control form-control-solid" placeholder="عنوان المحكمة ">
                        <span class="form-text text-muted">أدخل عنوان المحكمة </span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">رقم هاتف المحكمة : </label>
                    <div class="col-lg-5">
                        <input type="phone" name="phone" class="form-control form-control-solid" placeholder=" رقم الهاتف ">
                        <span class="form-text text-muted">أدخل هاتف المحكمة </span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-7">
                        <button type="submit" class="btn btn-primary mr-2">حفظ</button>
                        <button type="reset" class="btn btn-secondary">إلغاء</button>
                    </div>
                </div>
            </div>
        </form>
    <!--end::Form-->
    </div>
<!--end::Card-->
@endsection
