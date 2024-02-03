<!-- layout.vue -->

<template>
    <div class="flex flex-col h-screen border-gray-300">
        <!-- Header Section -->
        <header
            class="bg-slate-500 text-black p-4 border-b border-gray-300 flex justify-between items-center"
        >
            <!-- Your header content goes here -->
            <div class="flex items-center space-x-4">
                <img
                    src="../../../public/mmsu_logo.png"
                    alt=""
                    class="w-10 h-10"
                />
                <h1 class="text-lg mr-4">Point of Sale System</h1>
                <div
                    class="sm:border-b-0 sm:border-r border-gray-400 h-8 mr-6"
                ></div>
                <div class="relative rounded-full bg-gray-200">
                    <input
                        type="text"
                        placeholder="Search..."
                        class="p-1 pl-10 bg-transparent outline-none rounded-full"
                    />
                    <svg
                        class="absolute left-4 top-2 text-gray-600"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M21 21l-5.2-5.2"
                        ></path>
                        <circle cx="10" cy="10" r="8"></circle>
                    </svg>
                </div>
            </div>

            <!-- Cart and Dropdown Profile -->
            <div class="flex items-center space-x-4">
                <!-- Cart Icon -->
                <button class="text-black flex items-center space-x-4">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        fill="currentColor"
                        class="bi bi-cart"
                        viewBox="0 0 20 20"
                    >
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                        />
                    </svg>
                </button>

                <!-- Dropdown Profile -->
                <div class="relative group">
                    <button class="text-black flex items-center space-x-2">
                        <img
                            src="../../../public/user.webp"
                            alt=""
                            class="w-10 h-10"
                            @click="handleProfileClick"
                        />
                    </button>
                    <div
                        class="absolute right-0 mt-2 hidden group-hover:block bg-white rounded-md shadow-md"
                    >
                        <a
                            href="#"
                            class="block px-4 py-2 text-gray-800 hover:bg-gray-200"
                        >
                            Profile
                        </a>
                        <a
                            href="#"
                            class="block px-4 py-2 text-gray-800 hover:bg-gray-200"
                        >
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 flex">
            <!-- <aside class="w-48 bg-gray-50 text-white p-4">
                <nav>
                    <ul>
                        <li>
                            <router-link to="/home" class="text-black"
                                >Home</router-link
                            >
                        </li>
                        <li>
                            <router-link to="/sales" class="text-black"
                                >Sales</router-link
                            >
                        </li>
                    </ul>
                </nav>
            </aside> -->

            <section class="flex-1 p-4">
                <slot></slot>
            </section>
        </main>
    </div>
    <!-- <div class="fixed w-screen ml-64 h-10 shadow-md"></div>
    <div class="ml-64 px-10">
        <div class="flex flex-col items-center pb-20 pt-10 min-h-screen">
            <slot></slot>
        </div>
    </div> -->
</template>

<script>
export default {
    name: "PosLayout",
    methods: {
        handleProfileClick() {
            // Add your logic for handling the profile click event
            console.log("Profile clicked!");
        },
    },
};
</script>
