(function() {
    tinymce.create("tinymce.plugins.youtube_button_plugin", {

        init : function(ed, url) {

            //add new button     
            ed.addButton("youtube", {
                title : "Youtube Embed",
                cmd : "youtube_command",
                image : "https://cdn3.iconfinder.com/data/icons/free-social-icons/67/youtube_square_color-32.png"
            });

            //button functionality.
            ed.addCommand("youtube_command", function() {
                var id1 = prompt("Please enter your video id");
                //alert(id);
                if (id1 != null) 
                {
                        var test ='"'+id1+'"';
                	 var return_text = "[youtube id="+test+"][/youtube]";
                    ed.execCommand("mceInsertContent", 0, return_text);
                }
            });
        },

        createControl : function(n, cm) {
            return null;
        },

        getInfo : function() {
            return {
                longname : "Extra Buttons",
                author : "Narayan Prusty",
                version : "1"
            };
        }
    });

    tinymce.PluginManager.add("youtube_button_plugin", tinymce.plugins.youtube_button_plugin);
})();

window.addEventListener("load", function(){
    var v = document.getElementsByClassName("youtube-video");
    for (var n = 0; n < v.length; n++) {
        var p = document.createElement("div");
        p.innerHTML = '<img class="youtube-thumb" src="//i.ytimg.com/vi/' + v[n].dataset.id + '/maxresdefault.jpg"><div class="play-button"></div>';
        p.onclick = youtube_video_clicked;
        v[n].appendChild(p);
    }
}, false);
function youtube_video_clicked() {

    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&showinfo=0");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("class", "sqz-iframe");
     //iframe.setAttribute("controls", "1");
   
    this.parentNode.replaceChild(iframe, this);
}


