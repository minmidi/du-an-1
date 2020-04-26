/* 
    Dantri Website admin teamplate JS 
    Author: Le Truong Giang
    Date: 08/03/2020
    Last Modified Date: None
*/


/* 
TABLE OF CONTENT 

*/

$(document).ready(function() {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#sidebarCollapse').on('click', function() {
        $('#sidebar, #content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});