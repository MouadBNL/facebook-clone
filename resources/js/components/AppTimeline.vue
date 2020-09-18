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

export default {
    data() {
        return {
            posts: []
        }
    },
    async mounted() {
        let res  = await axios.get('/api/timeline')
        this.posts = res.data.data
    }
}
</script>