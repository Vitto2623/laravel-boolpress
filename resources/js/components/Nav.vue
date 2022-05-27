<template>
    <div>
        <nav class="d-flex justify-content-center align-items-center">
            <router-link :to="{name: 'about-us'}" class="home-link"><h2 class=" me-5">About us</h2></router-link>
            <router-link :to="{name: 'post-list'}" class="home-link"><h2>Lista dei post</h2></router-link>
        </nav>
    </div>
</template>

<script>
export default {
    name: 'Nav'
}
</script>

<style lang="scss" scoped>

nav{
    height: 50px;
    width: 100%;
    background-color: rgb(50, 192, 240);
    box-shadow: 5px 10px 90px #0625ed;
    border-radius: 10px;
    .home-link{
        color: blue;
        text-decoration: none;
    }
}

</style>