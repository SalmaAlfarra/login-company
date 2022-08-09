@extends('base::master')
@section('content')
    <div class="card card-custom example example-compact">
        <div class="card-header">
            <h3 class="card-title">المواعيد</h3>
        </div>
        <!--begin::Form-->
        <form class="form">
            <div class="card-body">
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">عنوان الموعد : </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control form-control-solid" placeholder="عنوان الموعد">
                        <span class="form-text text-muted">أدخل عنوان الموعد  </span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">وصف الموعد : </label>
                    <div class="col-lg-6">
                        <textarea class="form-control form-control-solid" id="exampleTextarea" rows="3"placeholder="وصف الموعد"></textarea>
                        <span class="form-text text-muted">ادخل وصف الموعد</span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">اختر التاريخ :</label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest">
                            <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="اختر التاريخ" data-target="#kt_datetimepicker_3">
                            <div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                    <i class="ki ki-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <span class="form-text text-muted">أدخل تاريخ الموعد  </span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">اختر الوقت :</label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="input-group input-group-solid date" id="kt_datetimepicker_4" data-target-input="nearest">
                            <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="اختر الوقت" data-target="#kt_datetimepicker_4">
                            <div class="input-group-append" data-target="#kt_datetimepicker_4" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                    <i class="ki ki-clock"></i>
                                </span>
                            </div>
                        </div>
                        <span class="form-text text-muted">أدخل وقت الموعد  </span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right"> حالة الموعد : </label>
                    <div class="col-2">
                        <div class="dropdown bootstrap-select form-control">
                            <select class="form-control selectpicker" title="ماهي حالة الموعد ؟" data-style="btn-success" tabindex="null">
                            <option class="bs-title-option" value=""></option>
                                <option>فعال</option>
                                <option>تم إنجازه</option>
                                <option>تم إلغاؤه</option>
                                <option>تم تأجيله</option>
                            </select>
                        </div>
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
