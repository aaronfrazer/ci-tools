/**
 * Created by andrewfrazer on 6/12/16.
 */
$(document).ready(function() {
    
    $('#submit').click(function () {
        
        var url = $('#url').val();
        
        var feed =  '<a class="twitter-timeline" href="https://twitter.com/'+url+'"></a>' +
                    '<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>';
        
        $('#feed').html(feed);
        
    });
    
});