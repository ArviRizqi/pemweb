<template>
  <!-- desc profil -->
  <div class="card py-5 px-5">
    <div class="about pr-5">
      <h1 class="font-semibold">
        About Me.
        <hr
          class="w-40 h-[2px] mt-0 mb-3 bg-gray-100 border-0 rounded md:my-10 dark:bg-blue-700"
        />
      </h1>
      <p class="text-[19px]">
        I am a student and junior web developer from Yogyakarta, Indonesia. I
        have an interest in technology, especially in the fields of data analyst
        and data scientist and I want to develop my skills in the field of data
        analyst and data scientist.
      </p>
      <p class="text-[19px]">
        My aim is to introduce my name to the world with a unique identity.
        that's my characteristic!
      </p>
    </div>
    <div class="ido">
      <h4 class="font-semibold">What I do!</h4>
      <div class="flex gap-5 ps-2">
        <div class="w-7/12">
          <div
            class="w-full h-[200px] rounded overflow-hidden shadow-md bg-emerald-100 border"
          >
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2 d-flex align-items-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="3"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-code icon-inline mr-2"
                >
                  <polyline points="16 18 22 12 16 6"></polyline>
                  <polyline points="8 6 2 12 8 18"></polyline>
                </svg>
                Create an Application
              </div>
              <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptatibus quia, nulla! Maiores et perferendis eaque,
                exercitationem praesentium nihil.
              </p>
            </div>
          </div>
        </div>
        <div class="w-5/12">
          <div
            class="w-full h-[200px] rounded overflow-hidden shadow-md bg-sky-100 border"
          >
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2 d-flex align-items-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="3"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-pen-tool icon-inline mr-2"
                >
                  <path d="M12 19l7-7 3 3-7 7-3-3z" />
                  <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" />
                  <path d="M2 2l7.586 7.586" />
                  <circle cx="11" cy="11" r="2" />
                </svg>
                Create a Design
              </div>
              <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptatibus quia, nulla! Maiores et perferendis eaque,
                exercitationem praesentium nihil.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="flex gap-5 mt-3 ps-2">
        <div class="w-5/12">
          <div
            class="w-full h-[200px] rounded overflow-hidden shadow-md bg-sky-100 border"
          >
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2 d-flex align-items-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-database icon-inline mr-2"
                >
                  <ellipse cx="12" cy="5" rx="9" ry="3" />
                  <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" />
                  <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
                </svg>
                Create a Database Relationship
              </div>
              <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptatibus quia, nulla! Maiores et perferendis eaque,
                exercitationem praesentium nihil.
              </p>
            </div>
          </div>
        </div>
        <div class="w-7/12">
          <div
            class="w-full h-[200px] rounded overflow-hidden shadow-md bg-emerald-100 border"
          >
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2 d-flex align-items-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="3"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-activity icon-inline mr-2"
                >
                  <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" /></svg
                >Work as a Team
              </div>
              <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptatibus quia, nulla! Maiores et perferendis eaque,
                exercitationem praesentium nihil.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="experience mt-3">
      <h3>My Client!</h3>
        <div class="brands">
            <div class="brands-slide w-full">
              <img src="../assets/img/google.png" alt="" class="inline-block">
              <img src="../assets/img/mandiri.png" alt="" class="inline-block">
              <img src="../assets/img/paypal.png" alt="" class="inline-block">
              <img src="../assets/img/netflix.png" alt="" class="inline-block">
              <img src="../assets/img/travleoka.png" alt="" class="inline-block">
            </div>
            <div class="brands-slide w-full">
              <img src="../assets/img/google.png" alt="" class="inline-block">
              <img src="../assets/img/mandiri.png" alt="" class="inline-block">
              <img src="../assets/img/paypal.png" alt="" class="inline-block">
              <img src="../assets/img/netflix.png" alt="" class="inline-block">
              <img src="../assets/img/travleoka.png" alt="" class="inline-block">
            </div>
        </div>
    </div> -->
  </div>
</template>

<script>
export default {
  name: "AboutSection",
};
</script>

<style scoped>
img {
  width: 200px;
  height: auto;
  margin: 0 10px;
}

@keyframes slide {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(-100%);
  }
}

.brands {
  margin-top: 30px;
  white-space: nowrap;
  overflow: hidden;
  position: relative;
}

.brands:hover .brands-slide {
  animation-play-state: paused;
}

.brands-slide {
  width: inherit;
  display: inline-block;
  animation: 10s slide infinite linear;
}
</style>
