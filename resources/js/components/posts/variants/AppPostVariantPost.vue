<template>
    <div>
        <header class="mb-4 ml-2">
            <app-post-username
                :user="post.user"
            />
            <p v-if="post.created_at" class="text-xs font-semibold text-gray-600">{{ post.created_at | moment("dddd, MMMM Do YYYY") }}</p>
        </header>
        <section class="ml-2">
            <p class="mb-2">
                {{ post.body }}
            </p>
            <!-- <div class="flex flex-auto items-start max-w-full">
                <img class="w-1/4 object-contain rounded m-1" src="/images/lerone-pieters-FFfrL2bJCUs-unsplash.jpg">
                <img class="w-1/4 object-contain rounded m-1" src="/images/romain-tordo-pqbh-KsIxoE-unsplash.jpg">
                <img class="w-1/4 object-contain rounded m-1" src="/images/the-blowup-Gyv_mXDbO70-unsplash.jpg">
            </div> -->
        </section>
        <ul class="flex">
            <li class="mr-4 text-gray-800 hover:bg-opacity-25 p-2 rounded-full hover:bg-gray-400 transition duration-150 ease-in-out">
                <heart-icon size="1.2x"></heart-icon>
            </li>
            <li class="mr-4 text-gray-800 hover:bg-opacity-25 p-2 rounded-full hover:bg-gray-400 transition duration-150 ease-in-out">
                <repeat-icon size="1.2x"></repeat-icon>
            </li>
            <li class="mr-4 text-gray-800 hover:bg-opacity-25 p-2 rounded-full hover:bg-gray-400 transition duration-150 ease-in-out">
                <message-square-icon size="1.2x"></message-square-icon>
            </li>
        </ul>
    </div>
</template>

<script>
import { RepeatIcon,MessageSquareIcon,HeartIcon  } from 'vue-feather-icons'

export default {
    components: { RepeatIcon,MessageSquareIcon,HeartIcon },
    props: {
        post: {
            required: true,
            type: Object
        }
    }
}
</script>