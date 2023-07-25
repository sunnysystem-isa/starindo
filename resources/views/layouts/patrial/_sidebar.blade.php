
@php
    $sideColor = Illuminate\Support\Facades\Cookie::get('color');
    $activeColor = Illuminate\Support\Facades\Cookie::get('active');
    $activePage = 'style="background-color:' . $activeColor . '"';
@endphp

<style>
    .aside-dark .menu .menu-item .menu-link:hover:not(.disabled):not(.active){
        background-color: {{ $activeColor }} ;
    }
</style>

<!--begin::Aside-->
<div style="background-color: {{$sideColor}}; background: linear-gradient(90deg, {{$sideColor}} 60%, #dfdfdf 200%);" id="kt_aside" class="aside aside-dark"   data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div style="background-color: {{$sideColor}}; background: linear-gradient(90deg, {{$sideColor}} 60%, #dfdfdf 200%);" class="aside-logo flex-column-auto pt-6" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="/dashboard">
            <img alt="Logo" src="/assets/media/logos/logo.png" class="h-45px logo" />
        </a>
        <!--end::Logo-->
        <!--begin::Aside toggler-->
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="black" />
                    <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Aside toggler-->
    </div>
    <!--end::Brand-->
    
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Asi  de Menu-->
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item">
                    <div class="menu-content pb-2">
                        {{-- <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span> --}}
                    </div>
                </div>
                <!--begin:Menu item-->
                {{-- @dump($activeColor) --}}
                <div class="menu-item">
                    <a class="menu-link" {!! str_contains(Request::Path(), 'dashboard') ? $activePage : '' !!}  href="/dashboard">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="white" />
                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="white" />
                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="white" />
                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="white" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span style="font-size: 16px" class="menu-title text-white">Dashboard</span>
                    </a>
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <!-- <div class="menu-item">
                    <a class="menu-link" {!! str_contains(Request::Path(), 'forecast') ? $activePage : '' !!}  href="/forecast">
                        <span class="me-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="white"/>
                                <path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="white"/>
                                </svg>
                                
                        </span>
                        <span style="font-size: 16px" class="menu-title text-white">Forecast</span>
                    </a>
                </div> -->
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <a class="menu-link" {!! str_contains(Request::Path(), 'company') ? $activePage : '' !!}  href="/company">
                        <span class="me-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M18 10V20C18 20.6 18.4 21 19 21C19.6 21 20 20.6 20 20V10H18Z" fill="white"/>
                                <path opacity="0.3" d="M11 10V17H6V10H4V20C4 20.6 4.4 21 5 21H12C12.6 21 13 20.6 13 20V10H11Z" fill="white"/>
                                <path opacity="0.3" d="M10 10C10 11.1 9.1 12 8 12C6.9 12 6 11.1 6 10H10Z" fill="white"/>
                                <path opacity="0.3" d="M18 10C18 11.1 17.1 12 16 12C14.9 12 14 11.1 14 10H18Z" fill="white"/>
                                <path opacity="0.3" d="M14 4H10V10H14V4Z" fill="white"/>
                                <path opacity="0.3" d="M17 4H20L22 10H18L17 4Z" fill="white"/>
                                <path opacity="0.3" d="M7 4H4L2 10H6L7 4Z" fill="white"/>
                                <path d="M6 10C6 11.1 5.1 12 4 12C2.9 12 2 11.1 2 10H6ZM10 10C10 11.1 10.9 12 12 12C13.1 12 14 11.1 14 10H10ZM18 10C18 11.1 18.9 12 20 12C21.1 12 22 11.1 22 10H18ZM19 2H5C4.4 2 4 2.4 4 3V4H20V3C20 2.4 19.6 2 19 2ZM12 17C12 16.4 11.6 16 11 16H6C5.4 16 5 16.4 5 17C5 17.6 5.4 18 6 18H11C11.6 18 12 17.6 12 17Z" fill="white"/>
                            </svg>  
                        </span>
                        <span style="font-size: 16px" class="menu-title text-white">Company</span>
                    </a>
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <a class="menu-link" {!! str_contains(Request::Path(), 'contact') ? $activePage : '' !!}  href="/contact">
                        <span class="me-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="white"/>
                                <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="white"/>
                                <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="white"/>
                                <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="white"/>
                            </svg>
                        </span>
                        <span style="font-size: 16px" class="menu-title text-white">Contact</span>
                    </a>
                </div>
                <!--end:Menu item-->
                 <!--begin:Menu item-->
                 <div class="menu-item">
                    <a class="menu-link" {!! str_contains(Request::Path(), 'job-order') ? $activePage : '' !!}  href="/job-order">
                        <span class="me-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="white"/>
                                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="white"/>
                                </svg>                                
                        </span>
                        <span style="font-size: 16px" class="menu-title text-white">Job Order</span>
                    </a>
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <a class="menu-link" {!! str_contains(Request::Path(), 'production') ? $activePage : '' !!}  href="/production">
                        <span class="me-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="white"/>
                                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="white"/>
                                </svg>                                
                        </span>
                        <span style="font-size: 16px" class="menu-title text-white">Production</span>
                    </a>
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <a class="menu-link" {!! str_contains(Request::Path(), 'promised-delivery') ? $activePage : '' !!}  href="/head-promised-delivery">
                        <span class="me-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M3 3V17H7V21H15V9H20V3H3Z" fill="white"/>
                                <path d="M20 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V21C21 21.6 20.6 22 20 22ZM19 4H4V8H19V4ZM6 18H4V20H6V18ZM6 14H4V16H6V14ZM6 10H4V12H6V10ZM10 18H8V20H10V18ZM10 14H8V16H10V14ZM10 10H8V12H10V10ZM14 18H12V20H14V18ZM14 14H12V16H14V14ZM14 10H12V12H14V10ZM19 14H17V20H19V14ZM19 10H17V12H19V10Z" fill="white"/>
                            </svg>
                        </span>
                        <span style="font-size: 16px" class="menu-title text-white">Delivery to Promise </span>
                    </a>
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <a class="menu-link" data-bs-toggle="collapse" href="#bom" role="button" aria-expanded="false" aria-controls="collapse-side">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M20.0381 4V10C20.0381 10.6 19.6381 11 19.0381 11H17.0381C16.4381 11 16.0381 10.6 16.0381 10V4C16.0381 2.9 16.9381 2 18.0381 2C19.1381 2 20.0381 2.9 20.0381 4ZM9.73808 18.9C10.7381 18.5 11.2381 17.3 10.8381 16.3L5.83808 3.29999C5.43808 2.29999 4.23808 1.80001 3.23808 2.20001C2.23808 2.60001 1.73809 3.79999 2.13809 4.79999L7.13809 17.8C7.43809 18.6 8.23808 19.1 9.03808 19.1C9.23808 19 9.53808 19 9.73808 18.9ZM19.0381 18H17.0381V20H19.0381V18Z" fill="white"/>
                                    <path d="M18.0381 6H4.03809C2.93809 6 2.03809 5.1 2.03809 4C2.03809 2.9 2.93809 2 4.03809 2H18.0381C19.1381 2 20.0381 2.9 20.0381 4C20.0381 5.1 19.1381 6 18.0381 6ZM4.03809 3C3.43809 3 3.03809 3.4 3.03809 4C3.03809 4.6 3.43809 5 4.03809 5C4.63809 5 5.03809 4.6 5.03809 4C5.03809 3.4 4.63809 3 4.03809 3ZM18.0381 3C17.4381 3 17.0381 3.4 17.0381 4C17.0381 4.6 17.4381 5 18.0381 5C18.6381 5 19.0381 4.6 19.0381 4C19.0381 3.4 18.6381 3 18.0381 3ZM12.0381 17V22H6.03809V17C6.03809 15.3 7.33809 14 9.03809 14C10.7381 14 12.0381 15.3 12.0381 17ZM9.03809 15.5C8.23809 15.5 7.53809 16.2 7.53809 17C7.53809 17.8 8.23809 18.5 9.03809 18.5C9.83809 18.5 10.5381 17.8 10.5381 17C10.5381 16.2 9.83809 15.5 9.03809 15.5ZM15.0381 15H17.0381V13H16.0381V8L14.0381 10V14C14.0381 14.6 14.4381 15 15.0381 15ZM19.0381 15H21.0381C21.6381 15 22.0381 14.6 22.0381 14V10L20.0381 8V13H19.0381V15ZM21.0381 20H15.0381V22H21.0381V20Z" fill="white"/>
                                    </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title text-white">BOM</span>
                    </a>
                </div>
                <!--end:Menu item-->
                <!--begin:Menu Collapse-->
                <div class="collapse" id="bom">
                    <!--begin:Item Collapse-->
                    <div class="menu-item" {!! str_contains(Request::Path(), 'bom-design') ? $activePage : '' !!}>
                        <a class="menu-link" href="/bom-design">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot text-warning"></span>
                                </span>
                                <span class="menu-title {!! str_contains(Request::Path(), 'bom-design') ? 'text-white' : '' !!}">BOM Design</span>
                                <span class="menu-arrow "></span>
                            </span>
                        </a>
                    </div>
                    <!--end:Item Collapse-->
                    <!--begin:Item Collapse-->
                    <div class="menu-item" {!! str_contains(Request::Path(), 'view-design') ? $activePage : '' !!}>
                        <a class="menu-link" href="/calculate-bom">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot text-warning"></span>
                                </span>
                                <span class="menu-title {!! str_contains(Request::Path(), 'view-design') ? 'text-white' : '' !!}">BOM Calculate</span>
                                <span class="menu-arrow "></span>
                            </span>
                        </a>
                    </div>
                    <!--end:Item Collapse-->
                </div>
                <!--end:Menu Collapse-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <a class="menu-link" {!! str_contains(Request::Path(), 'procure-to-pay') ? $activePage : '' !!}  href="/procure-to-pay">
                        <span class="me-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M18.041 22.041C18.5932 22.041 19.041 21.5932 19.041 21.041C19.041 20.4887 18.5932 20.041 18.041 20.041C17.4887 20.041 17.041 20.4887 17.041 21.041C17.041 21.5932 17.4887 22.041 18.041 22.041Z" fill="white"/>
                                <path opacity="0.3" d="M6.04095 22.041C6.59324 22.041 7.04095 21.5932 7.04095 21.041C7.04095 20.4887 6.59324 20.041 6.04095 20.041C5.48867 20.041 5.04095 20.4887 5.04095 21.041C5.04095 21.5932 5.48867 22.041 6.04095 22.041Z" fill="white"/>
                                <path opacity="0.3" d="M7.04095 16.041L19.1409 15.1409C19.7409 15.1409 20.141 14.7409 20.341 14.1409L21.7409 8.34094C21.9409 7.64094 21.4409 7.04095 20.7409 7.04095H5.44095L7.04095 16.041Z" fill="white"/>
                                <path d="M19.041 20.041H5.04096C4.74096 20.041 4.34095 19.841 4.14095 19.541C3.94095 19.241 3.94095 18.841 4.14095 18.541L6.04096 14.841L4.14095 4.64095L2.54096 3.84096C2.04096 3.64096 1.84095 3.04097 2.14095 2.54097C2.34095 2.04097 2.94096 1.84095 3.44096 2.14095L5.44096 3.14095C5.74096 3.24095 5.94096 3.54096 5.94096 3.84096L7.94096 14.841C7.94096 15.041 7.94095 15.241 7.84095 15.441L6.54096 18.041H19.041C19.641 18.041 20.041 18.441 20.041 19.041C20.041 19.641 19.641 20.041 19.041 20.041Z" fill="white"/>
                                </svg>
                        </span>
                        <span style="font-size: 16px" class="menu-title text-white">Procure to Pay</span>
                    </a>
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <a class="menu-link" {!! str_contains(Request::Path(), 'reture') ? $activePage : '' !!}  href="/reture">
                        <span class="me-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M20 22H4C3.4 22 3 21.6 3 21V2H21V21C21 21.6 20.6 22 20 22Z" fill="white"/>
                            <path d="M12 14C9.2 14 7 11.8 7 9V5C7 4.4 7.4 4 8 4C8.6 4 9 4.4 9 5V9C9 10.7 10.3 12 12 12C13.7 12 15 10.7 15 9V5C15 4.4 15.4 4 16 4C16.6 4 17 4.4 17 5V9C17 11.8 14.8 14 12 14Z" fill="white"/>
                            </svg>
                        </span>
                        <span style="font-size: 16px" class="menu-title text-white">Reture</span>
                    </a>
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <a class="menu-link" {!! str_contains(Request::Path(), 'goods-receipt') ? $activePage : '' !!}  href="/goods-receipt">
                        <span class="me-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M17.9061 13H11.2061C11.2061 12.4 10.8061 12 10.2061 12C9.60605 12 9.20605 12.4 9.20605 13H6.50606L9.20605 8.40002V4C8.60605 4 8.20605 3.6 8.20605 3C8.20605 2.4 8.60605 2 9.20605 2H15.2061C15.8061 2 16.2061 2.4 16.2061 3C16.2061 3.6 15.8061 4 15.2061 4V8.40002L17.9061 13ZM13.2061 9C12.6061 9 12.2061 9.4 12.2061 10C12.2061 10.6 12.6061 11 13.2061 11C13.8061 11 14.2061 10.6 14.2061 10C14.2061 9.4 13.8061 9 13.2061 9Z" fill="white"/>
                                <path d="M18.9061 22H5.40605C3.60605 22 2.40606 20 3.30606 18.4L6.40605 13H9.10605C9.10605 13.6 9.50605 14 10.106 14C10.706 14 11.106 13.6 11.106 13H17.8061L20.9061 18.4C21.9061 20 20.8061 22 18.9061 22ZM14.2061 15C13.1061 15 12.2061 15.9 12.2061 17C12.2061 18.1 13.1061 19 14.2061 19C15.3061 19 16.2061 18.1 16.2061 17C16.2061 15.9 15.3061 15 14.2061 15Z" fill="white"/>
                                </svg>
                        </span>
                        <span style="font-size: 16px" class="menu-title text-white">Goods Receipt</span>
                    </a>
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <a class="menu-link" {!! str_contains(Request::Path(), 'wasted-order') ? $activePage : '' !!}  href="/wasted-order">
                        <span class="me-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="white"/>
                            <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="white"/>
                            <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="white"/>
                            </svg>
                        </span>
                        <span style="font-size: 16px" class="menu-title text-white">Wasted Order</span>
                    </a>
                </div>
                <!--end:Menu item-->
            
                <!--begin:Menu item-->
                <div class="menu-item">
                    @if (!auth()->user()->Role->is_user)
                    <a class="menu-link" {!! str_contains(Request::Path(), 'account') ? $activePage : '' !!} href="/account">
                    @else
                    <a class="menu-link" {!! str_contains(Request::Path(), 'account') ? $activePage : '' !!} href="/account/view/{{ auth()->user()->uuid }}">
                    @endif
                        <span class="menu-icon" style="font-size: 16px">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="white" />
                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="white" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span  style="font-size: 16px" class="menu-title text-white">User Managements</span>
                    </a>
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <a class="menu-link" data-bs-toggle="collapse" href="#master-data" role="button" aria-expanded="false" aria-controls="collapse-side">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3"
                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                        fill="white" />
                                    <path
                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                        fill="white" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title text-white">Master Data</span>
                    </a>
                </div>
                <!--end:Menu item-->
            
                <!--begin:Menu Collapse-->
                <div class="collapse" id="master-data">
                    <!--begin:Item Collapse-->
                    <div class="menu-item" {!! str_contains(Request::Path(), 'Items') ? $activePage : '' !!}>
                        <a class="menu-link" href="/Items">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot text-warning"></span>
                                </span>
                                <span class="menu-title {!! str_contains(Request::Path(), 'Items') ? 'text-white' : '' !!}">Items</span>
                                <span class="menu-arrow "></span>
                            </span>
                        </a>
                    </div>
                    <!--end:Item Collapse-->
                    <!--begin:Item Collapse-->
                    <div class="menu-item" {!! str_contains(Request::Path(), 'Location') ? $activePage : '' !!}>
                        <a class="menu-link" href="/Location">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot text-warning"></span>
                                </span>
                                <span class="menu-title {!! str_contains(Request::Path(), 'Location') ? 'text-white' : '' !!}">Location</span>
                                <span class="menu-arrow "></span>
                            </span>
                        </a>
                    </div>
                    <!--end:Item Collapse-->
                    <!--begin:Item Collapse-->
                    <div class="menu-item" {!! str_contains(Request::Path(), 'machine') ? $activePage : '' !!}>
                        <a class="menu-link" href="/machine">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot text-warning"></span>
                                </span>
                                <span class="menu-title {!! str_contains(Request::Path(), 'Location') ? 'text-white' : '' !!}">Machine</span>
                                <span class="menu-arrow "></span>
                            </span>
                        </a>
                    </div>
                    <!--end:Item Collapse-->
                </div>
                <!--end:Menu Collapse-->
                
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link" {!! str_contains(Request::Path(), 'setting') ? $activePage : '' !!}   href="/setting">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs014.svg-->
                            <span class="svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M11.8 5.2L17.7 8.6V15.4L11.8 18.8L5.90001 15.4V8.6L11.8 5.2ZM11.8 2C11.5 2 11.2 2.1 11 2.2L3.8 6.4C3.3 6.7 3 7.3 3 7.9V16.2C3 16.8 3.3 17.4 3.8 17.7L11 21.9C11.3 22 11.5 22.1 11.8 22.1C12.1 22.1 12.4 22 12.6 21.9L19.8 17.7C20.3 17.4 20.6 16.8 20.6 16.2V7.9C20.6 7.3 20.3 6.7 19.8 6.4L12.6 2.2C12.4 2.1 12.1 2 11.8 2Z" fill="white" />
                                    <path d="M11.8 8.69995L8.90001 10.3V13.7L11.8 15.3L14.7 13.7V10.3L11.8 8.69995Z" fill="white" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title text-white">Layout Builder</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
</div>
<!--end::Aside-->