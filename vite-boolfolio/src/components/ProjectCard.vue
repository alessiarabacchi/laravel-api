<script>
export default {
    props: {
        project: Object,
    },
};
</script>

<template>
    <div class="project-card">
        <h3>{{ project.name }}</h3>
        <p>{{ project.description }}</p>
    </div>
</template>
