<template>
    <div>
        <bannerComponent />
    </div>
</template>
<script>
import Axios from 'axios';
import bannerComponent from '../components/BannerComponent.vue'
export default {
    name: 'App',
    components: { bannerComponent },
    data() {
        return {
            posts: '',
            postResponse: '',
        }
    },
    mounted() {
        console.log('mounted');
        Axios.get('api/posts')
            .then((response) => {
                console.log(response);
                this.posts = response.data.data;
                this.postResponse = response.data;
            }).catch((e) => {
                console.log(e);
            })
    },
}
</script>