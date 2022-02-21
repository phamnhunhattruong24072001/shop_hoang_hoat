<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="">
            <img src="assets/images/logo-icon.png" class="logo-icon-2" alt="" />
        </div>
        <div>
            <h4 class="logo-text">Syndash</h4>
        </div>
        <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
        </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                {{-- <li> <a href=""><i class="bx bx-right-arrow-alt"></i>Analytics</a>
                </li> --}}
                <li> <a href="{{route('admin.dashboard')}}"><i class="bx bx-right-arrow-alt"></i>Home</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Quản lý</li>
        <li>
            <a href="emailbox.html">
                <div class="parent-icon icon-color-2"><i class="bx bx-envelope"></i>
                </div>
                <div class="menu-title">Email</div>
            </a>
        </li>
        <li>
            <a href="chat-box.html">
                <div class="parent-icon icon-color-3"> <i class="bx bx-conversation"></i>
                </div>
                <div class="menu-title">Chat Box</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.file')}}">
                <div class="parent-icon icon-color-4"><i class="bx bx-archive"></i>
                </div>
                <div class="menu-title">File Manager</div>
            </a>
        </li>
        <li>
            <a href="contact-list.html">
                <div class="parent-icon icon-color-5"><i class="bx bx-group"></i>
                </div>
                <div class="menu-title">Contatcs</div>
            </a>
        </li>
        
        <li class="menu-label">Sản phẩm</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-10"><i class="bx bx-spa"></i>
                </div>
                <div class="menu-title">Danh mục</div>
            </a>
            <ul>
                <li> <a href="{{route('category.create')}}"><i class="bx bx-right-arrow-alt"></i>Thêm mới</a>
                </li>
                <li> <a href="{{route('admin.category')}}"><i class="bx bx-right-arrow-alt"></i>Danh sách</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-11"><i class="bx bx-repeat"></i>
                </div>
                <div class="menu-title">Thương hiệu</div>
            </a>
            <ul>
                <li> <a href="content-grid-system.html"><i class="bx bx-right-arrow-alt"></i>Thêm mới</a>
                </li>
                <li> <a href="content-typography.html"><i class="bx bx-right-arrow-alt"></i>Danh sách</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-12"> <i class="bx bx-donate-blood"></i>
                </div>
                <div class="menu-title">Icons</div>
            </a>
            <ul>
                <li> <a href="icons-line-icons.html"><i class="bx bx-right-arrow-alt"></i>Line Icons</a>
                </li>
                <li> <a href="icons-boxicons.html"><i class="bx bx-right-arrow-alt"></i>Boxicons</a>
                </li>
                <li> <a href="icons-feather-icons.html"><i class="bx bx-right-arrow-alt"></i>Feather Icons</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Forms & Tables</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-1"> <i class="bx bx-comment-edit"></i>
                </div>
                <div class="menu-title">Forms</div>
            </a>
            <ul>
                <li> <a href="form-elements.html"><i class="bx bx-right-arrow-alt"></i>Form Elements</a>
                </li>
                <li> <a href="form-input-group.html"><i class="bx bx-right-arrow-alt"></i>Input Groups</a>
                </li>
                <li> <a href="form-layouts.html"><i class="bx bx-right-arrow-alt"></i>Forms Layouts</a>
                </li>
                <li> <a href="form-validations.html"><i class="bx bx-right-arrow-alt"></i>Form Validation</a>
                </li>
                <li> <a href="form-wizard.html"><i class="bx bx-right-arrow-alt"></i>Form Wizard</a>
                </li>
                <li> <a href="form-text-editor.html"><i class="bx bx-right-arrow-alt"></i>Text Editor</a>
                </li>
                <li> <a href="form-file-upload.html"><i class="bx bx-right-arrow-alt"></i>File Upload</a>
                </li>
                <li> <a href="form-date-time-pickes.html"><i class="bx bx-right-arrow-alt"></i>Date Pickers</a>
                </li>
                <li> <a href="form-select2.html"><i class="bx bx-right-arrow-alt"></i>Select2</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-2"><i class="bx bx-grid-alt"></i>
                </div>
                <div class="menu-title">Tables</div>
            </a>
            <ul>
                <li> <a href="table-basic-table.html"><i class="bx bx-right-arrow-alt"></i>Basic Table</a>
                </li>
                <li> <a href="table-datatable.html"><i class="bx bx-right-arrow-alt"></i>Data Table</a>
                </li>
                <li> <a href="table-editable.html"><i class="bx bx-right-arrow-alt"></i>Editable Table</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Pages</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-3"><i class="bx bx-lock"></i>
                </div>
                <div class="menu-title">Authentication</div>
            </a>
            <ul>
                <li> <a href="authentication-login.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Login</a>
                </li>
                <li> <a href="authentication-register.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Register</a>
                </li>
                <li> <a href="authentication-forgot-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Forgot Password</a>
                </li>
                <li> <a href="authentication-reset-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Reset Password</a>
                </li>
                <li> <a href="authentication-lock-screen.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Lock Screen</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="user-profile.html">
                <div class="parent-icon icon-color-4"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">User Profile</div>
            </a>
        </li>
        <li>
            <a href="timeline.html">
                <div class="parent-icon icon-color-5"> <i class="bx bx-video-recording"></i>
                </div>
                <div class="menu-title">Timeline</div>
            </a>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-6"><i class="bx bx-error"></i>
                </div>
                <div class="menu-title">Errors</div>
            </a>
            <ul>
                <li> <a href="errors-404-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>404 Error</a>
                </li>
                <li> <a href="errors-500-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>500 Error</a>
                </li>
                <li> <a href="errors-coming-soon.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Coming Soon</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="faq.html">
                <div class="parent-icon icon-color-7"><i class="bx bx-help-circle"></i>
                </div>
                <div class="menu-title">FAQ</div>
            </a>
        </li>
        <li>
            <a href="pricing-table.html">
                <div class="parent-icon icon-color-8"><i class="bx bx-diamond"></i>
                </div>
                <div class="menu-title">Pricing</div>
            </a>
        </li>
        <li class="menu-label">Charts & Maps</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-9"><i class="bx bx-line-chart"></i>
                </div>
                <div class="menu-title">Charts</div>
            </a>
            <ul>
                <li> <a href="charts-apex-chart.html"><i class="bx bx-right-arrow-alt"></i>Apex</a>
                </li>
                <li> <a href="charts-chartjs.html"><i class="bx bx-right-arrow-alt"></i>Chartjs</a>
                </li>
                <li> <a href="charts-highcharts.html"><i class="bx bx-right-arrow-alt"></i>Highcharts</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-10"><i class="bx bx-map-alt"></i>
                </div>
                <div class="menu-title">Maps</div>
            </a>
            <ul>
                <li> <a href="map-google-maps.html"><i class="bx bx-right-arrow-alt"></i>Google Maps</a>
                </li>
                <li> <a href="map-vector-maps.html"><i class="bx bx-right-arrow-alt"></i>Vector Maps</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Others</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-11"><i class="bx bx-menu"></i>
                </div>
                <div class="menu-title">Menu Levels</div>
            </a>
            <ul>
                <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level One</a>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Two</a>
                            <ul>
                                <li> <a href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Three</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="https://codervent.com/syndash/documentation/index.html" target="_blank">
                <div class="parent-icon icon-color-12"><i class="bx bx-folder"></i>
                </div>
                <div class="menu-title">Documentation</div>
            </a>
        </li>
        <li>
            <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>