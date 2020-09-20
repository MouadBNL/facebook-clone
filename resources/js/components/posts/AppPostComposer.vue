<template>
    <section class="shadow-md w-full bg-white rounded p-3 my-5">
        <form class="w-full" @submit.prevent="submitPost">
            <div class="flex">
                <div class="mr-4 flex flex-col justify-items-end">
                    <img class="rounded-full h-10 w-10 object-cover mb-2" v-bind:src="userAvatar" alt="profile">
                </div>
                <textarea v-model="form.body" class="appearance-none focus:outline-none w-full text-xl" cols="30" rows="3" placeholder="What's on your mind?"></textarea>
            </div>
            <div class="flex justify-end my-2">
                    <i class="w-7 h-7 mx-4 text-gray-500 mt-auto" data-feather="image">image</i>
                    <i class="w-7 h-7 mx-4 text-gray-500" data-feather="smile">smile</i>
                    <button class="px-3 py-1 mx-4 w-7 bg-blue-600 rounded-full" type="submit">
                        <i class="text-gray-100" data-feather="send">send</i>
                    </button>
            </div>
        </form>
    </section>
</template>

<script>
import axios from 'axios'
import { mapGetters } from 'vuex'
export default {
    data() {
        return {
            form: {
                body: ''
            }
        }
    },
    computed: {
        ...mapGetters({
            userAvatar: 'auth/avatar'
        })
    },
    methods: {
        submitPost() {
            axios.post('/api/posts',{
                body: this.form.body
            })
            .then(res => {
                //console.log(res)
                if(res.status == 200) this.form.body = '';
            })
            .catch(err => {
                console.error(err.res); 
            })
        }
    }
}
</script>

<style>

</style>