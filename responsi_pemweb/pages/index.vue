<template>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css'>
  <div class="w-full ">
    <NavbarSection />
  </div>

  <section class="hero flex w-[75%] mx-auto pt-72">
   <div class="container-fluid my-auto">
    <div class="main-body ">
    
          <div class="flex flex-wrap ">
            <div class="w-80 h-auto ">
              <SidebarSection />
            </div>
            
            <div class="w-9/12 mx-4">
              <HeroSection />
            </div>
          </div>

        </div>
    </div>
   
  </section>
</template>

<script>
import AboutSection from '~/components/AboutSection.vue';
import ContactSection from '~/components/ContactSection.vue';
import HeroSection from '../components/HeroSection.vue';

export default {
  components: {
    HeroSection,
  }
}
</script>./Index.vue

<style>
.sticky-top {
      position: -webkit-sticky;
      position: sticky;
      top: 0;
      z-index: 1020;
    }
</style>
