<template>
  <div>
    <h1>{{ category.name }}</h1>
    <p>{{ category.description }}</p>
    <h2>Products in this category:</h2>
    <ul>
      <li v-for="product in category.products" :key="product.id">
        <a :href="`/products/${product.id}`">{{ product.name }}</a>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: {
    category: Object,
  },
};
</script>
