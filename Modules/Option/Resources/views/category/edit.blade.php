@extends('base::master')
@section('content')
    <div class="card card-custom example example-compact">
        <div class="card-header">
            <h3 class="card-title">أصناف المنتجات</h3>
        </div>
        <!--begin::Form-->
        <form class="form" action="{{route('category.update')}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">اسم الصنف : </label>
                    <div class="col-lg-6">
                        <input type="text" value="{{$category->name}}" name="name" class="form-control form-control-solid" placeholder="اسم الصنف">
                        <span class="form-text text-muted">ادخل اسم الصنف</span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">وصف الصنف : </label>
                    <div class="col-lg-6">
                        <textarea class="form-control form-control-solid"  name="description" id="exampleTextarea" rows="3"placeholder="وصف الصنف" > {{{ $category->description }}}</textarea>
                        <span class="form-text text-muted">ادخل وصف الصنف</span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <label class="col-lg-1 col-form-label text-lg-right">صورة الصنف : </label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="image-input image-input-outline image-input-circle" id="kt_image_3">
                            <div class="image-input-wrapper" style="background-image: url({{asset('admin/assets/media/users/100_3.jpg')}})"></div>
                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" name="category_image" accept=".png, .jpg, .jpeg">
                                <input type="hidden" name="profile_avatar_remove">
                            </label>
                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                            </span>
                        </div>
                        <div class="separator separator-dashed my-10" >
                                          <div class="form-group row mt-4">
                                              <a href="{{ asset('/categories/'.$category->category_image) }}" target="_blank">
                                                  <img src="{{ asset('/categories/'.$category->category_image) }} " class="img-fluid"
                                                      width="150px" alt="">
                                              </a>
                                          </div>
                                      </div>
                        <span class="form-text text-muted">امتدادات الصور المسموحة : png, jpg, jpeg</span>
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
