<template>
  <div>
    <h1>{{ product.name }}</h1>
    <p>{{ product.description }}</p>
    <p><strong>Wholesale Price: </strong>${{ product.wholesale_price }}</p>
    <p><strong>Retail Price: </strong>${{ product.retail_price }}</p>
    <p><strong>Category: </strong>{{ product.category.name }}</p>
  </div>
</template>

<script>
export default {
  props: {
    product: Object,
  },
};
</script>
