<template lang="html">
    <tr>
        <td>
            {{ num }}
        </td>
        <td>
            <div class="form-group">
                <v-select label="description" :options="products" v-model="product" placeholder="Seleccione un producto...">
                    <template slot="option" slot-scope="option" :value="option.id">
                        {{ option.description }}
                    </template>
                </v-select>
                <input type="hidden" name="products[]" :value="product">
            </div>
        </td>

        <td align="center">
            <div v-if="type != 'unisize'" class="form-group">
                <select class="form-control" name="sizes[]">
                    <option value="xsmall">XS</option>
                    <option value="small">S</option>
                    <option value="medium">M</option>
                    <option value="large">L</option>
                    <option value="xlarge">XL</option>
                </select>
            </div>
            <div v-else>
                N/A
                <input type="hidden" name="sizes[]" value="unisize">
            </div>
        </td>

        <td align="center">
            <div class="form-group">
                <input v-model="quantity" @change="updateTotal" class="form-control" type="number" name="quantities[]" min="0"
                    style="width:85px;">
            </div>
        </td>

        <td>
            {{ price }}
            <input type="hidden" name="amounts[]" :value="price">
        </td>
        <td>{{ total | twoDecimals }}</td>

    </tr>
</template>

<script>
export default {
    data() {
        return {
            product: {},
            quantity: 0,
            total: 0,
            price: 0,
            type: 'unisize',
        };
    },
    props: ['num', 'products'],
    methods: {
        updateTotal() {
            if (this.product.id > 0) {
                this.total = this.product.public * this.quantity;
            }
            this.$emit('subtotal', this.total, this.num);
        }
    },
    watch: {
        product: function (val, oldVal) {
            this.price = this.product.public;
            this.type = this.product.type;
        },
    },
    filters: {
      twoDecimals: function (value) {
        return value.toFixed(2);
      }
    },
};
</script>
