require("./bootstrap");
import Vue from "vue";
// Import vue router from node modules
import VueRouter from "vue-router";

// Use Imported vue router
Vue.use(VueRouter);

// Import custom routers.js file
import { routes } from "./routes";

const router = new VueRouter({
    routes,
    mode: "history"
});

// import sweat alert
import Swal from "sweetalert2";
window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: toast => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    }
});

window.Toast = Toast;

// import User.js Helper as global
import User from "./Helper/User";
window.User = User;

// Import Notification js file for Noty
import Notification from "./Helper/Notification";
window.Notification = Notification;

const app = new Vue({
    el: "#app",
    router
});