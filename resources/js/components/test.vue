<template>
    <div v-html="text"></div>
</template>
<script>
    export default {
        data() {
            return {

            }
        },
        props: ['text'],
        created() {
            let arr = this.text ? this.text : '123';
            console.log(arr);
        }
    }
</script>
