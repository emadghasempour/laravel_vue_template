import {defineStore} from "pinia";

const store = defineStore("footprint", {
        state: () => ({count: 3}),
        getters: {
            doubleData: (state) => state.count * 2
        },

        actions: {
            increment() {
                this.count += 1;
            }
        }
    }
)

export const useFootprintStore = store;
