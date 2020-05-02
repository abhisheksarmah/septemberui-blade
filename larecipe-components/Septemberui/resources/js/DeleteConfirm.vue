<template>
    <span :x-data="xdata" x-cloak>
        <button
            type="button"
            x-on:click="isOpen = !isOpen"
            class="inline-flex items-center"
            :class="cssClasses"
        >
            {{ link }}
        </button>
        <div
            style="background-color: rgba(0, 0, 0, 0.4)"
            class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full"
            x-show="isOpen"
            x-on:click.away="isOpen = false"
            x-transition:enter="ease-out transition-slow"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in transition-slow"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
        >
            <div
                class="p-4 max-w-xl mx-auto absolute left-0 right-0 overflow-hidden mt-24"
            >
                <form
                    ref="confirmForm"
                    method="POST"
                    :action="route"
                    v-on:submit.prevent="submit()"
                >
                    <card withFooter="true">
                        <input type="hidden" :name="idName" :value="id" />
                        <input type="hidden" name="_method" value="DELETE" />
                        <csrf></csrf>
                        <heading size="large">
                            {{ title }}
                        </heading>
                        <slot></slot>
                        <template v-slot:footer>
                            <div class="text-right">
                                <button
                                    type="button"
                                    x-on:click="isOpen = false"
                                    class="px-4 py-2 rounded-lg text-gray-600 bg-white hover:text-blue-600 shadow mr-2"
                                >
                                    Cancel
                                </button>
                                <button
                                    type="submit"
                                    name="deleteButton"
                                    ref="deleteButton"
                                    class="px-4 py-2 rounded-lg text-white bg-red-500 hover:bg-red-600 shadow"
                                >
                                    Confirm
                                </button>
                            </div>
                        </template>
                    </card>
                </form>
            </div>
        </div>
    </span>
</template>

<script>
import Card from "./Card";
import Heading from "./Heading";
import Csrf from "./Csrf";

export default {
    name: "DeleteConfirm",
    components: {
        Card,
        Heading,
        Csrf
    },
    props: {
        xdata: {
            type: String
        },
        type: {
            type: String,
            default: undefined
        },
        link: {
            type: String,
            default: "Delete"
        },
        title: {
            type: String,
            default: "Are your sure you want to delete?"
        },
        route: {
            type: String,
            default: "/confirm"
        },
        classes: {
            type: String,
            default: ""
        },
        idName: "asd",
        id: 1
    },
    data() {
        return {};
    },
    computed: {
        cssClasses() {
            return [
                {
                    "px-6 py-2 rounded-lg text-white bg-red-500 hover:bg-red-600":
                        this.type !== undefined,
                    "text-red-600 hover:text-red-700": this.type == undefined
                },
                this.classes
            ];
        }
    },
    methods: {
        submit() { 
            this.$refs.deleteButton.disabled = true;
            this.$refs.deleteButton.classList.add("base-spinner");
            this.$refs.confirmForm.submit();
        }
    }
};
</script>

<style></style>template
