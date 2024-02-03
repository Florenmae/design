<template>
    <posLayout>
        <div class="flex">
            <div class="flex-1.4 p-4">
                <h2 class="text-2xl font-semibold mb-4">Categories</h2>

                <div class="mb-4">
                    <h3 class="text-lg font-semibold">Category 1</h3>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Category 2</h3>
                </div>
            </div>
            <div class="flex-3 p-4">
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"
                >
                    <div
                        v-for="product in products"
                        :key="product.id"
                        class="p-4 border rounded-md"
                    >
                        <img
                            :src="product.image"
                            alt="Product Image"
                            class="w-full h-32 object-cover mb-2 rounded-md"
                        />
                        <h2 class="text-lg font-semibold">
                            {{ product.name }}
                        </h2>
                        <p class="text-gray-600">{{ product.description }}</p>
                        <div class="mt-2">
                            <span class="text-lg font-bold text-blue-500">{{
                                product.price
                            }}</span>
                            <button
                                @click="addToCart(product)"
                                class="ml-2 bg-green-500 text-white px-3 py-1 rounded-md"
                            >
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-1 p-4">
                <h2 class="text-2xl font-semibold mb-4">Shopping Cart</h2>
                <div v-if="cart.length === 0" class="text-gray-600">
                    Your cart is empty.
                </div>
                <div v-else>
                    <div
                        v-for="item in cart"
                        :key="item.id"
                        class="flex items-center justify-between p-2 border-b"
                    >
                        <div class="flex items-center space-x-2">
                            <img
                                :src="item.image"
                                alt="Product Image"
                                class="w-10 h-10 object-cover rounded-md"
                            />
                            <span>{{ item.name }}</span>
                        </div>
                        <span class="font-semibold">{{ item.price }}</span>
                    </div>
                    <div class="mt-4 text-right">
                        <!-- <span class="font-semibold"
                            >Total: {{ calculateTotal() }}</span
                        > -->
                        <button
                            @click="checkout"
                            class="ml-4 bg-green-500 text-white px-4 py-2 rounded-md"
                        >
                            Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </posLayout>
</template>

<script>
export default {
    data() {
        return {
            id: "",
            name: "",
            price: "",
            description: "",
            products: [],
            cart: [],
        };
    },
    methods: {
        addToCart(product) {
            console.log("Adding to Cart:", product);

            this.cart.push({
                id: product.id,
                name: product.name,
                price: product.price,
                image: product.image,
            });
            console.log("Cart:", this.cart);
        },
        calculateTotal() {
            // Calculate the total price of items in the shopping cart
            return this.cart
                .reduce(
                    (total, item) =>
                        total + parseFloat(item.price.replace("$", "")),
                    0
                )
                .toFixed(2);
        },

        checkout() {
            console.log("Checkout clicked. Implement your checkout logic.");
        },

        async fetchProducts() {
            try {
                const { data } = await axios.get("/get-products");
                this.products = data;
            } catch (error) {
                console.error("Error fetching products:", error);
            }
        },
    },
    mounted() {
        this.fetchProducts();
    },
};
</script>
