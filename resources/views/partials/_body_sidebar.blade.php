<div class="iq-sidebar sidebar-default">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="#" class="header-logo">
{{--            <img src="{{ asset('images/logo.png') }}" class="img-fluid rounded-normal light-logo" alt="logo">--}}
            <img src="{{ asset('images/logo.png') }}" class="img-fluid rounded-normal darkmode-logo" alt="logo">
            <h5 class="logo-title light-logo ml-3">Management System</h5>
        </a>
        <div class="side-menu-bt-sidebar">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="{{ activeRoute('dashboard1') }}">
                    <a href="{{ route('dashboard.1') }}" class="svg-icon">
                        <svg  class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span class="ml-4">Dashboards</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#vehicleTypes" class="collapsed" data-toggle="collapse" aria-expanded="false">
{{--                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>--}}
{{--                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>--}}
{{--                        </svg>--}}
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <rect x="1" y="3" width="15" height="13" />
                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8" />
                            <circle cx="5.5" cy="18.5" r="2.5" />
                            <circle cx="18.5" cy="18.5" r="2.5" />
                        </svg>
                        <span class="ml-4">Vehicle Types</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="vehicleTypes" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('vehicle-types.index')}}">
                            <a href="{{route('vehicle-types.index')}}">
                                <i class="las la-minus"></i><span>List Vehicle Types</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('vehicle-types.create')}}">
                            <a href="{{route('vehicle-types.create')}}">
                                <i class="las la-minus"></i><span>Add Vehicle Types</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#vehicles" class="collapsed" data-toggle="collapse" aria-expanded="false">
{{--                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>--}}
{{--                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>--}}
{{--                        </svg>--}}
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <path d="M22 12h-1L17 2H7l-4 10H2" />
                            <circle cx="7.5" cy="14.5" r="1.5" />
                            <circle cx="16.5" cy="14.5" r="1.5" />
                            <line x1="2" y1="22" x2="15" y2="22" />
                            <polyline points="17 16 23 16 23 22" />
                            <polyline points="1 16 7 16 7 22" />
                        </svg>
                        <span class="ml-4">Vehicles</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="vehicles" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('vehicles.index')}}">
                            <a href="{{route('vehicles.index')}}">
                                <i class="las la-minus"></i><span>List Vehicles</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('vehicles.create')}}">
                            <a href="{{route('vehicles.create')}}">
                                <i class="las la-minus"></i><span>Add Vehicles</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#vehiclesAvailabilities" class="collapsed" data-toggle="collapse" aria-expanded="false">
{{--                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>--}}
{{--                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>--}}
{{--                        </svg>--}}
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                            <polyline points="22 4 12 14.01 9 11.01" />
                        </svg>
                        <span class="ml-4">Vehicle Availablities</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="vehiclesAvailabilities" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('vehicle-availabilities.index')}}">
                            <a href="{{route('vehicle-availabilities.index')}}">
                                <i class="las la-minus"></i><span>List Vehicles</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('vehicle-availabilities.create')}}">
                            <a href="{{route('vehicle-availabilities.create')}}">
                                <i class="las la-minus"></i><span>Add Vehicles</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#trips" class="collapsed" data-toggle="collapse" aria-expanded="false">
{{--                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>--}}
{{--                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>--}}
{{--                        </svg>--}}
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <polygon points="3 11 22 2 13 21 11 13 3 11" />
                        </svg>
                        <span class="ml-4">Trips</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="trips" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('trips.index')}}">
                            <a href="{{route('trips.index')}}">
                                <i class="las la-minus"></i><span>List Trips</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('trips.create')}}">
                            <a href="{{route('trips.create')}}">
                                <i class="las la-minus"></i><span>Add Trips</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#idTypes" class="collapsed" data-toggle="collapse" aria-expanded="false">
{{--                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>--}}
{{--                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>--}}
{{--                        </svg>--}}
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2" />
                            <line x1="1" y1="10" x2="23" y2="10" />
                        </svg>
                        <span class="ml-4">ID Types</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="idTypes" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('id-types.index')}}">
                            <a href="{{route('id-types.index')}}">
                                <i class="las la-minus"></i><span>List ID Types</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('id-types.create')}}">
                            <a href="{{route('id-types.create')}}">
                                <i class="las la-minus"></i><span>Add ID Type</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#drivers" class="collapsed" data-toggle="collapse" aria-expanded="false">
{{--                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>--}}
{{--                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>--}}
{{--                        </svg>--}}
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <path d="M12 2c2.76 0 5 2.24 5 5 0 2.76-2.24 5-5 5s-5-2.24-5-5c0-2.76 2.24-5 5-5zM19 21v-2c0-2.67-5.33-4-8-4S3 16.33 3 19v2" />
                        </svg>
                        <span class="ml-4">Drivers</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="drivers" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('drivers.index')}}">
                            <a href="{{route('drivers.index')}}">
                                <i class="las la-minus"></i><span>List Drivers</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('drivers.create')}}">
                            <a href="{{route('drivers.create')}}">
                                <i class="las la-minus"></i><span>Add Driver</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#driverAttendance" class="collapsed" data-toggle="collapse" aria-expanded="false">
{{--                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>--}}
{{--                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>--}}
{{--                        </svg>--}}
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                            <line x1="16" y1="2" x2="16" y2="6" />
                            <line x1="8" y1="2" x2="8" y2="6" />
                            <line x1="3" y1="10" x2="21" y2="10" />
                        </svg>
                        <span class="ml-4">Driver Attendances</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="driverAttendance" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('driver-attendances.index')}}">
                            <a href="{{route('driver-attendances.index')}}">
                                <i class="las la-minus"></i><span>List Driver Attendances</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('driver-attendances.create')}}">
                            <a href="{{route('driver-attendances.create')}}">
                                <i class="las la-minus"></i><span>Add Driver Attendances</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#driverAvailability" class="collapsed" data-toggle="collapse" aria-expanded="false">
{{--                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>--}}
{{--                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>--}}
{{--                        </svg>--}}
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                            <polyline points="22 4 12 14.01 9 11.01" />
                        </svg>
                        <span class="ml-4">Driver Availability</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="driverAvailability" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('driver-availabilities.index')}}">
                            <a href="{{route('driver-availabilities.index')}}">
                                <i class="las la-minus"></i><span>List Driver Availabilities</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('driver-availabilities.create')}}">
                            <a href="{{route('driver-availabilities.create')}}">
                                <i class="las la-minus"></i><span>Add Driver Availabilities</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#driverSchedule" class="collapsed" data-toggle="collapse" aria-expanded="false">
{{--                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>--}}
{{--                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>--}}
{{--                        </svg>--}}
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                            <line x1="16" y1="2" x2="16" y2="6" />
                            <line x1="8" y1="2" x2="8" y2="6" />
                            <line x1="3" y1="10" x2="21" y2="10" />
                        </svg>
                        <span class="ml-4">Driver Schedule</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="driverSchedule" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('driver-schedules.index')}}">
                            <a href="{{route('driver-schedules.index')}}">
                                <i class="las la-minus"></i><span>List Driver Schedules</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('driver-schedules.create')}}">
                            <a href="{{route('driver-schedules.create')}}">
                                <i class="las la-minus"></i><span>Add Driver Schedules</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#event" class="collapsed" data-toggle="collapse" aria-expanded="false">
{{--                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>--}}
{{--                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>--}}
{{--                        </svg>--}}
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                            <line x1="16" y1="2" x2="16" y2="6" />
                            <line x1="8" y1="2" x2="8" y2="6" />
                            <line x1="3" y1="10" x2="21" y2="10" />
                        </svg>
                        <span class="ml-4">Events</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="event" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('events.index')}}">
                            <a href="{{route('events.index')}}">
                                <i class="las la-minus"></i><span>List Events</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('events.create')}}">
                            <a href="{{route('events.create')}}">
                                <i class="las la-minus"></i><span>Add Event</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#eventAttendee" class="collapsed" data-toggle="collapse" aria-expanded="false">
{{--                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>--}}
{{--                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>--}}
{{--                        </svg>--}}
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <polyline points="9 11 12 14 22 4" />
                            <path d="M4 12v7a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7" />
                            <line x1="9" y1="9" x2="9" y2="12" />
                            <line x1="15" y1="9" x2="15" y2="12" />
                        </svg>
                        <span class="ml-4">Event Attendee</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="eventAttendee" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('event-attendees.index')}}">
                            <a href="{{route('event-attendees.index')}}">
                                <i class="las la-minus"></i><span>List Events</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('event-attendees.create')}}">
                            <a href="{{route('event-attendees.create')}}">
                                <i class="las la-minus"></i><span>Add Event</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#users" class="collapsed" data-toggle="collapse" aria-expanded="false">
{{--                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>--}}
{{--                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>--}}
{{--                        </svg>--}}
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                        <span class="ml-4">Users</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="users" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('users.index')}}">
                            <a href="{{route('users.index')}}">
                                <i class="las la-minus"></i><span>List Users</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('users.create')}}">
                            <a href="{{route('users.create')}}">
                                <i class="las la-minus"></i><span>Add User</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#tellerRecords" class="collapsed" data-toggle="collapse" aria-expanded="false">
{{--                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>--}}
{{--                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>--}}
{{--                        </svg>--}}
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <path d="M22 6l-8-4H2v16h20V6z" />
                        </svg>
                        <span class="ml-4">Teller Records</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="tellerRecords" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('teller-records.index')}}">
                            <a href="{{route('teller-records.index')}}">
                                <i class="las la-minus"></i><span>List Teller Records</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('teller-records.create')}}">
                            <a href="{{route('teller-records.create')}}">
                                <i class="las la-minus"></i><span>Add Teller Records</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#seatReservation" class="collapsed" data-toggle="collapse" aria-expanded="false">
{{--                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>--}}
{{--                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>--}}
{{--                        </svg>--}}
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                            <line x1="9" y1="9" x2="15" y2="15" />
                            <line x1="15" y1="9" x2="9" y2="15" />
                        </svg>
                        <span class="ml-4">Seat Reservations</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="seatReservation" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('seat-reservations.index')}}">
                            <a href="{{route('seat-reservations.index')}}">
                                <i class="las la-minus"></i><span>List Seat Reservations</span>
                            </a>
                        </li>
                        <!-- <li class="{{activeRoute('seat-reservations.create')}}">
                            <a href="{{route('seat-reservations.create')}}">
                                <i class="las la-minus"></i><span>Add Seat Reservation</span>
                            </a>
                        </li> -->
                    </ul>
                </li>
                <li class=" ">
                    <a href="#seatCancellation" class="collapsed" data-toggle="collapse" aria-expanded="false">
{{--                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>--}}
{{--                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>--}}
{{--                        </svg>--}}
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <circle cx="12" cy="12" r="10" />
                            <line x1="15" y1="9" x2="9" y2="15" />
                            <line x1="9" y1="9" x2="15" y2="15" />
                        </svg>
                        <span class="ml-4">Seat Cancellations</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="seatCancellation" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('seat-cancellations.index')}}">
                            <a href="{{route('seat-cancellations.index')}}">
                                <i class="las la-minus"></i><span>List Seat Cancellations</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('seat-cancellations.create')}}">
                            <a href="{{route('seat-cancellations.create')}}">
                                <i class="las la-minus"></i><span>Add Seat Cancellation</span>
                            </a>
                        </li>
                    </ul>
                </li>

                 <!-- Logout not working -->
                <!-- <a href="{{route('logout')}}"><span>Log Out</span></a> -->
                
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
