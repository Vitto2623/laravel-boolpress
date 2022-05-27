<template>
    <div class="col-3 d-flex justify-content-center align-items-center">
        <div class="card my-card" style="width: 18rem;">
            <img :src="post.image_url" class="card-img-top h-50" :alt="post.id">
            <div class="card-body">
                <h5 class="card-title">{{post.title}}</h5>
                <p class="card-text">{{post.content.substring(0,200)}}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Post',
    props: {
        post: Object
    }
}
</script>

<style lang="scss" scoped>

.my-card{
    margin: 2rem;
    width: 300px;
    height: 700px;
}

</style>