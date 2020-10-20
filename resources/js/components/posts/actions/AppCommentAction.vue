<template>
    <li class="mr-4 text-gray-800 hover:bg-opacity-25 py-1 px-4 rounded-full hover:bg-gray-400 transition duration-150 ease-in-out flex items-center">
        <message-square-icon size="1.2x"></message-square-icon> <span class="mr-1 ml-4">0</span>
    </li>
</template>

<script>
import { MessageSquareIcon  } from 'vue-feather-icons'

export default {
    props: {
        post: {
            required: true,
            type: Object
        }
    },
    components: { MessageSquareIcon },
}
</script>