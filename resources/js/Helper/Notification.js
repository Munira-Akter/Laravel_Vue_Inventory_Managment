class Notification {
    success(txt) {
        new Noty({
            type: "success",
            layout: "topRight",
            progressBar: true,
            text: txt
        }).show();
    }
}
export default Notification = new Notification();