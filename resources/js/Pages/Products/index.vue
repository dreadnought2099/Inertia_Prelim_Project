<template>
  <div>
    <h1>Products</h1>
    
    <!-- Include the CategoryFilter Component and pass categories -->
    <CategoryFilter :categories="categories" />
    
    <!-- Display products after filtering -->
    <ul>
      <li v-for="product in products" :key="product.id">
        <inertia-link :href="`/products/${product.id}`">{{ product.name }}</inertia-link>
      </li>
    </ul>
  </div>
</template>

<script>
// Import the CategoryFilter component
import CategoryFilter from '@/Components/CategoryFilter.vue';

export default {
  props: {
    products: Array,  // List of products passed from the controller
    categories: Array,  // List of categories passed from the controller
  },
  components: {
    CategoryFilter,  // Register CategoryFilter component
  },
};
</script>
