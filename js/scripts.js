const { createApp } = Vue;

createApp({
    data() {
        return {
            message: 'Hello Vue!',
            disc: []
        }
    },
    created() {
        axios
            .get('http://localhost/php-dischi-json/api.php', {
            })
            .then(res => {
                this.disc = res.data;
            });
    }
}).mount('#app');