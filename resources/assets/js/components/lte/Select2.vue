<!-- <template>
	<select class="form-control select2" name="products[]" v-model="product_id" style="width: 100%;">
        <option value="0" selected>Seleccione un producto</option>
        <option v-for="product in products" :value="product.id">
            {{ product.description }}
        </option>
    </select>
</template>

<script>
export default {
    data() {
        return {
            product_id: 0,
        };
    },
    props: ['products'],
    watch: {
	  product_id: function (newVal) {
	    this.gotoMonth(newVal);
	  }
	}
};
</script> -->