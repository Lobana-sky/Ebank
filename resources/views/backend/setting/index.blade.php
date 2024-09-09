

@extends('backend.layout.app')

@section('content')


<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>الاعدادات </h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                        <li class="breadcrumb-item">لوحة التحكم</li>
                        <li class="breadcrumb-item active">   </li>
                    </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                            </div>
                            <div class="p-2 d-flex">
                                
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="tab-content">
    
                            <div class="tab-pane active" id="Settings">

                                <div class="body">
                                    <h6>صورة الشعار</h6>
                                    <div class="media">
                                        <div class="media-left m-r-15">
                                            <img src="{{asset('assets/images/setting/'.$setting->logo)}}" class="user-photo media-object" alt="User">
                                        </div>
                                        <div class="media-body">
                                            <p>
                                                <br> <em></em></p>
                                            <input type="file" id="filePhoto" class="sr-only">
                                        </div>
                                    </div>
                                </div>
                                <div class="body my">
                                    <h6> </h6>
                                    <form method="Post" action="{{ route('setting.update', ['setting' => $setting->id]) }}" enctype="multipart/form-data">
                                    {{ method_field('PATCH') }}
                                   
                                    <div class="input-group mb-3">
                                       
                                       <div class="input-group-prepend">
                                       <span class="input-group-text">اسم التطبيق</span>
                                       </div>
                                       <input type="text" class="form-control" required value="{{ $setting->app_name }}" aria-label="اسم المستخدم"  name ="app_name" aria-describedby="basic-addon1">
                                   
                                    </div>
                                    <div class="input-group mb-3">
                                       
                                       <div class="input-group-prepend">
                                       <span class="input-group-text"> facebook</span>
                                       </div>
                                       <input type="text" class="form-control" required value="{{ $setting->facebook }}" aria-label="اسم المستخدم"  name ="facebook" aria-describedby="basic-addon1">
                                   
                                    </div>
                                    <div class="input-group mb-3">
                                       
                                       <div class="input-group-prepend">
                                       <span class="input-group-text"> موبايل</span>
                                       </div>
                                       <input type="text" class="form-control" required value="{{ $setting->mobile }}" aria-label="اسم المستخدم"  name ="mobile" aria-describedby="basic-addon1">
                                   
                                    </div>
                                    <div class="input-group mb-3">
                                       
                                       <div class="input-group-prepend">
                                       <span class="input-group-text"> @</span>
                                       </div>
                                       <input type="email" class="form-control" required value="{{ $setting->email }}" aria-label="اسم المستخدم"  name ="email" aria-describedby="basic-addon1">
                                   
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> عن الشركة!</span>
                                        </div>
                                        <textarea class="form-control"  name="about_text"  placeholder=""  >{{$setting->about_text}}</textarea>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">العنوان</span>
                                        </div>
                                        <textarea class="form-control"  name="address"  placeholder=""  >{{$setting->address}}</textarea>
                                    </div>
                                    <div class="input-group mb-3">
                                       
                                       <div class="input-group-prepend">
                                       <span class="input-group-text"> instagram</span>
                                       </div>
                                       <input type="text" class="form-control" required value="{{ $setting->instagram }}" aria-label="اسم المستخدم"  name ="instagram" aria-describedby="basic-addon1">
                                   
                                    </div>
                                    <div class="input-group mb-3">
                                       
                                       <div class="input-group-prepend">
                                       <span class="input-group-text"> twitter</span>
                                       </div>
                                       <input type="text" class="form-control" required value="{{ $setting->twitter }}" aria-label="اسم المستخدم"  name ="twitter" aria-describedby="basic-addon1">
                                   
                                    </div>
                                    <div class="input-group mb-3">
                                       
                                       <div class="input-group-prepend">
                                       <span class="input-group-text"> telegram</span>
                                       </div>
                                       <input type="text" class="form-control" required value="{{ $setting->telegram }}" aria-label="اسم المستخدم"  name ="telegram" aria-describedby="basic-addon1">
                                   
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">الصورة</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="logo">
                                            <label class="custom-file-label" for="inputGroupFile01">اختر الشعار </label>
                                        </div>
                                    </div>
                          
                        
                            
                          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                           
                         <div class="modal-footer">  
                               <button type="submit" class="btn btn-primary">حفظ</button>
                               <a href="/dashboard" class="btn btn-secondary">الغاء الأمر</a>
                         </div>      
                        </form>                      
                                </div>

                             
                             </div>
    
                         
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection