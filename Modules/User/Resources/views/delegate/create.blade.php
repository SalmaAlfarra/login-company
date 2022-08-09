@extends('base::master')
@section('content')
    <div class="card card-custom example example-compact">
        <div class="card-header">
            <h3 class="card-title">البيانات الشخصية للموزع</h3>
        </div>
        <!--begin::Form-->
        <form class="form">
            <div class="card-body">
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">الاسم الشخصي : </label>
                    <div class="col-lg-2.5">
                        <input type="text" class="form-control form-control-solid" placeholder="الاسم الشخصي">
                        <span class="form-text text-muted">ادخل اسم الموزع الشخصي</span>
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
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">رقم الجوال : </label>
                    <div class="col-lg-5">
                        <input type="phone" class="form-control form-control-solid" placeholder=" رقم الجوال ">
                        <span class="form-text text-muted">أدخل جوال الموزع </span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">صورة الموزع : </label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="image-input image-input-outline image-input-circle" id="kt_image_3">
                            <div class="image-input-wrapper" style="background-image: url({{asset('admin/assets/media/users/100_3.jpg')}})"></div>
                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                <input type="hidden" name="profile_avatar_remove">
                            </label>
                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                            </span>
                        </div>
                        <span class="form-text text-muted">امتدادات الصور المسموحة : png, jpg, jpeg</span>
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
