@extends('base::master')
@section('content')
    <div class="card card-custom card-stretch">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">إضافة بيانات الزبائن من ملف إكسل </h3>
            </div>
        </div>
        <!--begin::Form-->
        <form action="{{route('customer.excel')}} " method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label text-lg-right">تحميل الملف :</label>
                    <div class="col-lg-6">
                        <div class="uppy" id="kt_uppy_5">
                            <div class="uppy-wrapper">
                                <div class="uppy-Root uppy-FileInput-container">
                                    <input class="uppy-FileInput-input uppy-input-control" type="file" name="excelfile" multiple="" id="kt_uppy_5_input_control" style="">
                                    <label class="uppy-input-label btn btn-light-primary btn-sm btn-bold" for="kt_uppy_5_input_control">إضافة ملف</label>
                                </div>
                            </div>
                            <div class="uppy-list"></div>
                            <div class="uppy-status">
                                <div class="uppy-Root uppy-StatusBar is-waiting" aria-hidden="true" dir="ltr">
                                    <div class="uppy-StatusBar-progress" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                                    <div class="uppy-StatusBar-actions"></div>
                                </div>
                            </div>
                            <div class="uppy-informer uppy-informer-min">
                                <div class="uppy uppy-Informer" aria-hidden="true">
                                    <p role="alert"> </p>
                                </div>
                            </div>
                        </div>
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
@endsection
