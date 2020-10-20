<template>
    <li class="mr-4 text-gray-800 hover:bg-opacity-25 py-1 px-4 rounded-full hover:bg-gray-400 transition duration-150 ease-in-out flex items-center">
        <repeat-icon size="1.2x"></repeat-icon> <span class="mr-1 ml-4">0</span>
    </li>
</template>

<script>
import { RepeatIcon  } from 'vue-feather-icons'

export default {
    props: {
        post: {
            required: true,
            type: Object
        }
    },
    components: { RepeatIcon },
}
</script>