<template lang="html">
    <div>
        {{ memberships[mid].description }}<br>
        Visitas: {{ memberships[mid].visits > 0 ? memberships[mid].visits: ' Ilimitadas'}}<br>
        Meses: {{ memberships[mid].months }}
        <h3 class="pull-right"><strong>$ {{ memberships[mid].amount }}.00</strong></h3>
    </div>
</template>

<script>
export default {
    props: ['mid'],
    data() {
        return {
            memberships: []
        };
    },
    created() {
        axios.get('/memberships').then(response => {
            this.memberships = response.data;
        });
    }
}
</script>
