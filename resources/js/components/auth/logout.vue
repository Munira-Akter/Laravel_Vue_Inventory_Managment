<template> </template>

<script>
export default {
    created() {
        localStorage.removeItem("access_token");
        localStorage.removeItem("name");
        // Toast.fire({
        //     icon: "info",
        //     title: "Sign out successfully"
        // });

        Notification.success("Logout succesfully!");

        this.$router.push({ name: "/login" });
    }
};
</script>

<style lang="scss" scoped></style>
