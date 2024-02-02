<template>
    <posLayout>

    </posLayout>
</template>

<script>
export default {
    data() {
        return {
            processing: false,
            allproduct: [],
            search: {
                query: "",
            },
            allcartproduct: [],
            sum: 0,
            order: {
                customername: "",
                customerphone: "",
            },
        };
    },
};
</script>
