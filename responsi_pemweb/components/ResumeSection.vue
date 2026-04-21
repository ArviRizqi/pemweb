<template>
  <div class="container-fluid py-5 px-5 bg-slate-50" id="resume">
    <h1 class="font-semibold">
        Resume.
        <hr class="w-40 h-[2px] mt-0 mb-3 bg-gray-100 border-0 rounded md:my-10 dark:bg-blue-700">
      </h1>
    <div class="row">
      <!-- project -->
    <div class="col-6 my-3 pl-4">
      <h4 class="font-semibold">Education</h4>
      <div class="card h-auto my-2">
        <div class="card-body">
          <h6 class="d-flex text-xl align-items-center mb-1">Universitas Amikom Yogyakarta</h6>
          <hr class="w-50 h-[2px] mt-1 mb-3 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
          <div class="flex">
            <div class="w-2/3">
              <h6 class="font-normal text-md"><i>Bachelor of Informatics</i></h6>
            </div>
            <div class="w-1/3 text-end">
              <h6><b>2022 - present</b></h6>
            </div>
          </div>
        </div>
      </div>
      <div class="card h-auto my-2">
        <div class="card-body">
          <h6 class="d-flex text-xl align-items-center mb-1">SMK Sakti Gemolong</h6>
          <hr class="w-50 h-[2px] mt-1 mb-3 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
          <div class="flex">
            <div class="w-2/3">
              <h6 class=" font-normal text-md"><i>Teknik Komputer Jaringan.</i></h6>
            </div>
            <div class="w-1/3 text-end">
              <h6><b>2018 - 2021</b></h6>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- skill -->
    <div class="col-6 my-3">
      <h4 class="font-semibold">Experience</h4>
      <div class="card h-auto my-2">
        <div class="card-body">
          <h6 class="d-flex text-xl align-items-center mb-1">-</h6>
          <div class="flex">
            <div class="w-2/3">
              <h6 class="font-normal text-md"><i></i></h6>
            </div>
            <div class="w-1/3 text-end">
              <h6><b></b></h6>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <div class="col-12 my-3 pl-4">
      <h4 class="font-semibold">Skills</h4>
       <div class="card h-auto my-2">
        <div class="card-body">
          <h6>Web Design</h6>
          <div class="progress mb-3" style="height: 5px">
            <div
              class="progress-bar bg-primary"
              role="progressbar"
              style="width: 80%"
              aria-valuenow="80"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <h6>Html</h6>
          <div class="progress mb-3" style="height: 5px">
            <div
              class="progress-bar bg-primary"
              role="progressbar"
              style="width: 72%"
              aria-valuenow="72"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <h6>Css</h6>
          <div class="progress mb-3" style="height: 5px">
            <div
              class="progress-bar bg-primary"
              role="progressbar"
              style="width: 89%"
              aria-valuenow="89"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <h6>Javascript</h6>
          <div class="progress mb-3" style="height: 5px">
            <div
              class="progress-bar bg-primary"
              role="progressbar"
              style="width: 55%"
              aria-valuenow="55"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <h6>Python</h6>
          <div class="progress mb-3" style="height: 5px">
            <div
              class="progress-bar bg-primary"
              role="progressbar"
              style="width: 66%"
              aria-valuenow="66"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
        </div>
      </div> 
    </div>
    <div class="col-12 my-3 pl-4">
      <h4 class="font-semibold">Achievements</h4>
      <div class="card h-auto my-2">
        <div class="card-body">
          <h6 class="d-flex text-xl align-items-center mb-1">Juara 3 LKS Web Technologies</h6>
          <hr class="w-40 h-[2px] mt-1 mb-3 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
          <div class="flex">
            <div class="w-2/3">
              <h6 class="font-normal text-md"><i>Kabupaten Sragen</i></h6>
            </div>
            <div class="w-1/3 text-end">
              <h6><b>2020</b></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 my-3 pl-4">
      <h4 class="font-semibold">Certificate</h4>
      <div class="card h-auto my-2">
        <div class="card-body">
          <h6 class="d-flex text-xl align-items-center mb-1">Belajar Pemrograman Dasar Web</h6>
          <hr class="w-40 h-[2px] mt-1 mb-3 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
          <div class="flex">
            <div class="w-2/3">
              <h6 class="font-normal text-md"><i>Dicoding</i></h6>
            </div>
            <div class="w-1/3 text-end">
              <h6><b>Mei, 27 2023</b></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ProjectsSection",
};
</script>

<style scoped></style>
