		$(document).ready(function($)
		{
			videoPlayer = $("#VideoPlayer").Video({ 
					{
				videos:[
				videoType:"HTML5",
				title:"HLS m3u8  video",
				url:"https://tv-trt1.medya.trt.com.tr/master.m3u8",
				mp4VideoThumbnails_img:"",
				imageUrl:"images/preview_images/poster2.jpg",	
					}
				]
			});
		});