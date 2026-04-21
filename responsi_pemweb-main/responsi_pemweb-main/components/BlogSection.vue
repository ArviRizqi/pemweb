<template>
  <div class="container-fluid py-5 px-5 mx-auto bg-slate-50" id="blog">
        <h1 class="font-semibold">
            Blog.
            <hr class="w-40 h-[2px] mt-0 mb-3 bg-gray-100 border-0 rounded md:my-10 dark:bg-blue-700">
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Blog Post 1 -->
            <div class="bg-white rounded-lg shadow-md border border-gray-100 overflow-hidden">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Cara Membuat ATM Mini</h3>
                    <p class="text-gray-800 font-medium text-lg mb-4">Brief description of the project goes here. This is just a placeholder text.</p>
                    <a href="https://mrtutorial123.blogspot.com/2019/08/cara-membuat-atm-mini.html" class="text-blue-500 btn btn-primary hover:underline">view more</a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md border border-gray-100 overflow-hidden">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Cara Membuat Puisi</h3>
                    <p class="text-gray-800 font-medium text-lg mb-4">Brief description of the project goes here. This is just a placeholder text.</p>
                    <a href="https://mrtutorial123.blogspot.com/2019/02/cara-membuat-puisi_2.html" class="text-blue-500 btn btn-primary hover:underline">view more</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: 'BlogSection'
}
</script>

<style scoped>


</style>
