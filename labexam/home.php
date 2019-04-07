<!DOCTYPE html>
<html>
<head>

 <script>
    try {
        window.wixBiSession = {
            initialTimestamp : Date.now(),
            viewerSessionId: 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c)
                    { var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8); return v.toString(16); }
            )
        };
        (new Image()).src = 'http://frog.wix.com/bt?src=29&evid=3&pn=1&et=1&v=3.0&vsi=' + wixBiSession.viewerSessionId +
                '&url=' + encodeURIComponent(location.href.replace(/^http(s)?:\/\/(www\.)?/, '')) +
                '&ts=0&c=' + wixBiSession.initialTimestamp;
    } catch (e){}
</script>    


                    <script type="text/javascript">
    var santaBase = '';
    var clientSideRender = true;

    (function prefetchPages() {
        'use strict';
        function prefetch(url){
            var r = new XMLHttpRequest();
            r.open('get', url, true);
            r.send();
        }
        try {
            var pageList = publicModel.pageList;
            if (pageList.masterPage){
                prefetch(pageList.masterPage[0]);
            }
            var hash = location.hash.split('/');
            var pageId = hash[1] || pageList.mainPageId;
            var pages = pageList.pages;
            for (var i = 0; i < pages.length; ++i){
                if (pages[i].pageId === pageId){
                    prefetch(pages[i].urls[0]);
                    break;
                }
            }
        } catch(e) {}
    })();
</script>
<script src="http://static.parastorage.com/services/third-party/requirejs/2.1.15/require.min.js"></script>
<script src="http://static.parastorage.com/services/santa-versions/1.166.0/main-r.js"></script>
<link rel="stylesheet" href="http://static.parastorage.com/services/santa-versions/1.166.0/viewer.css">
 </head>
<body>
<div id="SITE_CONTAINER"></div>   
<div comp="wysiwyg.viewer.components.WixAds" skin="wysiwyg.viewer.skins.wixadsskins.WixAdsWebSkin" id="wixFooter"></div>
</body>
</html>