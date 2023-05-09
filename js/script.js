const { createApp } = Vue;

createApp({
    data() {
        return {
            dischi: [],
            apiURL: "http://localhost/boolean-php/php-dischi-json/server.php"
        }
    },
    mounted() {
        this.getDisks();
    },
    methods: {
        getDisks() {
            axios.get(this.apiURL).then((resp) => {
                this.dischi = resp.data.results;
            })
        }
    }
}).mount("#app");