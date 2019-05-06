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
                            <th>Descuento</th>
                            <th>Total</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                {{ memberr.membership.name }} <br>
                                $ {{ (memberr.membership.amount).toFixed(2) }}
                            </td>
                            <td>{{ discount }}</td>
                            <td>$ {{ (payment.amount).toFixed(2) }}</td>
                            <td>{{ payment.date_start }}</td>
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
            payment: [],
            memberr: {},
        };
    },
    computed: {
        discount() {
            if (this.payment.discount_id) {
                return this.payment.discount.name + ' ($ ' + (this.payment.discount.amount).toFixed(2) + ')'
            }

            return '$ 0.00'
        }
    },
    created() {

        axios.get('/member/' + this.member).then(response => {
            this.memberr = response.data

            this.payment = this.memberr.payments[this.memberr.payments.length - 1]
        });
    }
};
</script>
