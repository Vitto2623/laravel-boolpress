<template>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-12">
                <nav class="d-flex justify-content-center align-items-center m-4">
                    <router-link :to="{name: 'about-us'}" class="home-link"><h4 class=" me-5">About us</h4></router-link>
                    <router-link :to="{name: 'post-list'}" class="home-link"><h4>Lista dei post</h4></router-link>
                </nav>
            </div>
        </div>
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