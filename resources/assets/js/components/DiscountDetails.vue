<template lang="html">
    <div>
        {{ discount[mid].description }}<br>
        <h3 class="pull-right"><strong>$ {{ discount[mid].amount }}.00</strong></h3>
    </div>
</template>

<script>
export default {
    props: ['mid'],
    data() {
        return {
            discount: []
        };
    },
    created() {
        axios.get('/discounts').then(response => {
            this.discount = response.data;
        });
    }
};
</script>
