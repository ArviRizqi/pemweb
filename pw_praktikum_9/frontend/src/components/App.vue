<script setup>
 import { RouterLink, RouterView } from 'vue-router'
</script>

<template>


    <div id="app">
 <nav>
 <ul>
 <li><router-link to="/">Home</router-link></li>
 <li><router-link to="/about">about</router-link></li>
 <li><router-link to="/service">services</router-link></li>
 </ul>
 </nav>
 <router-view/>
 </div>
</template>
<script>
export default {
 name: 'App'
}
</script>
<style>
nav ul {
 list-style-type: none;
 padding: 0;
}
nav ul li {
 display: inline;
 margin-right: 10px;
}
</style>