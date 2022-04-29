<script setup>
import { ref } from 'vue';
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue';
import BreezeDropdown from '@/Components/Dropdown.vue';
import BreezeDropdownLink from '@/Components/DropdownLink.vue';
import BreezeNavLink from '@/Components/NavLink.vue';
import BreezeResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/inertia-vue3';

import Header from '@/Pages/shared/Header.vue';
import Navbar from '@/Pages/shared/Navbar.vue';
import Sidebar from '@/Pages/shared/Sidebar.vue';
import Footer from '@/Pages/shared/Footer.vue';

const showingNavigationDropdown = ref(false);
</script>

<template>
      <div>
            <div id="root" class="root mn--max hd--expanded">

                <section  id="content" class="content">
                    <main>
                        <slot />
                    </main>     
                    <Footer/>    
                </section>
                
                <Header/>

                <Navbar/>

                <Sidebar/>

            </div>

            <!-- SCROLL TO TOP BUTTON -->
            <div class="scroll-container">
                <a href="#root" class="scroll-page rounded-circle ratio ratio-1x1" aria-label="Scroll button"></a>
            </div>

        </div>
</template>
