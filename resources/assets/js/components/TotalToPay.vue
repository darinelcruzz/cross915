<template lang="html">
    <div>
        <h3 class="pull-right"><strong>$ {{ total }}.00</strong></h3>
        <input type="hidden" name="amount" :value="total">
    </div>
</template>

<script>
export default {
    props: ['membership', 'discount'],
    data() {
        return {
            memberships: [],
            discounts: [],
            membership_value: 0,
            discount_value: 0,
        };
    },
    computed: {
        total() {
          return this.membership_value - this.discount_value;
        }
    },
    watch: {
        membership: function (val) {
            this.membership_value = this.memberships[val].amount;
        },
        discount: function (val) {
            this.discount_value = this.discounts[val].amount;
        }
    },
    created() {
        axios.get('/memberships').then(response => {
            this.memberships = response.data;
        });
        axios.get('/discounts').then(response => {
            this.discounts = response.data;
        });
    }
}
</script>
