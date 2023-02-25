<template>
    <h1>Hello Buddy Ali {{ doubledData }}</h1>
    <button @click="increment">Increment</button>
</template>

<script>
import {useFootprintStore} from "../store";

export default {
    name: "Home",

    setup() {
        const footprintStore = useFootprintStore();

        return {footprintStore}
    },
    computed: {
        doubledData() {
            return this.footprintStore.doubleData
        }
    },

    methods: {
        increment() {
            this.footprintStore.increment();
        }
    }
}

</script>

<style scoped>

</style>
