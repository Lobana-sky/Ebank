

@extends('backend.layout.app')

@section('content')


<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>  المستخدمين   </h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                        <li class="breadcrumb-item">لوحة التحكم</li>
                        <li class="breadcrumb-item active"> المعلومات  الشخصية</li>
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
                                    <h6>Profile Photo</h6>
                                    <div class="media">
                                        <div class="media-left m-r-15">
                                            <img src="assets/images/user.png" class="user-photo media-object" alt="User">
                                        </div>
                                        <div class="media-body">
                                            <p>Upload your photo.
                                                <br> <em>Image should be at least 140px x 140px</em></p>
                                            <button type="button" class="btn btn-default" id="btn-upload-photo">Upload Photo</button>
                                            <input type="file" id="filePhoto" class="sr-only">
                                        </div>
                                    </div>
                                </div>
                                <div class="body">
                                    <h6>المعلومات الشحخصية</h6>
                                    <form method="Post" action="{{ route('user.update', ['user' => Auth::user()->id]) }}" enctype="multipart/form-data">
                                    {{ method_field('PATCH') }}
                                    <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                                <input type="text" class="form-control" required placeholder=" اسم المستخدم" value="{{ Auth::user()->name }}" aria-label="اسم المستخدم"  name ="name" aria-describedby="basic-addon1">
                                @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                                <select class="custom-select" required name="role" id="role">
                                    <option selected value="4">  مسؤول </option>
                               
                                </select>
                                
                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                           </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                                <input type="text" class="form-control" value=" {{ Auth::user()->first_name }} "required placeholder="الاسم الاول" aria-label="الاسم الأول" name="first_name" aria-describedby="basic-addon1">
                                 @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                                <input type="text" class="form-control" required placeholder=" الكنية" value=" {{ Auth::user()->last_name }} "  aria-label=" الكنية"name="last_name" -describedby="basic-addon1">
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                               <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                                <input type="text" class="form-control" required placeholder="البريد الالكتروني"  value=" {{ Auth::user()->email }} " name="email" aria-label="'البريد الالكتروني " aria-describedby="basic-addon2">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                            </div>
                           
                            <div class="input-group mb-3">
                                  الجنس:
                                      @if(Auth::user()->gender)
                                    <label class="fancy-radio custom-color-green"><input name="gender" value="0" type="radio" ><span><i></i>Male</span></label>
                                    <label class="fancy-radio custom-color-green"><input name="gender" value="1" type="radio" checked><span><i></i>Female</span></label>
                                      @else
                                      <label class="fancy-radio custom-color-green"><input name="gender" value="0" type="radio" checked><span><i></i>Male</span></label>
                                    <label class="fancy-radio custom-color-green"><input name="gender" value="1" type="radio" ><span><i></i>Female</span></label>
                                    
                                      @endif
                                       @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                                <input type="text" class="form-control" required placeholder="  " value="{{ Auth::user()->nationality }}" aria-label=" "  name ="nationality" aria-describedby="basic-addon1">
                             

                                    @error('nationality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                           </div>
                        
                            <div class="input-group mb-3">
                               <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                                <input type="password" class="form-control"  value=" {{ Auth::user()->password }} " required placeholder=" كلمة السر" aria-label=" كلمة السر"name="password" -describedby="basic-addon1">
                                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                            </div>  
                            

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                          
                              <input  type="password" class="form-control" name="password_confirmation" placeholder="  تأكيد كلمة السر" required autocomplete="new-password">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                                <input type="text" class="form-control"  style="direction:ltr" value=" {{ Auth::user()->mobile }} "  required placeholder=" رقم الهاتف" aria-label=" رقم الهاتف"name="mobile" describedby="basic-addon1">
                                                  
                                       @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                            
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