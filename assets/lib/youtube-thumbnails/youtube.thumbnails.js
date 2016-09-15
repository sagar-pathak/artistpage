function loadThumbNails(){
   var ytl, yti, title;
   var vidList = ['latest_vid1', 'latest_vid2', 'latest_vid3'];
   $.each(vidList, function(index, id){
   		ytl = $("#"+id)[0].href;
   		title = $($("#"+id)[0]).attr('data-title');
   		yti = ytl.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);
   		$( "#"+id ).html( "<span><img src=\"http://i3.ytimg.com/vi/" + yti[1] + "/mqdefault.jpg\" class=\"image img-fluid img-thumbnail\" /><div class=\"vid-title\">"+title+"</div></span>" );
   });
};