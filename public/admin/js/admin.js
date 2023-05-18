
const menuIcon = $("#admin #right .topnav .left .menu-icon .material-symbols-outlined");
const backdrop = $("#admin #right .backdrop");

menuIcon.click(function () {
    sidebarAction();
});
backdrop.click(function () {
    sidebarAction();
});

function sidebarAction() {
    $("#admin #sidebar").toggleClass('ml-250');
    $('#admin #right').toggleClass('tsx-265');
    $('#admin #right .backdrop').toggleClass('overlay');
}
function adminSidebar() {
    let width = $(window).width();
    if (width > 991) {
        $("#admin #sidebar").removeClass('ml-250');
        $('#admin #right').addClass('tsx-265');
        $('#admin #right .backdrop').addClass('overlay');
    } else {
        $("#admin #sidebar").addClass('ml-250');
        $('#admin #right').removeClass('tsx-265');
        $('#admin #right .backdrop').removeClass('overlay');
    }
    console.log(width);
}
adminSidebar();

$(window).resize(function () {
    adminSidebar();
});