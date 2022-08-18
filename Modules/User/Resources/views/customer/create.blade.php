@extends('base::master')
@section('content')
<div  class="card card-custom example example-compact">
    <div class="card-header">
        <h3 class="card-title">البيانات الشخصية للعميل</h3>
    </div>
    <!--begin::Form-->
    <form class="form" action="{{route('customer.store')}} " method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">الاسم الشخصي : </label>
                <div class="col-lg-5">
                    <input type="text" name="first_name" class="form-control form-control-solid" placeholder="الاسم الشخصي">
                    <span class="form-text text-muted">ادخل اسم العميل الشخصي</span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">عنوان السكن : </label>
                <div class="col-lg-5">
                    <input type="text" name="address" class="form-control form-control-solid" placeholder="عنوان السكن ">
                    <span class="form-text text-muted">أدخل عنوان سكن العميل </span>
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
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">مركز الشرطة</label>
                <div class="col-lg-5">
                    <select name="police_office_id" id="police_office_id" class="form-control">
                        <option>اختر مركز الشرطة </option>
                        @foreach ($police as $item)
                            <option value="{{$item->id}}"> {{$item->name}}</option>
                        @endforeach
                    </select>
                    <span class="form-text text-muted">اختر مركز الشرطة </span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">المحكمة</label>
                <div class="col-lg-5">
                    <select name="court_id" id="court_id" class="form-control">
                        <option>اختر المحكمة</option>
                        @foreach ($court as $item)
                            <option value="{{$item->id}}"> {{$item->name}}</option>
                        @endforeach
                    </select>
                    <span class="form-text text-muted">اختر المحكمة </span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">رقم الجوال : </label>
                <div class="col-lg-5">
                    <input type="phone" name="phone" class="form-control form-control-solid" placeholder=" رقم الجوال ">
                    <span class="form-text text-muted">أدخل جوال العميل </span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">رقم الهوية : </label>
                <div class="col-lg-2.5">
                    <input type="text" name="identification_number" class="form-control form-control-solid" placeholder="رقم الهوية ">
                    <span class="form-text text-muted">ادخل رقم هوية العميل</span>
                </div>
                <label class="col-lg-1 col-form-label text-lg-right">تاريخ الإصدار :</label>
                <div class="col-lg-2">
                    <div class="input-group date">
                        <input type="text" name="identification_issuance_date" class="form-control form-control-solid" id="kt_datepicker_2" readonly="readonly" placeholder="تاريخ إصدار الهوية ">
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
                    <input type="text" name="government_service_portal_password" class="form-control form-control-solid" placeholder="ؤقم الدخول الموحد ">
                    <span class="form-text text-muted">ادخل رقم الدخول الموحد</span>
                </div>
                <label class="col-lg-1 col-form-label text-lg-right">تاريخ الميلاد :</label>
                <div class="col-lg-2">
                    <div class="input-group date">
                        <input type="text" name="date_of_birth" class="form-control form-control-solid" id="kt_datepicker_2" readonly="readonly" placeholder="تاريخ الميلاد  ">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-calendar-check-o"></i>
                            </span>
                        </div>
                    </div>
                    <span class="form-text text-muted">ادخل تاريخ  ميلاد العميل </span>
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
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row">
                <label class="col-lg-1 col-form-label text-lg-right">الحالة الإجتماعية :</label>
                <div class="col-lg-3">
                    <div class="radio-inline col-lg-1 col-form-label text-lg-right">
                        <label class="radio radio-success">
                        <input type="radio" name="marital_status">
                        <span></span>أعزب</label>
                        <label class="radio radio-success">
                        <input type="radio" name="marital_status" >
                        <span></span>متزوج</label>
                        <label class="radio radio-success">
                        <input type="radio" name="marital_status" >
                        <span></span>مطلق</label>
                    </div>
                    <span class="form-text text-muted">اختر الحالة الإجتماعية </span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">الاسم الزوج/ة الشخصي : </label>
                <div class="col-lg-5">
                    <input type="text" name="partner_first_name" class="form-control form-control-solid" placeholder="الاسم الشخصي">
                    <span class="form-text text-muted">ادخل اسم زوج/ة العميل الشخصي</span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">عنوان سكن أهل الزوج/ة:</label>
                <div class="col-lg-5">
                    <input type="text" name="partner_family_address" class="form-control form-control-solid" placeholder="عنوان سكن أهل الزوج/ة">
                    <span class="form-text text-muted">أدخل عنوان سكن أهل الزوج/ة</span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right"> رقم هوية الزوج/ة:</label>
                <div class="col-lg-4 ">
                    <input type="phone" name="partner_identification_number" class="form-control form-control-solid" placeholder="رقم هوية الزوج/ة">
                    <span class="form-text text-muted">أدخل رقم هوية الزوج/ة</span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">جهة عمل الزوج/ة:</label>
                <div class="col-lg-5">
                    <input type="text" name="partner_employer" class="form-control form-control-solid" placeholder="جهة عمل الزوج/ة">
                    <span class="form-text text-muted">أدخل جهة عمل الزوج/ة</span>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h3 class="card-title">بيانات حساب العميل البنكية</h3>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">رقم الحساب : </label>
                <div class="col-lg-5">
                    <input type="number" name="bank_account_number" class="form-control form-control-solid" placeholder=" رقم الحساب ">
                    <span class="form-text text-muted">أدخل حساب العميل </span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">قيمة المراتب :</label>
                <div class="col-lg-5">
                    <input type="number" name="salary" class="form-control form-control-solid" placeholder="قيمة المرتب ">
                    <span class="form-text text-muted">أدخل قيمة مراتب العميل </span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">بنك العميل : </label>
                <div class="col-lg-5">
                    <select name="bank_id" id="bank_id" class="form-control">
                        <option>اختر بنك العميل</option>
                        @foreach ($bank as $item)
                            <option value="{{$item->id}}"> {{$item->name}}</option>
                        @endforeach
                    </select>
                    <span class="form-text text-muted">اختر بنك العميل : </span>
                </div>
            </div>
            <div class="separator separator-dashed my-10"></div>
            <div class="form-group row mt-4">
                <label class="col-lg-1 col-form-label text-lg-right">فرع بنك العميل :</label>
                <div class="col-lg-5">
                    <select name="branch_id" id="branch_id" class="form-control">
                        <option>اختر   بنك العميل </option>
                        @foreach ($branch as $item)
                            <option value="{{$item->id}}"> {{$item->name}}</option>
                        @endforeach
                    </select>
                    <span class="form-text text-muted">اختر فرع بنك العميل </span>
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
