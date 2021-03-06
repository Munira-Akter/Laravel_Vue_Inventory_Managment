let login = require("./components/auth/login.vue").default;
let register = require("./components/auth/register.vue").default;
let forget = require("./components/auth/forget_password.vue").default;
let home = require("./components/home.vue").default;
let logout = require("./components/auth/logout.vue").default;
let employee = require("./components/user/employee.vue").default;
let employeeedit = require("./components/user/employee_edit.vue").default;
let supplier = require("./components/user/supplier.vue").default;
let supplieredit = require("./components/user/supplier_edit.vue").default;
let category = require("./components/feature/category.vue").default;
let categoryupdate = require("./components/feature/category_edit.vue").default;
let product = require("./components/product/product.vue").default;
let productedit = require("./components/product/product_edit.vue").default;

export const routes = [
    { path: "/supplier", component: supplier, name: "/supplier" },
    { path: "/", component: home, name: "/" },
    { path: "/register", component: register, name: "/register" },
    { path: "/login", component: login, name: "/login" },
    { path: "/forget-password", component: forget, name: "/forget" },
    { path: "/logout", component: logout, name: "/logout" },
    { path: "/employee", component: employee, name: "/employee" },
    {
        path: "/employee-edit/:id",
        component: employeeedit,
        name: "/employee-edit"
    },

    {
        path: "/supplier-edit/:id",
        component: supplieredit,
        name: "/supplier-edit"
    },

    { path: "/category", component: category, name: "/category" },

    {
        path: "/category-update/:id",
        component: categoryupdate,
        name: "/category-update"
    },

    {
        path: "/product",
        component: product,
        name: "/product"
    },

    {path:"/productedit/:id",component:productedit,name:'/productedit'},
];