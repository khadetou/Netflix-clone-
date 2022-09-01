interface Window {
    volumeToggle: (button: any) => any;
    previewEnded: () => any;
}
window.volumeToggle = function (button: any) {
    let muted = $(".previewVideo").prop("muted");
    $(".previewVideo").prop("muted", !muted);

    $(button).find("i").toggleClass("fa-volume-mute");
    $(button).find("i").toggleClass("fa-volume-up");
};

window.previewEnded = function () {
    $(".previewVideo").toggle();
    $(".previewImage").toggle();
};
