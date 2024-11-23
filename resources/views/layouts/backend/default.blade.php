<!DOCTYPE html>
<html lang="en">
  @include('layouts.backend.__includes.head')

  <body  id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
      <a href="index.html">
        <img alt="Logo" src="/assets/backend/media/logos/logo-light.png"/>
      </a>

      <div class="d-flex align-items-center">
        <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
          <span></span>
        </button>

        <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
          <span></span>
        </button>

        <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
          <span class="svg-icon svg-icon-xl">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24"/>
                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
              </g>
            </svg>
          </span>
        </button>
      </div>
    </div>

      <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
          <!--begin::Aside-->
          <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto"  id="kt_aside">
            <!--begin::Brand-->
            <div class="brand flex-column-auto " id="kt_brand">
              <!--begin::Logo-->
              <a href="index.html" class="brand-logo">
                <img alt="Logo" src="/assets/backend/media/logos/logo-light.png"/>
              </a>
              <!--end::Logo-->

              <!--begin::Toggle-->
              <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                <span class="svg-icon svg-icon svg-icon-xl"><!--begin::Svg Icon | path:/assets/backend/media/svg/icons/Navigation/Angle-double-left.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24"/>
                    <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                    <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                  </g>
                </svg><!--end::Svg Icon--></span>			</button>
                <!--end::Toolbar-->
              </div>

              <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500" 			>
                  <!--begin::Menu Nav-->
                  <ul class="menu-nav ">
                    <li class="menu-item " aria-haspopup="true" ><a  href="index.html" class="menu-link "><i class="menu-icon flaticon-home"></i><span class="menu-text">Dashboard</span></a></li><li class="menu-section ">

                      <h4 class="menu-text">Custom</h4>
                      <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                    </li>
                    <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover"><a  href="javascript:;" class="menu-link menu-toggle"><i class="menu-icon flaticon-light"></i><span class="menu-text">Miscellaneous</span><i class="menu-arrow"></i></a><div class="menu-submenu "><i class="menu-arrow"></i><ul class="menu-subnav"><li class="menu-item  menu-item-parent" aria-haspopup="true" ><span class="menu-link"><span class="menu-text">Miscellaneous</span></span></li><li class="menu-item " aria-haspopup="true" ><a  href="features/miscellaneous/kanban-board.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Kanban Board</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="features/miscellaneous/sticky-panels.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Sticky Panels</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="features/miscellaneous/blockui.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Block UI</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="features/miscellaneous/perfect-scrollbar.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Perfect Scrollbar</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="features/miscellaneous/treeview.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Tree View</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="features/miscellaneous/bootstrap-notify.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Bootstrap Notify</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="features/miscellaneous/toastr.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Toastr</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="features/miscellaneous/sweetalert2.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">SweetAlert2</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="features/miscellaneous/dual-listbox.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Dual Listbox</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="features/miscellaneous/session-timeout.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Session Timeout</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="features/miscellaneous/idle-timer.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Idle Timer</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="features/miscellaneous/cropper.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Cropper</span></a></li></ul></div></li>			</ul>
                    <!--end::Menu Nav-->
                  </div>
                  <!--end::Menu Container-->
                </div>
                <!--end::Aside Menu-->
              </div>
              <!--end::Aside-->

              <!--begin::Wrapper-->
              <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header  header-fixed " >
                  <!--begin::Container-->
                  <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
                    <!--begin::Header Menu Wrapper-->
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                      <!--begin::Header Menu-->
                      <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default " >
                        <!--begin::Header Nav-->
                        <ul class="menu-nav ">
                          <li class="menu-item  menu-item-submenu menu-item-rel menu-item-active"  data-menu-toggle="click" aria-haspopup="true"><a  href="javascript:;" class="menu-link menu-toggle"><span class="menu-text">Pages</span><i class="menu-arrow"></i></a><div class="menu-submenu menu-submenu-classic menu-submenu-left" ><ul class="menu-subnav"><li class="menu-item "  aria-haspopup="true"><a  href="index.html" class="menu-link "><span class="svg-icon menu-icon"><!--begin::Svg Icon | path:/assets/backend/media/svg/icons/Clothes/Briefcase.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24"/>
                              <path d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z" fill="#000000"/>
                              <path d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                            </g>
                          </svg><!--end::Svg Icon--></span><span class="menu-text">My Account</span></a></li><li class="menu-item "  aria-haspopup="true"><a  href="javascript:;" class="menu-link "><span class="svg-icon menu-icon"><!--begin::Svg Icon | path:/assets/backend/media/svg/icons/Code/Compiling.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24"/>
                              <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3"/>
                              <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000"/>
                            </g>
                          </svg><!--end::Svg Icon--></span><span class="menu-text">Task Manager</span><span class="menu-label"><span class="label label-success label-rounded">2</span></span></a></li><li class="menu-item  menu-item-submenu"  data-menu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="menu-link menu-toggle"><span class="svg-icon menu-icon"><!--begin::Svg Icon | path:/assets/backend/media/svg/icons/Code/CMD.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24"/>
                              <path d="M9,15 L7.5,15 C6.67157288,15 6,15.6715729 6,16.5 C6,17.3284271 6.67157288,18 7.5,18 C8.32842712,18 9,17.3284271 9,16.5 L9,15 Z M9,15 L9,9 L15,9 L15,15 L9,15 Z M15,16.5 C15,17.3284271 15.6715729,18 16.5,18 C17.3284271,18 18,17.3284271 18,16.5 C18,15.6715729 17.3284271,15 16.5,15 L15,15 L15,16.5 Z M16.5,9 C17.3284271,9 18,8.32842712 18,7.5 C18,6.67157288 17.3284271,6 16.5,6 C15.6715729,6 15,6.67157288 15,7.5 L15,9 L16.5,9 Z M9,7.5 C9,6.67157288 8.32842712,6 7.5,6 C6.67157288,6 6,6.67157288 6,7.5 C6,8.32842712 6.67157288,9 7.5,9 L9,9 L9,7.5 Z M11,13 L13,13 L13,11 L11,11 L11,13 Z M13,11 L13,7.5 C13,5.56700338 14.5670034,4 16.5,4 C18.4329966,4 20,5.56700338 20,7.5 C20,9.43299662 18.4329966,11 16.5,11 L13,11 Z M16.5,13 C18.4329966,13 20,14.5670034 20,16.5 C20,18.4329966 18.4329966,20 16.5,20 C14.5670034,20 13,18.4329966 13,16.5 L13,13 L16.5,13 Z M11,16.5 C11,18.4329966 9.43299662,20 7.5,20 C5.56700338,20 4,18.4329966 4,16.5 C4,14.5670034 5.56700338,13 7.5,13 L11,13 L11,16.5 Z M7.5,11 C5.56700338,11 4,9.43299662 4,7.5 C4,5.56700338 5.56700338,4 7.5,4 C9.43299662,4 11,5.56700338 11,7.5 L11,11 L7.5,11 Z" fill="#000000" fill-rule="nonzero"/>
                            </g>
                          </svg><!--end::Svg Icon--></span><span class="menu-text">Team Manager</span><i class="menu-arrow"></i></a><div class="menu-submenu menu-submenu-classic menu-submenu-right" ><ul class="menu-subnav"><li class="menu-item "  aria-haspopup="true"><a  href="javascript:;" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add Team Member</span></a></li><li class="menu-item "  aria-haspopup="true"><a  href="javascript:;" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Edit Team Member</span></a></li><li class="menu-item "  aria-haspopup="true"><a  href="javascript:;" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Delete Team Member</span></a></li><li class="menu-item "  aria-haspopup="true"><a  href="javascript:;" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Team Member Reports</span></a></li><li class="menu-item "  aria-haspopup="true"><a  href="javascript:;" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Assign Tasks</span></a></li><li class="menu-item "  aria-haspopup="true"><a  href="javascript:;" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Promote Team Member</span></a></li></ul></div></li><li class="menu-item  menu-item-submenu"  data-menu-toggle="hover" aria-haspopup="true"><a  href="#" class="menu-link menu-toggle"><span class="svg-icon menu-icon"><!--begin::Svg Icon | path:/assets/backend/media/svg/icons/Communication/Mail-box.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24"/>
                              <path d="M22,15 L22,19 C22,20.1045695 21.1045695,21 20,21 L4,21 C2.8954305,21 2,20.1045695 2,19 L2,15 L6.27924078,15 L6.82339262,16.6324555 C7.09562072,17.4491398 7.8598984,18 8.72075922,18 L15.381966,18 C16.1395101,18 16.8320364,17.5719952 17.1708204,16.8944272 L18.118034,15 L22,15 Z" fill="#000000"/>
                              <path d="M2.5625,13 L5.92654389,7.01947752 C6.2807805,6.38972356 6.94714834,6 7.66969497,6 L16.330305,6 C17.0528517,6 17.7192195,6.38972356 18.0734561,7.01947752 L21.4375,13 L18.118034,13 C17.3604899,13 16.6679636,13.4280048 16.3291796,14.1055728 L15.381966,16 L8.72075922,16 L8.17660738,14.3675445 C7.90437928,13.5508602 7.1401016,13 6.27924078,13 L2.5625,13 Z" fill="#000000" opacity="0.3"/>
                            </g>
                          </svg><!--end::Svg Icon--></span><span class="menu-text">Projects Manager</span><i class="menu-arrow"></i></a><div class="menu-submenu menu-submenu-classic menu-submenu-right" ><ul class="menu-subnav"><li class="menu-item "  aria-haspopup="true"><a  href="javascript:;" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Latest Projects</span></a></li><li class="menu-item "  aria-haspopup="true"><a  href="javascript:;" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Ongoing Projects</span></a></li><li class="menu-item "  aria-haspopup="true"><a  href="javascript:;" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Urgent Projects</span></a></li><li class="menu-item "  aria-haspopup="true"><a  href="javascript:;" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Completed Projects</span></a></li><li class="menu-item "  aria-haspopup="true"><a  href="javascript:;" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Dropped Projects</span></a></li></ul></div></li><li class="menu-item "  aria-haspopup="true"><a  href="javascript:;" class="menu-link "><span class="svg-icon menu-icon"><!--begin::Svg Icon | path:/assets/backend/media/svg/icons/Communication/Spam.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24"/>
                              <path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z M10.5857864,14 L9.17157288,15.4142136 C8.78104858,15.8047379 8.78104858,16.4379028 9.17157288,16.8284271 C9.56209717,17.2189514 10.1952621,17.2189514 10.5857864,16.8284271 L12,15.4142136 L13.4142136,16.8284271 C13.8047379,17.2189514 14.4379028,17.2189514 14.8284271,16.8284271 C15.2189514,16.4379028 15.2189514,15.8047379 14.8284271,15.4142136 L13.4142136,14 L14.8284271,12.5857864 C15.2189514,12.1952621 15.2189514,11.5620972 14.8284271,11.1715729 C14.4379028,10.7810486 13.8047379,10.7810486 13.4142136,11.1715729 L12,12.5857864 L10.5857864,11.1715729 C10.1952621,10.7810486 9.56209717,10.7810486 9.17157288,11.1715729 C8.78104858,11.5620972 8.78104858,12.1952621 9.17157288,12.5857864 L10.5857864,14 Z" fill="#000000"/>
                            </g>
                          </svg><!--end::Svg Icon--></span><span class="menu-text">Create New Project</span></a></li></ul></div></li>

                          				</ul>
                          <!--end::Header Nav-->
                        </div>
                        <!--end::Header Menu-->
                      </div>
                      <!--end::Header Menu Wrapper-->

                      <!--begin::Topbar-->
                      @include('layouts.backend.__includes.topbar')
                      <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                  </div>
                  <!--end::Header-->

                  <!--begin::Content-->
                  <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
                      <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center flex-wrap mr-1">

                          <!--begin::Page Heading-->
                          <div class="d-flex align-items-baseline flex-wrap mr-5">
                            <!--begin::Page Title-->
                            <h5 class="text-dark font-weight-bold my-1 mr-5">
                              Empty Page	                	            </h5>
                              <!--end::Page Title-->

                              <!--begin::Breadcrumb-->
                              <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item">
                                  <a href="" class="text-muted">
                                    General	                        	</a>
                                  </li>
                                  <li class="breadcrumb-item">
                                    <a href="" class="text-muted">
                                      Empty Page	                        	</a>
                                    </li>
                                  </ul>
                                  <!--end::Breadcrumb-->
                                </div>
                                <!--end::Page Heading-->
                              </div>
                              <!--end::Info-->

                              <!--begin::Toolbar-->
                              <div class="d-flex align-items-center">
                                <!--begin::Actions-->
                                <a href="#" class="btn btn-light-primary font-weight-bolder btn-sm">
                                  Actions
                                </a>
                                <!--end::Actions-->

                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                  <a href="#" class="btn btn-icon"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="svg-icon svg-icon-success svg-icon-2x"><!--begin::Svg Icon | path:/assets/backend/media/svg/icons/Files/File-plus.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"/>
                                      </g>
                                    </svg><!--end::Svg Icon--></span>                </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
                                      <!--begin::Navigation-->
                                      <ul class="navi navi-hover">
                                        <li class="navi-header font-weight-bold py-4">
                                          <span class="font-size-lg">Choose Label:</span>
                                          <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                        </li>
                                        <li class="navi-separator mb-3 opacity-70"></li>
                                        <li class="navi-item">
                                          <a href="#" class="navi-link">
                                            <span class="navi-text">
                                              <span class="label label-xl label-inline label-light-success">Customer</span>
                                            </span>
                                          </a>
                                        </li>
                                        <li class="navi-item">
                                          <a href="#" class="navi-link">
                                            <span class="navi-text">
                                              <span class="label label-xl label-inline label-light-danger">Partner</span>
                                            </span>
                                          </a>
                                        </li>
                                        <li class="navi-item">
                                          <a href="#" class="navi-link">
                                            <span class="navi-text">
                                              <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                            </span>
                                          </a>
                                        </li>
                                        <li class="navi-item">
                                          <a href="#" class="navi-link">
                                            <span class="navi-text">
                                              <span class="label label-xl label-inline label-light-primary">Member</span>
                                            </span>
                                          </a>
                                        </li>
                                        <li class="navi-item">
                                          <a href="#" class="navi-link">
                                            <span class="navi-text">
                                              <span class="label label-xl label-inline label-light-dark">Staff</span>
                                            </span>
                                          </a>
                                        </li>
                                        <li class="navi-separator mt-3 opacity-70"></li>
                                        <li class="navi-footer py-4">
                                          <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                            <i class="ki ki-plus icon-sm"></i>
                                            Add new
                                          </a>
                                        </li>
                                      </ul>
                                      <!--end::Navigation-->
                                    </div>
                                  </div>
                                  <!--end::Dropdown-->
                                </div>
                                <!--end::Toolbar-->
                              </div>
                            </div>
                            <!--end::Subheader-->

                            <!--begin::Entry-->
                            <div class="d-flex flex-column-fluid">
                              <!--begin::Container-->
                              <div class=" container ">
                                <p>Page content goes here...</p>
                              </div>
                              <!--end::Container-->
                            </div>
                            <!--end::Entry-->
                          </div>
                          <!--end::Content-->

                          <!--begin::Footer-->
                          @include('layouts.backend.__includes.footer')
                          <!--end::Footer-->
                        </div>
                        <!--end::Wrapper-->
                      </div>
                      <!--end::Page-->
                    </div>
                    <!--end::Main-->





                    <!-- begin::User Panel-->
                    @include('layouts.backend.__includes.topbar.user-panel')
                    @include('layouts.backend.__includes.topbar.quick-cart')
                    @include('layouts.backend.__includes.topbar.quick-panel')
                    @include('layouts.backend.__includes.topbar.chat-panel')
                                              <!--begin::Chat Panel-->

                                                <!--end::Chat Panel-->

                                                <!--begin::Scrolltop-->
                                                <div id="kt_scrolltop" class="scrolltop">
                                                  <span class="svg-icon"><!--begin::Svg Icon | path:/assets/backend/media/svg/icons/Navigation/Up-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                      <polygon points="0 0 24 0 24 24 0 24"/>
                                                      <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"/>
                                                      <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"/>
                                                    </g>
                                                  </svg><!--end::Svg Icon--></span></div>
                                                  <!--end::Scrolltop-->

                                                  <!--begin::Sticky Toolbar-->
                                                  <ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip"  title="Check out more demos" data-placement="right">
                                                      <a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success" href="#">
                                                        <i class="flaticon2-drop"></i>
                                                      </a>
                                                    </li>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-2" data-toggle="tooltip" title="Layout Builder" data-placement="left">
                                                      <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="https://preview.keenthemes.com/metronic/preview/demo1/builder.html" target="_blank">
                                                        <i class="flaticon2-gear"></i>
                                                      </a>
                                                    </li>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-2" data-toggle="tooltip" title="Documentation" data-placement="left">
                                                      <a class="btn btn-sm btn-icon btn-bg-light btn-icon-warning btn-hover-warning" href="https://keenthemes.com/metronic/?page=docs" target="_blank">
                                                        <i class="flaticon2-telegram-logo"></i>
                                                      </a>
                                                    </li>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <li class="nav-item" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="Chat Example" data-placement="left">
                                                      <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#" data-toggle="modal" data-target="#kt_chat_modal">
                                                        <i class="flaticon2-chat-1"></i>
                                                      </a>
                                                    </li>
                                                    <!--end::Item-->
                                                  </ul>
                                                  <!--end::Sticky Toolbar-->
                                                  <!--begin::Demo Panel-->
                                                  <div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
                                                    <!--begin::Header-->
                                                    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
                                                      <h4 class="font-weight-bold m-0">
                                                        Select A Demo
                                                      </h4>
                                                      <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
                                                        <i class="ki ki-close icon-xs text-muted"></i>
                                                      </a>
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Content-->
                                                    <div class="offcanvas-content">
                                                      <!--begin::Wrapper-->
                                                      <div class="offcanvas-wrapper mb-5 scroll-pull">
                                                      </div>
                                                      <!--end::Wrapper-->

                                                      <!--begin::Purchase-->
                                                      <div class="offcanvas-footer">
                                                        <a href="https://1.envato.market/EA4JP" target="_blank" class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">
                                                          Buy Metronic Now!
                                                        </a>
                                                      </div>
                                                      <!--end::Purchase-->
                                                    </div>
                                                    <!--end::Content-->
                                                  </div>
                                                  <!--end::Demo Panel-->

                                                  <!-- <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script> -->
                                                  <!--begin::Global Config(global config for global JS scripts)-->
                                                  <script>
                                                    var KTAppSettings = {

                                                    };
                                                  </script>
                                                  <!--end::Global Config-->

                                                  <!--begin::Global Theme Bundle(used by all pages)-->
                                                  <script src="/assets/backend/plugins/global/plugins.bundle.js?v=7.0.6"></script>
                                                  <script src="/assets/backend/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
                                                  <script src="/assets/backend/js/scripts.bundle.js?v=7.0.6"></script>
                                                  <!--end::Global Theme Bundle-->

                                                  <!--begin::Page Vendors(used by this page)-->
                                                  <script src="/assets/backend/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6"></script>
                                                  <!--end::Page Vendors-->

                                                  <!--begin::Page Scripts(used by this page)-->
                                                  <script src="/assets/backend/js/pages/widgets.js?v=7.0.6"></script>
                                                  <!--end::Page Scripts-->
                                                </body>
                                                <!--end::Body-->
                                              </html>
