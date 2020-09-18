<template>
    <section class="shadow-md w-full bg-white rounded p-3 my-5">
        <form class="w-full flex">
            <div class="mr-4 flex flex-col justify-items-end">
                <img class="rounded-full h-10 w-10 object-cover mb-2" v-bind:src="userAvatar" alt="profile">
            </div>
            <textarea class="appearance-none focus:outline-none w-full text-xl" cols="30" rows="3" placeholder="What's on your mind?"></textarea>
        </form>
        <div class="flex justify-end my-2">
                <i class="w-7 h-7 mx-4 text-gray-500 mt-auto" data-feather="image">image</i>
                <i class="w-7 h-7 mx-4 text-gray-500" data-feather="smile">smile</i>
                <i class="w-7 h-7 mx-4 text-gray-500" data-feather="send">send</i>
        </div>
    </section>
</template>

<script>
import { mapGetters } from 'vuex'
export default {
    computed: {
        ...mapGetters({
            userAvatar: 'auth/avatar'
        })
    }
}
</script>

<style>

</style>