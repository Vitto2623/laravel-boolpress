<template>
    <div class="container-fluid">
        <div class="row">
            <Post v-for="(post, index) in posts" :key="index" :post="post"/>
        </div>
    </div>
</template>

<script>
import Post from './Post.vue'

export default {
    name: 'PostList',

    components: {
        Post,
    },

    data(){
        return{
            posts: []
        }
    },

    methods:{
        getPost(){
            axios.get('http://localhost:8000/api/test')
            .then((result)=>{
                console.log(result.data.results);
                this.posts = result.data.results;
                console.log(this.posts)
            })
            .catch((error)=>{
                console.warn(error);
            });
        }
    },

    created(){
        this.getPost();
    }
}
</script>

<style>

</style>