<template>
    <nav id="mainnav-container" class="mainnav">
        <div class="mainnav__inner">

            <!-- Navigation menu -->
            <div class="mainnav__top-content scrollable-content pb-5">

                <!-- Profile Widget -->
                <div class="mainnav__profile mt-3 d-flex3">

                    <div class="mt-2 d-mn-max"></div>

                    <!-- Profile picture  -->
                    <div class="mininav-toggle py-2" style="display: flex; justify-content: center;">
                        <img class="mainnav__avatar img-md rounded-circle border"   src="assets/img/profile-photos/1.png" alt="Profile Picture">
                    </div>

                    <div class="mininav-content collapse d-mn-max">
                        <div class="d-grid">

                            <!-- User name and position -->
                            <button class="d-block btn shadow-none p-2" data-bs-toggle="collapse" data-bs-target="#usernav" aria-expanded="false" aria-controls="usernav">
                                <span class="dropdown-toggle d-flex justify-content-center align-items-center">
                                    <h6 class="mb-0 me-3">{{ user.name }}</h6>
                                </span>
                                <small class="text-muted">Administrator</small>
                            </button>

                            <!-- Collapsed user menu -->
                            <div id="usernav" class="nav flex-column collapse">
                                <a href="#" class="nav-link d-flex justify-content-between align-items-center">
                                    <span><i class="demo-pli-mail fs-5 me-2"></i><span class="ms-1">Messages</span></span>
                                    <span class="badge bg-danger rounded-pill">14</span>
                                </a>
                                <a href="#" class="nav-link">
                                    <i class="demo-pli-male fs-5 me-2"></i>
                                    <span class="ms-1">Profile</span>
                                </a>
                                <a href="#" class="nav-link">
                                    <i class="demo-pli-gear fs-5 me-2"></i>
                                    <span class="ms-1">Settings</span>
                                </a>
                                <a href="#" class="nav-link">
                                    <i class="demo-pli-computer-secure fs-5 me-2"></i>
                                    <span class="ms-1">Lock screen</span>
                                </a>
                                <a href="#" class="nav-link">
                                    <i class="demo-pli-unlock fs-5 me-2"></i>
                                    <span class="ms-1">Logout</span>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- End - Profile widget -->

                <!-- Navigation Category -->
                <div class="mainnav__categoriy py-3">
                    <h6 class="mainnav__caption mt-0 px-3 fw-bold">Hotel Panel</h6>
                    <ul class="mainnav__menu nav flex-column">

                        <!-- Regular menu link -->
                        <li class="nav-item">
                            <a href="widgets/index.html" class="nav-link mininav-toggle"><i class="demo-pli-home fs-5 me-2"></i>

                                <span class="nav-label mininav-content ms-1">Dashboard</span>
                            </a>
                        </li>
                        <!-- END : Regular menu link -->

                        <!-- Regular menu link -->
                        <li class="nav-item">
                            <a href="" class="nav-link mininav-toggle"> <font-awesome-icon :icon="checkIn" class="fs-5 me-2"/>
                                <span class="nav-label mininav-content ms-1">Check in</span>
                            </a>
                            
                        </li>
                        <!-- END : Regular menu link -->

                         <!-- Regular menu link -->
                        <li class="nav-item">
                            <a href="widgets/index.html" class="nav-link mininav-toggle"><font-awesome-icon :icon="checkOut" class="fs-5 me-2"/>

                                <span class="nav-label mininav-content ms-1">Check out</span>
                            </a>
                        </li>
                        <!-- END : Regular menu link -->

                    </ul>
                </div>
                <!-- END : Navigation Category -->

                <!-- Components Category -->
                <div class="mainnav__categoriy py-3">
                    <h6 class="mainnav__caption mt-0 px-3 fw-bold">Resturant's Panel</h6>
                    <ul class="mainnav__menu nav flex-column">

                        <!-- Regular menu link -->
                        <li class="nav-item">
                            <a href="widgets/index.html" class="nav-link mininav-toggle"><i class="demo-pli-gear fs-5 me-2"></i>

                                <span class="nav-label mininav-content ms-1">Food Order</span>
                            </a>
                        </li>
                        <!-- END : Regular menu link -->

                        <!-- Regular menu link -->
                        <li class="nav-item">
                            <a href="widgets/index.html" class="nav-link mininav-toggle"><i class="demo-pli-gear fs-5 me-2"></i>

                                <span class="nav-label mininav-content ms-1">Billing</span>
                            </a>
                        </li>
                        <!-- END : Regular menu link -->

                    </ul>
                </div>
                <!-- END : Components Category -->

                <!-- More Category -->
                <div class="mainnav__categoriy py-3">
                    <h6 class="mainnav__caption mt-0 px-3 fw-bold">Miscellaneous</h6>
                    <ul class="mainnav__menu nav flex-column">

                        <!-- Link with submenu -->
                        <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-computer-secure fs-5 me-2"></i>
                                <span class="nav-label ms-1">Hotel Setup</span>
                            </a>

                            <!-- App Views submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="app-views/file-manager/index.html" class="nav-link">File Manager</a>
                                </li>
                                <li class="nav-item">
                                    <a href="app-views/users/index.html" class="nav-link">Users</a>
                                </li>
                                <li class="nav-item">
                                    <a href="app-views/users-2/index.html" class="nav-link">Users 2</a>
                                </li>
                                <li class="nav-item">
                                    <a href="app-views/profile/index.html" class="nav-link">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="app-views/calendar/index.html" class="nav-link">Calendar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="app-views/taskboard/index.html" class="nav-link">Taskboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="app-views/chat/index.html" class="nav-link">Chat</a>
                                </li>
                                <li class="nav-item">
                                    <a href="app-views/contact-us/index.html" class="nav-link">Contact Us</a>
                                </li>

                            </ul>
                            <!-- END : App Views submenu list -->

                        </li>
                        <!-- END : Link with submenu -->

                        <!-- Link with submenu -->
                        <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-speech-bubble-5 fs-5 me-2"></i>
                                <span class="nav-label ms-1">Restaurant Setup</span>
                            </a>

                            <!-- Blog Apps submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="blog-apps/blog/index.html" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-apps/blog-list/index.html" class="nav-link">Blog List</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-apps/blog-list-2/index.html" class="nav-link">Blog List 2</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-apps/blog-article/index.html" class="nav-link">Blog Article</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-apps/manage-posts/index.html" class="nav-link">Manage Posts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-apps/add-edit-posts/index.html" class="nav-link">Add Edit Posts</a>
                                </li>

                            </ul>
                            <!-- END : Blog Apps submenu list -->

                        </li>
                        <!-- END : Link with submenu -->

                        <!-- Link with submenu -->
                        <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-speech-bubble-5 fs-5 me-2"></i>
                                <span class="nav-label ms-1">User Management</span>
                            </a>

                            <!-- Blog Apps submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="blog-apps/blog/index.html" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-apps/blog-list/index.html" class="nav-link">Blog List</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-apps/blog-list-2/index.html" class="nav-link">Blog List 2</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-apps/blog-article/index.html" class="nav-link">Blog Article</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-apps/manage-posts/index.html" class="nav-link">Manage Posts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-apps/add-edit-posts/index.html" class="nav-link">Add Edit Posts</a>
                                </li>

                            </ul>
                            <!-- END : Blog Apps submenu list -->

                        </li>
                        <!-- END : Link with submenu -->

                    </ul>
                </div>
                <!-- END : More Category -->

            </div>
            <!-- End - Navigation menu -->

            <!-- Bottom navigation menu -->
            <div class="mainnav__bottom-content border-top pb-2">
                <ul id="mainnav" class="mainnav__menu nav flex-column">
                    <li class="nav-item has-sub">
                        <a href="#" class="nav-link mininav-toggle collapsed" aria-expanded="false">
                            <i class="demo-pli-unlock fs-5 me-2"></i>
                            <span class="nav-label ms-1">Logout</span>
                        </a>
                        <ul class="mininav-content nav flex-column collapse">
                            <li class="nav-item">
                                <a href="#" class="nav-link">This device only</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">All Devices</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Lock screen</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- End - Bottom navigation menu -->

        </div>
    </nav>
</template>

<script>
    import { computed } from 'vue'
    import { usePage } from '@inertiajs/inertia-vue3'
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
    import { faClipboardCheck } from '@fortawesome/free-solid-svg-icons'
    import { faRightFromBracket } from '@fortawesome/free-solid-svg-icons'

    export default {
        setup() {
            const user = computed(() => usePage().props.value.auth.user)
            return { user }
        },
        data () {
            return {
            checkIn: faClipboardCheck,
            checkOut: faRightFromBracket,
            }
        },
        components: {
            FontAwesomeIcon
        }
    }
   
</script>