<template>
    <div>
        <app-post
            v-for="post in posts" :key="post.id"
            :post="post"
        />
        <div v-if="posts.length"
            v-observe-visibility="{
                callback: loadMorePosts
            }"
        >

        </div>
    </div>
</template>

<script>
import axios from 'axios'
import { ObserveVisibility } from "vue-observe-visibility";
import { mapGetters, mapActions } from 'vuex'

export default {
    directives: {
        ObserveVisibility
    },
    data() {
        return {
            page: 1
        }
    },
    computed: {
        ...mapGetters({
            posts: 'timeline/posts',
            lastPage: 'timeline/lastPage'
        })
    },
    methods: {
        loadMorePosts(isVisible) {
            if(!isVisible) return;
            if(this.page >= this.lastPage) return;
            this.page++
            this.getPosts(this.page)
        },
        ...mapActions({
            getPosts: 'timeline/getPosts'
        })
    },
    mounted() {
        this.getPosts(this.page)
    }
}
</script>