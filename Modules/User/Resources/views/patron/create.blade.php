@extends('base::master')
@section('content')
<div class="card card-custom example example-compact">
    <div class="card-header">
        <h3 class="card-title">البيانات الشخصية للكفيل </h3>
    </div>
    <!--begin::Form-->
    <form class="form">
        <div class="card-body">
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">الاسم الشخصي : </label>
                <div class="col-lg-2.5">
                    <input type="text" class="form-control form-control-solid" placeholder="الاسم الشخصي">
                    <span class="form-text text-muted">ادخل اسم العميل الشخصي</span>
                </div>
                <label class="col-lg-1 col-form-label text-lg-right">اسم الأب:</label>
                <div class="col-lg-2.5">
                    <input type="text" class="form-control form-control-solid" placeholder="اسم الوالد">
                    <span class="form-text text-muted">ادخل اسم الوالد</span>
                </div>
                <label class="col-lg-1 col-form-label text-lg-right">اسم الجد :</label>
                <div class="col-lg-2.5">
                    <input type="text" class="form-control form-control-solid" placeholder="اسم الجد">
                    <span class="form-text text-muted">ادخل اسم الجد</span>
                </div>
                <label class="col-lg-1 col-form-label text-lg-right">اسم العائلة :</label>
                <div class="col-lg-2.5">
                    <input type="text" class="form-control form-control-solid" placeholder="اسم العائلة">
                    <span class="form-text text-muted">ادخل اسم العائلة</span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row">
                <label class="col-lg-1 col-form-label text-lg-right">الحالة الإجتماعية :</label>
                <div class="col-lg-3">
                    <div class="checkbox-inline col-lg-1 col-form-label text-lg-right">
                        <label class="checkbox checkbox-success">
                        <input type="checkbox" name="Checkboxes5">
                        <span></span>بنكية</label>
                        <label class="checkbox checkbox-success">
                        <input type="checkbox" name="Checkboxes5" >
                        <span></span>اجتماعية</label>
                        <label class="checkbox checkbox-success">
                        <input type="checkbox" name="Checkboxes5" >
                        <span></span>أخرى</label>
                    </div>
                    <span class="form-text text-muted">اختر الحالة الإجتماعية </span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">رقم الجوال : </label>
                <div class="col-lg-5">
                    <input type="phone" class="form-control form-control-solid" placeholder=" رقم الجوال ">
                    <span class="form-text text-muted">أدخل جوال الموزع </span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">رقم الهوية : </label>
                <div class="col-lg-2.5">
                    <input type="text" class="form-control form-control-solid" placeholder="رقم الهوية ">
                    <span class="form-text text-muted">ادخل رقم هوية العميل</span>
                </div>
                <label class="col-lg-1 col-form-label text-lg-right">تاريخ الإصدار :</label>
                <div class="col-lg-2">
                    <div class="input-group date">
                        <input type="text" class="form-control form-control-solid" id="kt_datepicker_2" readonly="readonly" placeholder="تاريخ إصدار الهوية ">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-calendar-check-o"></i>
                            </span>
                        </div>
                    </div>
                    <span class="form-text text-muted">ادخل تاريخ هوية إصدار الهوية</span>
                </div>
                <label class="col-lg-1 col-form-label text-lg-right">رقم الدخول الموحد:</label>
                <div class="col-lg-2.5">
                    <input type="text" class="form-control form-control-solid" placeholder="ؤقم الدخول الموحد ">
                    <span class="form-text text-muted">ادخل رقم الدخول الموحد</span>
                </div>
                <label class="col-lg-1 col-form-label text-lg-right">تاريخ الميلاد :</label>
                <div class="col-lg-2">
                    <div class="input-group date">
                        <input type="text" class="form-control form-control-solid" id="kt_datepicker_2" readonly="readonly" placeholder="تاريخ الميلاد  ">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-calendar-check-o"></i>
                            </span>
                        </div>
                    </div>
                    <span class="form-text text-muted">ادخل تاريخ  ميلاد العميل </span>
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
</div>
<!--end::Card-->
@endsection

