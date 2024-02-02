<!-- resources/views/components/PosLayout.vue -->

<template>
    <div class="flex flex-col min-h-screen">
        <!-- Header -->
        <header
            class="bg-slate-500 text-black p-4 pr-8 pl-8 flex items-center justify-between"
        >
            <!-- Logo -->
            <img src="../../../public/mmsu_logo.png" alt="" class="w-21 h-11" />

            <!-- Heading -->

            <div class="flex items-center space-x-4 ml-auto">
                <!-- Search Bar -->
                <div class="flex items-center space-x-4">
                    <input
                        type="text"
                        placeholder="Search..."
                        class="border-2 border-gray-300 px-2 py-1 rounded"
                    />
                    <button class="text-black hover:text-gray-300">
                        <svg
                            class="h-6 w-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M21 21l-4-4"
                            ></path>
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0z"
                            ></path>
                        </svg>
                    </button>
                </div>

                <!-- Cart Icon -->
                <button class="text-black hover:text-gray-300">
                    <svg
                        class="h-6 w-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2.586a1 1 0 0 1-.293.707l-6.414 6.414a2 2 0 0 1-2.828 0L5.293 8.293a1 1 0 0 1-.293-.707V4zM5 21a1 1 0 0 1-1-1 5 5 0 0 1 10 0 1 1 0 0 1-2 0 3 3 0 0 0-6 0 1 1 0 0 1-2 0 1 1 0 0 1-1 1z"
                        ></path>
                    </svg>
                </button>


                <!-- Exit Button with Logout Icon -->
                <button @click="exit" class="text-black hover:text-gray-300">
                    <svg
                        class="h-6 w-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                        ></path>
                    </svg>
                </button>
            </div>
        </header>
    </div>
</template>

<script>
export default {
    name: "PosLayout",
    methods: {
        exit() {
            this.$router.push("/home");
        },
    },
};
</script>

<style scoped>
/* Add scoped styles specific to PosLayout.vue */
</style>
