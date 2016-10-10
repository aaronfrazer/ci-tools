/**
 * Created by andrewfrazer on 6/12/16.
 */

$(document).ready(function() {
    $(".toggle").click(function () {
        if ($(this).next().is(":hidden")) {
            $(this).next().slideDown("fast"); // slide it down fast
        } else {
            $(this).next().hide(); // hide it
        }

    });
});