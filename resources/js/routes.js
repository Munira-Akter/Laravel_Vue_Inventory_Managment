let login = require("./components/auth/login.vue").default;
let register = require("./components/auth/register.vue").default;
let forget = require("./components/auth/forget_password.vue").default;
let home = require("./components/home.vue").default;
let logout = require("./components/auth/logout.vue").default;
let employee = require("./components/user/employee.vue").default;
let employeeedit = require("./components/user/employee_edit.vue").default;

export const routes = [
    { path: "/", component: home, name: "/" },
    { path: "/register", component: register, name: "/register" },
    { path: "/login", component: login, name: "/login" },
    { path: "/forget-password", component: forget, name: "/forget" },
    { path: "/logout", component: logout, name: "/logout" },
    { path: "/employee", component: employee, name: "/employee" },
    { path: "/employee-edit", component: employeeedit, name: "/employee-edit" }
];