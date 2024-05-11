<div>
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">{{__('Liste des candidats')}}</h3>
                    </div><!-- .nk-block-head-content -->
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                            <div class="toggle-expand-content" data-content="more-options">
                                <ul class="nk-block-tools g-3">
                                    <li>
                                        <div class="form-control-wrap">
                                            <div class="form-icon form-icon-right">
                                                <em class="icon ni ni-search"></em>
                                            </div>
                                            <input type="text" class="form-control" id="default-04" placeholder="{{__('Recherche...')}}">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white" data-bs-toggle="dropdown">Status</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#"><span>Actived</span></a></li>
                                                    <li><a href="#"><span>Inactived</span></a></li>
                                                    <li><a href="#"><span>Blocked</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nk-block-tools-opt">
                                        <a class="btn btn-icon btn-primary d-md-none" data-bs-toggle="modal" href="#student-add"><em class="icon ni ni-plus"></em></a>
                                        <a class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal" href="#student-add"><em class="icon ni ni-plus"></em><span>Add</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card">
                    <div class="card-inner-group">
                        <div class="card-inner p-0">
                            <div class="nk-tb-list nk-tb-ulist">
                                <div class="nk-tb-item nk-tb-head">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid">
                                            <label class="custom-control-label" for="uid"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col"><span class="sub-text">{{__('Candidats')}}</span></div>
                                    <div class="nk-tb-col tb-col-mb"><span class="sub-text d-lg-flex d-none">{{__('Postes')}}</span></div>
                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">{{__('Email')}}</span></div>
                                    <div class="nk-tb-col tb-col-lg"><span class="sub-text">{{__('Phone')}}</span></div>
                                    <div class="nk-tb-col tb-col-lg"><span class="sub-text">{{__('Candidature')}}</span></div>
                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">{{__('Status')}}</span></div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    {{-- <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-"></em><span></span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend Selected</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a></li>
                                                        </ul>
                                                    </div> --}}
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-tb-item -->
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid1">
                                            <label class="custom-control-label" for="uid1"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col">
                                        <a href="html/lms/students-details.html">
                                            <div class="user-card">
                                                <div class="user-avatar bg-primary">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Abu Bin Ishtiyak <span class="dot dot-success d-md-none ms-1"></span></span>
                                                    <span>info@softnio.com</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="nk-tb-col tb-col-mb">
                                        <span class="tb-lead d-lg-flex d-none">Fornt-end Development</span>
                                        <div class="d-lg-flex d-none">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle pt-1 text-info" data-bs-toggle="dropdown"> <span>View More</span> </a>
                                                <div class="dropdown-menu dropdown-menu-start">
                                                    <ul class="link-list-opt no-bdr p-3">
                                                        <li class="tb-lead p-1">Application Management</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                        <li class="tb-lead p-1">UI/UX Design with Adobe XD</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span>+811 847-4958</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span>United State</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span class="badge badge-dot badge-dot bg-warning">Due</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-success">Active</span>
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                    <em class="icon ni ni-mail-fill"></em>
                                                </a>
                                            </li>
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                    <em class="icon ni ni-user-cross-fill"></em>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="html/lms/students-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-tb-item -->
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid2">
                                            <label class="custom-control-label" for="uid2"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col">
                                        <a href="html/lms/students-details.html">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <img src="./images/avatar/a-sm.jpg" alt="">
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Ashley Lawson <span class="dot dot-warning d-md-none ms-1"></span></span>
                                                    <span>ashley@softnio.com</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="nk-tb-col tb-col-mb">
                                        <span class="tb-lead d-lg-flex d-none">Responsive Design</span>
                                        <div class="d-lg-flex d-none">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle pt-1 text-info" data-bs-toggle="dropdown"> <span>View More</span> </a>
                                                <div class="dropdown-menu dropdown-menu-start">
                                                    <ul class="link-list-opt no-bdr p-3">
                                                        <li class="tb-lead p-1">Application Management</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                        <li class="tb-lead p-1">UI/UX Design with Adobe XD</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span>+124 394-1787</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span>United Kindom</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span class="tb-status badge-dot bg-success">Paid</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-warning">Inactive</span>
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                    <em class="icon ni ni-mail-fill"></em>
                                                </a>
                                            </li>
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                    <em class="icon ni ni-user-cross-fill"></em>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="html/lms/students-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-tb-item -->
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid3">
                                            <label class="custom-control-label" for="uid3"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col">
                                        <a href="html/lms/students-details.html">
                                            <div class="user-card">
                                                <div class="user-avatar bg-info">
                                                    <span>JL</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Joe Larson <span class="dot dot-success d-md-none ms-1"></span></span>
                                                    <span>larson@example.com</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="nk-tb-col tb-col-mb">
                                        <span class="tb-lead d-lg-flex d-none">Mobile Applicationn</span>
                                        <div class="d-lg-flex d-none">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle pt-1 text-info" data-bs-toggle="dropdown"> <span>View More</span> </a>
                                                <div class="dropdown-menu dropdown-menu-start">
                                                    <ul class="link-list-opt no-bdr p-3">
                                                        <li class="tb-lead p-1">Application Management</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                        <li class="tb-lead p-1">UI/UX Design with Adobe XD</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span>+168 603-2320</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span>India</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span class="tb-status badge-dot bg-success">Paid</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-success">Active</span>
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                    <em class="icon ni ni-mail-fill"></em>
                                                </a>
                                            </li>
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                    <em class="icon ni ni-user-cross-fill"></em>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="html/lms/students-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-tb-item -->
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid4">
                                            <label class="custom-control-label" for="uid4"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col">
                                        <a href="html/lms/students-details.html">
                                            <div class="user-card">
                                                <div class="user-avatar bg-danger">
                                                    <span>JM</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Jane Montgomery <span class="dot dot-danger d-md-none ms-1"></span></span>
                                                    <span>jane84@example.com</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="nk-tb-col tb-col-mb">
                                        <span class="tb-lead d-lg-flex d-none">UI/UX Design with Adobe XD</span>
                                        <div class="d-lg-flex d-none">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle pt-1 text-info" data-bs-toggle="dropdown"> <span>View More</span> </a>
                                                <div class="dropdown-menu dropdown-menu-start">
                                                    <ul class="link-list-opt no-bdr p-3">
                                                        <li class="tb-lead p-1">SEO Optimize</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                        <li class="tb-lead p-1">UI/UX Design with Adobe XD</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span>+439 271-5360</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span>Canada</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span class="tb-status badge-dot bg-danger">Cancelled</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-danger">Suspend</span>
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                    <em class="icon ni ni-mail-fill"></em>
                                                </a>
                                            </li>
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                    <em class="icon ni ni-user-cross-fill"></em>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="html/lms/students-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-tb-item -->
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid5">
                                            <label class="custom-control-label" for="uid5"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col">
                                        <a href="html/lms/students-details.html">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <img src="./images/avatar/b-sm.jpg" alt="">
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Frances Burns <span class="dot dot-success d-md-none ms-1"></span></span>
                                                    <span>frances@example.com</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="nk-tb-col tb-col-mb">
                                        <span class="tb-lead d-lg-flex d-none">Application Management</span>
                                        <div class="d-lg-flex d-none">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle pt-1 text-info" data-bs-toggle="dropdown"> <span>View More</span> </a>
                                                <div class="dropdown-menu dropdown-menu-start">
                                                    <ul class="link-list-opt no-bdr p-3">
                                                        <li class="tb-lead p-1">UI/UX Design with Adobe XD</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                        <li class="tb-lead p-1">Application Management</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span>+639 130-3150</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span>Australia</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span class="tb-status badge-dot bg-success">Paid</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-success">Active</span>
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                    <em class="icon ni ni-mail-fill"></em>
                                                </a>
                                            </li>
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                    <em class="icon ni ni-user-cross-fill"></em>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="html/lms/students-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-tb-item -->
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid6">
                                            <label class="custom-control-label" for="uid6"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col">
                                        <a href="html/lms/students-details.html">
                                            <div class="user-card">
                                                <div class="user-avatar bg-primary">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Abu Bin Ishtiyak <span class="dot dot-success d-md-none ms-1"></span></span>
                                                    <span>info@softnio.com</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="nk-tb-col tb-col-mb">
                                        <span class="tb-lead d-lg-flex d-none">Fornt-end Development</span>
                                        <div class="d-lg-flex d-none">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle pt-1 text-info" data-bs-toggle="dropdown"> <span>View More</span> </a>
                                                <div class="dropdown-menu dropdown-menu-start">
                                                    <ul class="link-list-opt no-bdr p-3">
                                                        <li class="tb-lead p-1">Application Management</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                        <li class="tb-lead p-1">UI/UX Design with Adobe XD</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span>+811 847-4958</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span>United State</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span class="badge badge-dot badge-dot bg-warning">Due</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-success">Active</span>
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                    <em class="icon ni ni-mail-fill"></em>
                                                </a>
                                            </li>
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                    <em class="icon ni ni-user-cross-fill"></em>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="html/lms/students-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-tb-item -->
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid7">
                                            <label class="custom-control-label" for="uid7"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col">
                                        <a href="html/lms/students-details.html">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <img src="./images/avatar/a-sm.jpg" alt="">
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Ashley Lawson <span class="dot dot-warning d-md-none ms-1"></span></span>
                                                    <span>ashley@softnio.com</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="nk-tb-col tb-col-mb">
                                        <span class="tb-lead d-lg-flex d-none">Learn Android Development with project </span>
                                        <div class="d-lg-flex d-none">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle pt-1 text-info" data-bs-toggle="dropdown"> <span>View More</span> </a>
                                                <div class="dropdown-menu dropdown-menu-start">
                                                    <ul class="link-list-opt no-bdr p-3">
                                                        <li class="tb-lead p-1">Application Management</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                        <li class="tb-lead p-1">UI/UX Design with Adobe XD</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span>+124 394-1787</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span>United Kindom</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span class="tb-status badge-dot bg-success">Paid</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-warning">Inactive</span>
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                    <em class="icon ni ni-mail-fill"></em>
                                                </a>
                                            </li>
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                    <em class="icon ni ni-user-cross-fill"></em>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="html/lms/students-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-tb-item -->
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid8">
                                            <label class="custom-control-label" for="uid8"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col">
                                        <a href="html/lms/students-details.html">
                                            <div class="user-card">
                                                <div class="user-avatar bg-info">
                                                    <span>JL</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Joe Larson <span class="dot dot-success d-md-none ms-1"></span></span>
                                                    <span>larson@example.com</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="nk-tb-col tb-col-mb">
                                        <span class="tb-lead d-lg-flex d-none">SEO Optimization</span>
                                        <div class="d-lg-flex d-none">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle pt-1 text-info" data-bs-toggle="dropdown"> <span>View More</span> </a>
                                                <div class="dropdown-menu dropdown-menu-start">
                                                    <ul class="link-list-opt no-bdr p-3">
                                                        <li class="tb-lead p-1">Application Management</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                        <li class="tb-lead p-1">UI/UX Design with Adobe XD</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span>+168 603-2320</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span>India</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span class="tb-status badge-dot bg-success">Paid</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-success">Active</span>
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                    <em class="icon ni ni-mail-fill"></em>
                                                </a>
                                            </li>
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                    <em class="icon ni ni-user-cross-fill"></em>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="html/lms/students-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-tb-item -->
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid9">
                                            <label class="custom-control-label" for="uid9"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col">
                                        <a href="html/lms/students-details.html">
                                            <div class="user-card">
                                                <div class="user-avatar bg-danger">
                                                    <span>JM</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Jane Montgomery <span class="dot dot-danger d-md-none ms-1"></span></span>
                                                    <span>jane84@example.com</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="nk-tb-col tb-col-mb">
                                        <span class="tb-lead d-lg-flex d-none">Responsive Design </span>
                                        <div class="d-lg-flex d-none">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle pt-1 text-info" data-bs-toggle="dropdown"> <span>View More</span> </a>
                                                <div class="dropdown-menu dropdown-menu-start">
                                                    <ul class="link-list-opt no-bdr p-3">
                                                        <li class="tb-lead p-1">Application Management</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                        <li class="tb-lead p-1">UI/UX Design with Adobe XD</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span>+439 271-5360</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span>Canada</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span class="tb-status badge-dot bg-danger">Cancelled</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-danger">Suspend</span>
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                    <em class="icon ni ni-mail-fill"></em>
                                                </a>
                                            </li>
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                    <em class="icon ni ni-user-cross-fill"></em>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="html/lms/students-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-tb-item -->
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid10">
                                            <label class="custom-control-label" for="uid10"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col">
                                        <a href="html/lms/students-details.html">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <img src="./images/avatar/b-sm.jpg" alt="">
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Frances Burns <span class="dot dot-success d-md-none ms-1"></span></span>
                                                    <span>frances@example.com</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="nk-tb-col tb-col-mb">
                                        <span class="tb-lead d-lg-flex d-none">Android Development</span>
                                        <div class="d-lg-flex d-none">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle pt-1 text-info" data-bs-toggle="dropdown"> <span>View More</span> </a>
                                                <div class="dropdown-menu dropdown-menu-start">
                                                    <ul class="link-list-opt no-bdr p-3">
                                                        <li class="tb-lead p-1">Application Management</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                        <li class="tb-lead p-1">UI/UX Design with Adobe XD</li>
                                                        <li class="tb-lead p-1">Learn Android Development with project</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span>+639 130-3150</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span>Australia</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span class="tb-status badge-dot bg-success">Paid</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-success">Active</span>
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                    <em class="icon ni ni-mail-fill"></em>
                                                </a>
                                            </li>
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                    <em class="icon ni ni-user-cross-fill"></em>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="html/lms/students-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-tb-item -->
                            </div><!-- .nk-tb-list -->
                        </div>
                        <div class="card-inner">
                            <div class="nk-block-between-md g-3">
                                <div class="g">
                                    <ul class="pagination justify-content-center justify-content-md-start">
                                        <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
                                    </ul><!-- .pagination -->
                                </div>
                                <div class="g">
                                    <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                        <div>Page</div>
                                        <div>
                                            <select class="form-select js-select2" data-search="on" data-dropdown="xs center">
                                                <option value="page-1">1</option>
                                                <option value="page-2">2</option>
                                                <option value="page-4">4</option>
                                                <option value="page-5">5</option>
                                                <option value="page-6">6</option>
                                                <option value="page-7">7</option>
                                                <option value="page-8">8</option>
                                                <option value="page-9">9</option>
                                                <option value="page-10">10</option>
                                                <option value="page-11">11</option>
                                                <option value="page-12">12</option>
                                                <option value="page-13">13</option>
                                                <option value="page-14">14</option>
                                                <option value="page-15">15</option>
                                                <option value="page-16">16</option>
                                                <option value="page-17">17</option>
                                                <option value="page-18">18</option>
                                                <option value="page-19">19</option>
                                                <option value="page-20">20</option>
                                            </select>
                                        </div>
                                        <div>OF 102</div>
                                    </div>
                                </div><!-- .pagination-goto -->
                            </div><!-- .nk-block-between -->
                        </div>
                    </div>
                </div>
            </div><!-- .nk-block -->
        </div>
    </div>
</div>
