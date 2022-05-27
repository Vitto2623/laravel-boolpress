<template>
    <div>
        <Nav />
        <Main/>
    </div>
</template>

<script>

import Main from '../components/Main.vue'
import Nav from '../components/Nav.vue'
export default {
    name: 'App',

    components: {
        Main,
        Nav
    }
}
</script>

<style>

</style>