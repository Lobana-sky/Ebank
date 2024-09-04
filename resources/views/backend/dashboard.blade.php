    
    @extends('backend.layout.app')



@section('content')
    
    
    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
       
        <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Project Board</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Project Board</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
                                <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button>
                            </div>
                            <div class="p-2 d-flex">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        <div class="row clearfix row-deck">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card number-chart">
                        <div class="body">
                            <span class="text-uppercase">New Sessions</span>
                            <h4 class="mb-0 mt-2">22,500 <i class="fa fa-level-up font-12"></i></h4>
                            <small class="text-muted">Analytics for last week</small>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                        data-line-Width="1" data-line-Color="#39afa6" data-fill-Color="#73cec7">4,1,5,2,7,3,4</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card number-chart">
                        <div class="body">
                            <span class="text-uppercase">Goal Completions</span>
                            <h4 class="mb-0 mt-2">1,12,500</h4>
                            <small class="text-muted">Analytics for last week</small>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                        data-line-Width="1" data-line-Color="#ffa901" data-fill-Color="#efc26b">1,4,2,3,6,2</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card number-chart">
                        <div class="body">
                            <span class="text-uppercase">TIME ON SITE</span>
                            <h4 class="mb-0 mt-2">1,070</h4>
                            <small class="text-muted">Analytics for last week</small>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                        data-line-Width="1" data-line-Color="#38c172" data-fill-Color="#84d4a6">1,4,2,3,1,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card number-chart">
                        <div class="body">
                            <span class="text-uppercase">BOUNCE RATE</span>
                            <h4 class="mb-0 mt-2">10K</h4>
                            <small class="text-muted">Analytics for last week</small>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                        data-line-Width="1" data-line-Color="#226fd8" data-fill-Color="#7ea7de">1,3,5,1,4,2</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon"><i class="fa fa-flag"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Sessions</div>
                                <h4 class="number mb-0">3,251 <span class="font-12 text-muted"><i class="fa fa-level-up"></i> 13%</span></h4>
                                <small class="text-muted">Analytics for last week</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon"><i class="fa fa-users"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Users</div>
                                <h4 class="number mb-0">25K <span class="font-12 text-muted"><i class="fa fa-level-down"></i> 7%</span></h4>
                                <small class="text-muted">Analytics for last week</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon"><i class="fa fa-user"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">VISITORS</div>
                                <h4 class="number mb-0">21K <span class="font-12 text-muted"><i class="fa fa-level-down"></i> 4%</span></h4>
                                <small class="text-muted">Analytics for last week</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon"><i class="fa fa-thumbs-up"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">LIKES</div>
                                <h4 class="number mb-0">53K <span class="font-12 text-muted"><i class="fa fa-level-up"></i> 15%</span></h4>
                                <small class="text-muted">Analytics for last week</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



          
         
            
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>عملاء جدد</h2>
                       <!--!     <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>-->
                        </div>
                        <div class="body project_report">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom mb-0">
                                    <thead>
                                        <tr>                                            
                                            <th>الاسم</th>
                                            <th>التاريخ</th>
                                            <th>الرصيد الحالي</th>
                                            <th>الشعار</th>
                                            <th>العملاء</th>
                                            <th>الحالة</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="project-title">
                                                <h6>InfiniO 4.1</h6>
                                                <small>Created 14 July, 2020</small>
                                            </td>
                                            <td>8 Aug, 2020</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>                                                
                                                </div>
                                                <small>Completion with: 48%</small>
                                            </td>
                                            <td><img src="assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td class="project-actions">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-title">
                                                <h6>Many desktop publishing packages and web</h6>
                                                <small>Created 18 July, 2020</small>
                                            </td>
                                            <td>18 Aug, 2020</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>                                                
                                                </div>
                                                <small>Completion with: 78%</small>
                                            </td>
                                            <td><img src="assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="assets/images/xs/avatar10.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td class="project-actions">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-title">
                                                <h6>iNext - One Page Responsive Template</h6>
                                                <small>Created 14 July, 2020</small>
                                            </td>
                                            <td>22 Aug, 2020</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>                                                
                                                </div>
                                                <small>Completion with: 29%</small>
                                            </td>
                                            <td><img src="assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">                                                
                                                    <li><img src="assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-default">InActive</span></td>
                                            <td class="project-actions">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-title">
                                                <h6>Massive Event - Conference and Event</h6>
                                                <small>Created 18 July, 2020</small>
                                            </td>
                                            <td>25 Sept, 2020</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>                                                
                                                </div>
                                                <small>Completion with: 100%</small>
                                            </td>
                                            <td><img src="assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="assets/images/xs/avatar10.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-danger">Closed</span></td>
                                            <td class="project-actions">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-title">
                                                <h6>Oakleaf Admin - Bootstrap html5 with SASS</h6>
                                                <small>Created 18 July, 2020</small>
                                            </td>
                                            <td>29 Aug, 2020</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="width: 13%;"></div>                                                
                                                </div>
                                                <small>Completion with: 13%</small>
                                            </td>
                                            <td><img src="assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">                                                
                                                    <li><img src="assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td class="project-actions">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-title">
                                                <h6>InfiniO 4.1</h6>
                                                <small>Created 14 July, 2020</small>
                                            </td>
                                            <td>05 Sept, 2020</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>                                                
                                                </div>
                                                <small>Completion with: 48%</small>
                                            </td>
                                            <td><img src="assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td class="project-actions">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-title">
                                                <h6>Many desktop publishing packages and web</h6>
                                                <small>Created 18 July, 2020</small>
                                            </td>
                                            <td>15 Sept, 2020</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>                                                
                                                </div>
                                                <small>Completion with: 78%</small>
                                            </td>
                                            <td><img src="assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="assets/images/xs/avatar10.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td class="project-actions">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-title">
                                                <h6>InfiniO 4.2</h6>
                                                <small>Created 14 July, 2020</small>
                                            </td>
                                            <td>25 Sept, 2020</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>                                                
                                                </div>
                                                <small>Completion with: 48%</small>
                                            </td>
                                            <td><img src="assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td class="project-actions">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-title">
                                                <h6>Startup - OnePage Business Corporate Template</h6>
                                                <small>Created 14 July, 2020</small>
                                            </td>
                                            <td>26 Sept, 2020</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%;"></div>                                                
                                                </div>
                                                <small>Completion with: 56%</small>
                                            </td>
                                            <td><img src="assets/images/xs/avatar8.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar9.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td class="project-actions">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    @endsection