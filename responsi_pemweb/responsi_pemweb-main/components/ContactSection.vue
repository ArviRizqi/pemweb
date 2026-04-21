<template>
  <section class="card py-5 px-5" id="contact">
    <h1 class="font-semibold">
        Contact.
        <hr class="w-40 h-[2px] mt-0 mb-3 bg-gray-100 border-0 rounded md:my-10 dark:bg-blue-700">
      </h1>
      <div class="text-center">
        <p class="mt-4 text-xl leading-6 text-gray-900">We'd love to hear from you. Please fill out the form below and we'll get in touch with you as soon as possible.</p>
      </div>
      <div class="w-[80%] mx-auto mt-12">
        <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
          <div>
            <label for="first_name" class="block text-lg font-medium text-gray-700">First name</label>
            <div class="mt-1">
              <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="py-3 px-4 block w-full border border-gray-100 shadow-sm focus:ring-indigo-500 focus:border-indigo-500  rounded-md">
            </div>
          </div>
          <div>
            <label for="last_name" class="block text-lg font-medium text-gray-700">Last name</label>
            <div class="mt-1">
              <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="py-3 px-4 block w-full border border-gray-100 shadow-sm focus:ring-indigo-500 focus:border-indigo-500  rounded-md">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
            <div class="mt-1">
              <input type="email" name="email" id="email" autocomplete="email" class="py-3 px-4 block w-full border border-gray-100 shadow-sm focus:ring-indigo-500 focus:border-indigo-500  rounded-md">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="message" class="block text-lg font-medium text-gray-700">Message</label>
            <div class="mt-1">
              <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full border border-gray-100 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 rounded-md"></textarea>
            </div>
          </div>
          <div class="sm:col-span-2">
            <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Send Message</button>
          </div>
        </form>
      </div>
  </section>
</template>

<script>
export default {
  name: 'ContactSection'
}
</script>

<style scoped>
.contact {
  padding: 50px 0;
}
</style>
