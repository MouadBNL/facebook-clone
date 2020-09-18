<template>
    <div>
        <app-post
            v-for="post in posts" :key="post.id"
            :post="post"
        />
    </div>
</template>

<script>
import axios from 'axios'
import { mapGetters, mapActions } from 'vuex'

export default {
    computed: {
        ...mapGetters({
            posts: 'timeline/posts'
        })
    },
    methods: {
        ...mapActions({
            getPosts: 'timeline/getPosts'
        })
    },
    mounted() {
        this.getPosts()
    }
}
</script>