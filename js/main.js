const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            diskArr: [],

        }
    },
    methods: {
        getDisks() {
            axios.get(this.apiUrl)
                .then(results => {
                    this.diskArr = results.data;
                    console.log(this.diskArr);
                })
        }

    },
    mounted() {
        this.getDisks();

    }
}).mount('#app');