<template>
  <div class="product-card">
    <!-- Display the product name, description, and price -->
    <h3>{{ product.name }}</h3>
    <p>{{ product.description }}</p>
    <p><strong>Price: </strong>${{ product.retail_price.toFixed(2) }}</p>
    
    <!-- Link to the product detail page using Inertia.js -->
    <inertia-link :href="`/products/${product.id}`" class="view-details-link">
      View Details
    </inertia-link>
  </div>
</template>

<script>
export default {
  props: {
    // Receive the product data as a prop
    product: Object,
  },
};
</script>

<style scoped>
.product-card {
  border: 1px solid #ccc;
  padding: 16px;
  margin: 8px;
  border-radius: 8px;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.product-card h3 {
  font-size: 1.25rem;
  margin-bottom: 8px;
}

.product-card p {
  font-size: 1rem;
  color: #333;
}

.product-card .view-details-link {
  display: inline-block;
  margin-top: 12px;
  padding: 8px 16px;
  background-color: #007bff;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
}

.product-card .view-details-link:hover {
  background-color: #0056b3;
}
</style>
