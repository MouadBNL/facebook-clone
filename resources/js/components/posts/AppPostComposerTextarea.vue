<template>
    <textarea
        class="appearance-none resize-none focus:outline-none w-full text-xl"
        autofocus
        cols="30" rows="1"
        placeholder="What's on your mind?"
        @input="$emit('input', $event.target.value); resize($event)"
        :value="value"
        >
        </textarea>
</template>

<script>
export default {
    props: {
        value: {
            required: false
        }
    },
    methods:{
        resize(e) {
            e.target.style.height = 'auto'
            e.target.style.height = `${e.target.scrollHeight}px`
        }
    }
}
</script>