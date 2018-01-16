<template lang="html">
    <div>
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Último pago</h3>
            </div>

            <div class="box-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Membresía</th>
                            <th>Monto</th>
                            <th>Descuento</th>
                            <th>A partir de</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{ memberships[payments[member].membership_id].name }}</td>
                            <td>$ {{ payments[member].amount }}.00</td>
                            <td>{{ payments[member].discount_id ? discounts[payments[member].discount_id].name : 'N/A' }} ($ {{  payments[member].discount_id ? discounts[payments[member].discount_id].amount: '0' }}.00)</td>
                            <td>{{ payments[member].date_start }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['member'],
    data() {
        return {
            memberships: [],
            discounts: [],
            payments: [],
        };
    },
    created() {
        axios.get('/memberships').then(response => {
            this.memberships = response.data;
        });

        axios.get('/discounts').then(response => {
            this.discounts = response.data;
        });

        axios.get('/payments').then(response => {
            this.payments = response.data;
        });
    }
}
</script>
