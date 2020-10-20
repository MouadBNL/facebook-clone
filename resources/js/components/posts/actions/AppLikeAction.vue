<template>
    <li class="mr-4 text-gray-800 hover:bg-opacity-25 py-1 px-4 rounded-full hover:bg-gray-400 transition duration-150 ease-in-out flex items-center">
        <heart-icon size="1.2x"></heart-icon> <span class="mr-1 ml-4">0</span>
    </li>
</template>

<script>
import { HeartIcon  } from 'vue-feather-icons'

export default {
    components: { HeartIcon },
}
</script>