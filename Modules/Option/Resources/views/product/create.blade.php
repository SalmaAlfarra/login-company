@extends('base::master')
@section('content')
    <div class="card card-custom example example-compact">
        <div class="card-header">
            <h3 class="card-title">بيانات المنتجات</h3>
        </div>
        <!--begin::Form-->
        <form class="form">
            <div class="card-body">
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">وصف المنتج : </label>
                    <div class="col-lg-6">
                        <input type="text" name="description" class="form-control form-control-solid" placeholder="وصف المنتج">
                        <span class="form-text text-muted">ادخل وصف المنتج</span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">اسم المنتج : </label>
                    <div class="col-lg-6">
                        <textarea class="form-control form-control-solid" name="name" id="exampleTextarea" rows="3"placeholder="وصف المنتج"></textarea>
                        <span class="form-text text-muted">ادخل اسم المنتج</span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">صورة المنتج : </label>
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
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">سعر الشراء : </label>
                    <div class="col-lg-3">
                        <input type="number" name="" class="form-control form-control-solid" placeholder="سعر الشراء">
                        <span class="form-text text-muted">أدخل  سعر الشراء من المورد للمنتج الذي قمت بإدراجه</span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right"> حالة المنتج : </label>
                    <div class="col-2">
                        <div class="dropdown bootstrap-select form-control">
                            <select class="form-control selectpicker" title="هل المنتج متوفر في المخزن ؟" data-style="btn-success" tabindex="null">
                            <option class="bs-title-option" value=""></option>
                                <option>متوفر في المخزن</option>
                                <option>غير متوفر في المخزن</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">سعر البيع : </label>
                    <div class="col-lg-3">
                        <input type="number" class="form-control form-control-solid" placeholder="سعر البيع">
                        <span class="form-text text-muted">أدخل سعر البيع للعميل للمنتج الذي قمت بإدراجه</span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">الكمية: </label>
                    <div class="col-lg-3">
                        <input type="number" class="form-control form-control-solid" placeholder="الكمية">
                        <span class="form-text text-muted">أدخل الكمية المتوفرة من المنتج الذي قمت بإدراجه</span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right"> برنامج التقسيط : </label>
                    <div class="col-lg-3">
                        <input type="number" class="form-control form-control-solid" placeholder="برنامج التقسيط">
                        <span class="form-text text-muted">أدخل برنامج التقسيط للمنتج الذي قمت بإدراجه المدة يجب أن تكون بالشهر</span>
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
