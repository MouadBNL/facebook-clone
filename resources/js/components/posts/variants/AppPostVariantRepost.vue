<template>
    <div>
        <header class="mb-4">
            <app-post-username
                :user="post.user"
            />
            <p v-if="post.created_at" class="text-xs font-semibold text-gray-600">
                {{ post.created_at | moment("dddd, MMMM Do YYYY") }} :
                <span class="text-gray-700">reposted <repeat-icon size="13" class="inline"></repeat-icon></span>
            </p>
        </header>
        <section>
            <p class="mb-2">
                {{ post.body }}
            </p>

            <component class="border-solid border rounded border-gray-300 m-1 ml-8 p-2"
                :is="`app-post-variant-${post.original_post.type}`"
                :post="post.original_post"
            />

        </section>
    </div>
</template>

<script>
import { RepeatIcon } from 'vue-feather-icons'

export default {
    components: {RepeatIcon},
    props: {
        post: {
            required: true,
            type: Object
        }
    }
}
</script>