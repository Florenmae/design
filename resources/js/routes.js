import App from "@/Component/App.vue";
import Pos from "@/Component/PosComp/Pos.vue";

import userHome from "@/Component/userHome.vue";

export const routes = [
    {
        path: "/home",
        name: "home",
        component: App,
    },
    {
        path: "/pos",
        name: "pos",
        component: Pos,
    },
];
