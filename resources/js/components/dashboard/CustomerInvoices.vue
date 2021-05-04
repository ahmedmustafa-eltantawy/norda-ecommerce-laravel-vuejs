<template>
    <div class="col-md-3">
        <customer-invoice></customer-invoice>
    </div>
</template>

<script>
import axios from "axios";
import CustomerInvoice from "./CustomerInvoice.vue";
export default {
    name: "CustomerInvoices",
    components: {
        CustomerInvoice
    },
    data() {
        return {};
    },
    methods: {
        loadCustomerInvoices() {
            axios
                .get("http://127.0.0.1:8000/api/v1/customer/invoices")
                .then(res => {
                    console.log(res);
                })
                .catch(err => {
                    console.log(err);
                });
        }
    },

    mounted() {
        this.loadCustomerInvoices();
    }
};
</script>
