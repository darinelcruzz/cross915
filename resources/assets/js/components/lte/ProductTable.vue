<template lang="html">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>P. Unitario</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>
                <prow :num="1" :products="products"></prow>
                <prow :num="2" :products="products"></prow>
                <prow :num="3" :products="products"></prow>
                <prow :num="4" :products="products"></prow>
                <prow :num="5" :products="products"></prow>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            products: [],
        };
    },
    created() {
        axios.get('/products').then(response => {
            this.products = response.data;
        });
    }
}
</script>
