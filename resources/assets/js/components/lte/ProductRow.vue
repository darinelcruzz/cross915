<template lang="html">
    <tr>
        <td>
            {{ num }}
        </td>
        <td>
            <div class="form-group">
                <select class="form-control select2" name="products[]" v-model="product_id" style="width: 100%;">
                    <option value="0" selected>Seleccione un producto</option>
                    <option v-for="product in products" :value="product.id">
                        {{ product.description }}
                    </option>
                </select>
            </div>
        </td>

        <td align="center">
            <div class="form-group">
                <input v-model="quantity" @change="updateTotal" class="form-control" type="number" name="quantities[]" min="0" step="0.1"
                    style="width:85px;">
            </div>
        </td>

        <td>{{ price }}</td>
        <td>{{ total }}</td>

    </tr>
</template>

<script>
export default {
    data() {
        return {
            product_id: 1,
            quantity: 0,
            total: 0,
            price: 0
        };
    },
    props: ['products', 'num'],
    methods: {
        updateTotal() {
            this.total = this.products[this.product_id].public * this.quantity;
        }
    },
    watch: {
        product_id: function (val, oldVal) {
            this.price = this.products[val].public;
        },
    },
    created() {
        this.price = this.products[this.product_id].public;
    }
}
</script>
