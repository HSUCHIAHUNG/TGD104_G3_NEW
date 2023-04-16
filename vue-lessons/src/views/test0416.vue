
<template>

    <p>{{TGD104('班代')}}</p>
    <p>{{calculate}}</p>
    <p>{{message}} Your score is {{score * 0.85}}.</p>

</template>

<script>
export default {
  
    name: 'test0416',
    data() {
        return {
            message: 'Hello Vue!',
            score: 100,
        }
    },

    beforeCreate() {
        console.log(this.message);
    },

    created() {
        console.log(this.message);
    },

    methods: {
        TGD104(member){
            return `TGD104 member: ${member}`
        }
    },

    computed: {
        calculate(){
            return 100
        },
        today(){
            return 200
        },
    },

}
</script>
