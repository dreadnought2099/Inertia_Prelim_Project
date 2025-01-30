<template>
  <div>
    <!-- Dropdown for filtering categories -->
    <select v-model="selectedCategory" @change="onCategoryChanged">
      <option value="">All Categories</option>
      <!-- Loop through categories passed from the parent -->
      <option v-for="category in categories" :key="category.id" :value="category.id">
        {{ category.name }}
      </option>
    </select>
  </div>
</template>

<script>
export default {
  // Accept the categories prop from the parent component (Products/Index.vue)
  props: {
    categories: Array,  // Categories to populate the dropdown
  },
  data() {
    return {
      // Bind the selected category
      selectedCategory: '', 
    };
  },
  methods: {
    // When a category is selected, reload products by the selected category
    onCategoryChanged() {
      // Send an Inertia request to update the page content (filter by category)
      this.$inertia.get('/products', { category: this.selectedCategory });
    }
  },
  watch: {
    // If the parent component passes a category, select it in the filter
    selectedCategory(newCategory, oldCategory) {
      if (newCategory !== oldCategory) {
        // Sync the selected category with the prop value
        this.$inertia.get('/products', { category: newCategory });
      }
    }
  }
};
</script>
