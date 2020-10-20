<template>
    <li class="mr-4 text-gray-800 hover:bg-opacity-25 py-1 px-4 rounded-full hover:bg-gray-400 transition duration-150 ease-in-out flex items-center"
        :class="{
            'text-red-600 bg-red-200': liked
        }"
    >
        <heart-icon size="1.2x"></heart-icon> <span class="mr-1 ml-4">{{ post.likes_count }}</span>
    </li>
</template>

<script>
import { HeartIcon  } from 'vue-feather-icons'
import { mapGetters } from 'vuex'

export default {
    props: {
        post: {
            required: true,
            type: Object
        }
    },
    components: { HeartIcon },
    computed: {
        ...mapGetters({
            likes: 'likes/likes'
        }),
        liked () {
            return this.likes.includes(this.post.id)
        }
    }
}
</script>