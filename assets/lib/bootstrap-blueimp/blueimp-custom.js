
	$("#videos").on('click', function(event){
	    event = event || window.event;
	    var target = event.target || event.srcElement,
	        link = target.src ? target.parentNode : target,
	        options = {index: link, event: event},
	        links = this.getElementsByTagName('a');
	    blueimp.Gallery(links, options);
	});



/*

var options = {
    container: '#blueimp-gallery'
};

blueimp.Gallery([
    {
        title: 'A YouYube video',
        href: 'https://www.youtube.com/watch?v=8XlYXl111XI',
        type: 'text/html',
        youtube: '8XlYXl111XI',
        poster: 'https://img.youtube.com/vi/8XlYXl111XI/maxresdefault.jpg'
    },
    {
        title: 'Banana',
        href: 'https://example.org/images/banana.jpg',
        type: 'image/jpeg',
        thumbnail: 'https://example.org/thumbnails/banana.jpg'
    }
], options);

*/