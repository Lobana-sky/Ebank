    
@extends('backend.layout.app')

@section('content')

<!-- main page content body part -->
<div id="main-content">
    <div class="container-fluid">
        @include('includes.alert-message')
        <div class="block-header">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>قسم البنوك الرقمية</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                        <li class="breadcrumb-item">لوحة التحكم</li>
                        <li class="breadcrumb-item active"> البنوك الرقمية</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="d-flex flex-row-reverse">
                        <div class="page_action">
                            <a href="javascript:void(0);" data-toggle="modal" class="btn btn-primary" data-target="#createmodal" ><i class="fa fa-add">أضف بنك  جديد</i></a>
                        </div>
                        <div class="p-2 d-flex">
                        </div>
                    </div>
                </div>
            </div>    
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>البنوك الرقمية</h2>
                        </div>
                        <div class="body project_report">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom mb-0">
                                    <thead>
                                        <tr>                                            
                                            <th>اسم  البنك</th>
                                            <th> الصورة </th>
                                            <th> السعر </th>
                                            <th> التصنيف </th>
                                            <th>العمليات</th>
                                            <th>الحالة</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($ebanks as $key => $ebank)
                                        <tr>
                                            <td class="project-title">
                                                <h6>{{$ebank->name}}</h6>
                                            </td>
                                        

                                            <td><img src="{{asset('assets/images/ebanks/'.$ebank->image)}}" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td class="project-title">
                                                <h6>{{$ebank->price}}</h6>
                                            </td>
                                            <td class="project-title">
                                                <h6>  
                                                    @foreach ($ebankSections as $key => $section)
                                                      @if( $ebank->section_id==$section->id)
                                                         {{$section->name}}
                                                         @break
                                                    
                                                     @endif

                                                    @endforeach
                                                </h6>
                                            </td>
                                            <td class="project-actions">
                                                <a href="#defaultModal" data-toggle="modal" data-target="#defaultModal">
                                                  <a href="javascript:void(0);" data-toggle="modal" data-target="#editModal{{$ebank->id}}" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a  href="javascript:void(0);" data-toggle="modal" data-target="#deleteModal{{$ebank->id}}" class="btn btn-sm btn-outline-danger" ><i class="icon-trash"></i></a>
                                            </td>
                                             <td>
                                            @if($ebank->status)
                                            <a href="javascript:void(0);" data-toggle="modal" class="btn btn-primary" data-target="#enableModal{{$ebank->id}}"style="background-color:#22a191" ><i class="fa fa-add" >ايقاف </i></a>
                                                @else
                                            <a href="javascript:void(0);" data-toggle="modal" class="btn btn-primary" data-target="#enableModal{{$ebank->id}}" style="background-color:#23b5a7a1"><i class="fa fa-add" >  تفعيل </i></a>

                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-------------create--------->
<div class="modal fade" id="createmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" >إضافة  بنك   جديد</h4>
            </div>
            <div class="modal-body"> 
                <form method="Post" action="{{ route('ebank.store') }}" enctype="multipart/form-data">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                        </div>
                        <select class="custom-select" required name="section_id" >
                            <option value="" selected>اختر التصنيف</option>
                            @foreach ($ebankSections as $key => $section)
                            <option value="{{$section->id}}" >{{$section->name}}</option>

                            @endforeach
                        </select>  
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                        </div>
                        <input type="text" class="form-control" required placeholder="الاسم"  name="name" aria-label="name" aria-describedby="basic-addon2">

                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                        </div>
                        <input type="text" class="form-control" required placeholder="السعر"  name="price" aria-label="price" aria-describedby="basic-addon2">

                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                        </div>
                        <textarea class="form-control"  name="note" placeholder="الوصف"  ></textarea>

                    </div>
               
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">الصورة</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label" for="inputGroupFile01">اختر الصورة</label>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="modal-footer">   
                        <button type="submit" class="btn btn-primary">حفظ</button>
                        <a href="#" class="btn btn-secondary" data-dismiss="modal">الغاء الأمر</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------delete -------------->
@foreach ($ebanks as $key => $ebank)
<div class="modal fade" id="deleteModal{{$ebank->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" >هل أنت بالتاكيد تريد الحذف </h4>
            </div>
            <div class="modal-body"> 
             <form action="{{ route('ebank.destroy', $ebank->id) }}" method="POST">
               @csrf
               @method('DELETE')
               <input type="hidden" name="_token" value="{{ csrf_token() }}" />
               <div class="modal-footer">
                   <button type="submit" class="btn btn-primary">نعم</button>
                   <a href="#" class="btn btn-secondary" data-dismiss="modal">الغاء الأمر</a>
               </div>
             </form>
            </div>
        </div>
    </div>
</div>
@endforeach

<!--------------edit -------------->
@foreach ($ebanks as $key => $ebank)
<div class="modal fade" id="editModal{{$ebank->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" >تعديل معلومات البنك </h4>
            </div>
            <div class="modal-body"> 
                <form method="POST" action="{{ route('ebank.update', $ebank->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                        </div>
                        <select class="custom-select" required name="section_id" >
             
                           @foreach ($ebankSections as $key => $section)
                               @if( $ebank->section_id==$section->id)
                            <option value="{{$section->id}}" selected>{{$section->name}}</option>
                                @else
                            <option value="{{$section->id}}" >{{$section->name}}</option>
                                @endif

                           @endforeach
                        </select> 
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                        </div>
                        <input type="text" class="form-control" value="{{$ebank->name}}" required placeholder="الاسم" name="name" aria-label="name" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                        </div>
                        <input type="text" class="form-control" required placeholder="السعر" value ="{{$ebank->price}}" name="price" aria-label="price" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                        </div>
                        <textarea class="form-control" name="note"  placeholder="الوصف"  >{{$ebank->note}}</textarea>
                    </div>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">الصورة</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label" for="inputGroupFile01">اختر الصورة </label>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                               
                    <div class="modal-footer"> 
                        <button type="submit" class="btn btn-primary">حفظ</button>
                        <a href="#" class="btn btn-secondary" data-dismiss="modal">الغاء الأمر</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach



<!--------------enable -------------->
@foreach ($ebanks as $key => $ebank)
<div class="modal fade" id="enableModal{{$ebank->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                @if($ebank->status)
                <h4 class="title" id="defaultModalLabeldelete">هل أنت بالتاكيد تريد الغاء تفعيل الخدمة ؟ </h4>
                @else
                
                <h4 class="title" id="defaultModalLabeldelete">هل أنت بالتاكيد تريد تفعيل الخدمة؟  </h4>
                @endif
            </div>
            <div class="modal-body"> 
              <form action="/ebank/{{$ebank->id}}/status" method="POST">
               @csrf
               <input type="hidden" name="_token" value="{{ csrf_token() }}" />
               <div class="modal-footer">
                   <button type="submit" class="btn btn-primary">نعم</button>
                   <a href="#" class="btn btn-secondary" data-dismiss="modal">الغاء الأمر</a>
               </div>
              </form>
           </div>
        </div>
    </div>
</div>
@endforeach


@endsection