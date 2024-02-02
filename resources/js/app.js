import "./bootstrap";
import { createApp } from "vue/dist/vue.esm-bundler";
import App from "@/Component/App.vue";

import Product from "@/Component/ProdComp/Product.vue";

import Category from "@/Component/ProdComp/Category.vue";

import Pos from "@/Component/PosComp/Pos.vue";

import userHome from "@/Component/userHome.vue";
import { createRouter, createWebHistory } from "vue-router";
import { routes } from "./routes";

import Layout from "@/Layout/Layout.vue";

import PosLayout from "@/Layout/PosLayout.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});
const app = createApp({});

app.use(router);

app.component("app", App);

app.component("product", Product);

app.component("category", Category);

app.component("pos", Pos);

app.component("Layout", Layout);

app.component("posLayout", PosLayout);

app.mount("#app");
