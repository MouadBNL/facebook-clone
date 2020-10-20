<template>
    <ul class="flex">
        <app-like-action :post="post"/>
        <app-repost-action :post="post"/>
        <app-comment-action :post="post"/>
    </ul>
</template>

<script>
export default {
    props: {
        post: {
            required: true,
            type: Object
        }
    }
}
</script>