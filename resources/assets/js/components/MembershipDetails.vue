<template lang="html">
    <div>
        {{ descriptions[mid].description }}<br>
        Visitas: {{ descriptions[mid].visits > 0 ? descriptions[mid].visits: ' Ilimitadas'}}<br>
        Meses: {{ descriptions[mid].months }}
        <h3 class="pull-right"><strong>$ {{ descriptions[mid].amount }}.00</strong></h3>
    </div>
</template>

<script>
export default {
    props: ['mid'],
    data() {
        return {
            descriptions: []
        };
    },
    created() {
        axios.get('/descriptions').then(response => {
            this.descriptions = response.data;
        });
    }
}
</script>

<style lang="css">
</style>
