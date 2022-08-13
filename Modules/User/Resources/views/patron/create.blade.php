@extends('base::master')
@section('content')
<div class="card card-custom example example-compact">
    <div class="card-header">
        <h3 class="card-title">البيانات الشخصية للكفيل </h3>
    </div>
    <!--begin::Form-->
    <form class="form" action="{{route('patron.store')}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">الاسم الشخصي : </label>
                <div class="col-lg-2.5">
                    <input type="text" name="first_name" class="form-control form-control-solid" placeholder="الاسم الشخصي">
                    <span class="form-text text-muted">ادخل اسم العميل الشخصي</span>
                </div>
                <label class="col-lg-1 col-form-label text-lg-right">اسم الأب:</label>
                <div class="col-lg-2.5">
                    <input type="text" name="father_name" class="form-control form-control-solid" placeholder="اسم الوالد">
                    <span class="form-text text-muted">ادخل اسم الوالد</span>
                </div>
                <label class="col-lg-1 col-form-label text-lg-right">اسم الجد :</label>
                <div class="col-lg-2.5">
                    <input type="text" name="grandfather_name" class="form-control form-control-solid" placeholder="اسم الجد">
                    <span class="form-text text-muted">ادخل اسم الجد</span>
                </div>
                <label class="col-lg-1 col-form-label text-lg-right">اسم العائلة :</label>
                <div class="col-lg-2.5">
                    <input type="text" name="family_name" class="form-control form-control-solid" placeholder="اسم العائلة">
                    <span class="form-text text-muted">ادخل اسم العائلة</span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right"> عنوان الكفيل : </label>
                <div class="col-lg-5">
                    <input type="text" name="address" class="form-control form-control-solid" placeholder=" رقم العنوان ">
                    <span class="form-text text-muted">أدخل عنوان الكفيل </span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row">
                <label class="col-lg-1 col-form-label text-lg-right"> نوع الكفالة :</label>
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
                    <span class="form-text text-muted">اختر نوع الكفالة  </span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">رقم الجوال : </label>
                <div class="col-lg-5">
                    <input type="phone" name="phone" class="form-control form-control-solid" placeholder=" رقم الجوال ">
                    <span class="form-text text-muted">أدخل جوال الكفيل </span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">رقم الهوية : </label>
                <div class="col-lg-2.5">
                    <input type="text" name="identification_number" class="form-control form-control-solid" placeholder="رقم الهوية ">
                    <span class="form-text text-muted">ادخل رقم هوية الكفيل</span>
                </div>
                <label class="col-lg-1 col-form-label text-lg-right">رقم الدخول الموحد:</label>
                <div class="col-lg-2.5">
                    <input type="text" class="form-control form-control-solid" name="government_service_portal_password" placeholder="رقم الدخول الموحد ">
                    <span class="form-text text-muted">ادخل رقم الدخول الموحد</span>
                </div>
            </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">المدينة</label>
                    <div class="col-lg-5">
                        <select name="city_id" id="city_id" class="form-control">
                            <option>اختر مدينة</option>
                            @foreach ($city as $item)
                                <option value="{{$item->id}}"> {{$item->name}}</option>
                            @endforeach
                        </select>
                        <span class="form-text text-muted">اختر المدينة </span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
            <div class="form-group row">
                <label class="col-lg-1 col-form-label text-lg-right">جهة العمل :</label>
                <div class="col-lg-3">
                    <input type="text" name="employer" class="form-control form-control-solid" placeholder="جهة العمل">
                    <span class="form-text text-muted">أدخل جهة العمل </span>
                </div>
                <label class="col-lg-1 col-form-label text-lg-right">المسمى الوظيفي :</label>
                <div class="col-lg-3">
                    <input type="text" name="job_title" class="form-control form-control-solid" placeholder="المسمى الوظيفي">
                    <span class="form-text text-muted">أدخل المسمى الوظيفي</span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row">
                <label class="col-lg-1 col-form-label text-lg-right">نوع الوظيفة :</label>
                <div class="col-lg-3">
                    <div class="radio-inline col-lg-1 col-form-label text-lg-right">
                        <label class="radio radio-success">
                        <input type="radio" name="job_type">
                        <span></span>حكومية</label>
                        <label class="radio radio-success">
                        <input type="radio" name="job_type" >
                        <span></span>مدنية</label>
                        <label class="radio radio-success">
                        <input type="radio" name="job_type" >
                        <span></span>أخرى</label>
                    </div>
                    <span class="form-text text-muted">أدخل نوع الوظيفة</span>
                </div>
            </div>
            <div class="card-body">
                <h3 class="card-title">بيانات حساب الكفيل البنكية</h3>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">رقم الحساب : </label>
                    <div class="col-lg-5">
                        <input type="number" name="bank_account_number" class="form-control form-control-solid" placeholder=" رقم الحساب ">
                        <span class="form-text text-muted">أدخل حساب الكفيل </span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">قيمة المراتب :</label>
                    <div class="col-lg-5">
                        <input type="number" name="salary" class="form-control form-control-solid" placeholder="قيمة المرتب ">
                        <span class="form-text text-muted">أدخل قيمة مراتب الكفيل </span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">بنك الكفيل : </label>
                    <div class="col-lg-5">
                        <select name="bank_id" id="bank_id" class="form-control">
                            <option>اختر بنك الكفيل</option>
                            @foreach ($bank as $item)
                                <option value="{{$item->id}}"> {{$item->name}}</option>
                            @endforeach
                        </select>
                        <span class="form-text text-muted">اختر بنك الكفيل : </span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">فرع بنك الكفيل :</label>
                    <div class="col-lg-5">
                        <select name="branch_id" id="branch_id" class="form-control">
                            <option>اختر   بنك الكفيل </option>
                            @foreach ($branch as $item)
                                <option value="{{$item->id}}"> {{$item->name}}</option>
                            @endforeach
                        </select>
                        <span class="form-text text-muted">اختر البنك </span>
                    </div>
                </div>
            </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-7">
                    <button type="submit" class="btn btn-primary mr-2">التالي</button>
                    <button type="reset" class="btn btn-secondary">إلغاء</button>
                </div>
            </div>
        </div>
    </form>
<!--end::Form-->
</div>
<!--end::Card-->
@endsection

