<template>
    <div class="flex items-center">
        <img class="rounded-full h-10 w-10 object-cover mr-2" v-bind:src="user.avatar" alt="profile">
        <a href="#" class="block font-bold">{{ user.name }} <span class="text-gray-500 font-normal">@{{ user.username }}</span></a>
    </div>
</template>

<script>
export default {
props: {
    user: {
        required: true,
        type: Object
    }
}
}
</script>