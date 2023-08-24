const { createApp } = Vue;

createApp({
    data() {
        return {
            disc: [],
            albumInfo: ''
        }
    },
    created() {
        axios
            .get('http://localhost/php-dischi-json/api.php', {
            })
            .then(res => {
                this.disc = res.data;
            });
    },
    methods: {
        albumInfos(i) {
            axios
                .get('http://localhost/php-dischi-json/api.php', {
                })
                .then(res => {
                    this.albumInfo = res.data[i];
                    console.log(this.albumInfo)
                });
        },
        albumInfosReset() {
            this.albumInfo = ''
        }
    }
}).mount('#app');