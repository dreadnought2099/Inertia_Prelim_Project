<template>
  <div>
    <h1>Categories</h1>
    <ul>
      <li v-for="category in categories" :key="category.id">
        <inertia-link :href="`/categories/${category.id}`">{{ category.name }}</inertia-link>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: {
    categories: Array,
  },
};
</script>
