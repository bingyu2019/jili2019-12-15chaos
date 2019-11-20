<template>
    <button type="button" class="btn btn-default btn-xs text-white-50" @mouseover="notice">【公告】{{ msg }}</button>
</template>
<script>
    export default {
        data(){
            return{
                msg: '本站部份图片选自网络，如有侵权，请到【灵魂服务】留言署名或删除！！！'
            }
        },
        // 这里大部分语法都是 zou cli的，很多都是以对象的方式
        methods: {
            notice() {
                setInterval(() => {
                    let start = this.msg.substring(0, 1);
                    // notice()
                    let end = this.msg.substring(1);
                    this.msg = end + start
                }, 600)
            }
        }
    }
</script>
