<template>
    <article class="shadow-md w-full bg-white p-3 my-6">
        <component
            :is="`app-post-variant-${post.type}`"
            :post="post"
        />
    </article>
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