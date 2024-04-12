<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";

const projects = ref([]);

onMounted(() => {
    axios.get("http://127.0.0.1:8000/api/projects").then((response) => {
        projects.value = response.data;
    });
});
</script>

<template>
    <div v-for="project in projects" :key="project.id">
        <h3>{{ project.name }}</h3>
        <p>{{ project.description }}</p>
    </div>
</template>
