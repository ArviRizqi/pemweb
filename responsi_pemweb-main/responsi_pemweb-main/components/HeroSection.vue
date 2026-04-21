<template>
    <div class="w-full border rounded-md">  
      <AboutSection />
      <ResumeSection />
      <ProjectSection />
      <BlogSection />
      <ContactSection />
    </div>
</template>

<script>
import AboutSection from './AboutSection.vue';
import ResumeSection from './ResumeSection.vue';
import ProjectSection from './ProjectSection.vue';
import BlogSection from './BlogSection.vue';
import ContactSection from './ContactSection.vue';

export default {
  name: 'HeroSection'
}
</script>
<style scoped>

</style>
