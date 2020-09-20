<template>
    <div>

        <app-post-composer/>

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
import { mapGetters, mapActions, mapMutations } from 'vuex'

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
            lastPage: 'timeline/lastPage',
            userID: 'auth/id'
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
        }),
        ...mapMutations({
            CREATE_POST: 'timeline/CREATE_POST'
        })
    },
    mounted() {
        this.getPosts(this.page)

        Echo.private('timeline.' + this.userID)
            .listen('.PostWasCreated', (e) => {
                this.CREATE_POST(e)
            })
    }
}
</script>