<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import ProjectCard from "./components/ProjectCard.vue";

const projects = ref([]);

onMounted(() => {
    axios.get("http://127.0.0.1:8000/api/projects").then((response) => {
        projects.value = response.data;
    });
});
</script>

<template>
    <div v-for="project in projects" :key="project.id">
        <ProjectCard :project="project" />
    </div>
</template>
