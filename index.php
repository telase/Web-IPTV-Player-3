<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="Lite Video Player"/>
	<meta property="og:title" content="Lite Video Player TeLaSe"/>
	<meta property="og:image" content="images/lite.png"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="initial-scale=1, maximum-scale=1 user-scalable=no" />
		
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/lite.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="css/lite-font-awesome.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" type="text/css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
	<script src="js/froogaloop.js" type="text/javascript"></script>
	<script src="js/jquery.scrollbar.js" type="text/javascript"></script> 
	<script src="js/screen.js"></script>
	<script src="js/vidsPlayer.js" type="text/javascript"></script>
	<script src="js/playlist.js" type="text/javascript"></script>

	<script type="text/javascript">
		$(document).ready(function($)
		{
			videoPlayer = $("#VideoPlayer").Video({   //ALL PLUGIN OPTIONS
				googleAnalyticsTrackingCode: "UA-87557318-1",//track video events using Google Analytics (how may times video is played, downloaded, etc.)
                instanceName:"player1",                      //name of the player instance
				instanceTheme:"dark",                        //choose video player theme: "dark", "light"
				autohideControls:5,                          //autohide HTML5 player controls
				hideControlsOnMouseOut:"No",                 //hide HTML5 player controls on mouse out of the player: "Yes","No"
				playerLayout: "fixedSize",                   //Select player layout: "fitToContainer" (responsive mode), "fixedSize" (fixed mode), "fitToBrowser" (fill the browser mode)
				videoPlayerWidth:1420,                       //fixed total player width (only for playerLayout: "fixedSize")
				videoPlayerHeight:680,                       //fixed total player height (only for playerLayout: "fixedSize")
				videoRatio: 16/9,                            //set your video ratio (calculate video width/video height)
                videoRatioStretch: false,                    //adjust video ratio for case when playlist is "opened" : true/false
				iOSPlaysinline: true,                        //on iOS device: play videos inline (like on desktop) or in Fullscreen by default: true/false
                floatPlayerOutsideViewport: false,           //show Sticky player if video player is not in viewport when scrolling through page
				pauseStickyOutsideViewport: false,           //pause sticky player if video player is not in viewport when scrolling through page
                lightBox:false,                              //lightbox mode :true/false
				lightBoxAutoplay: false,                     //autoplay video when lightbox opens: true/false
				lightBoxThumbnail:"images/preview_images/poster.jpg", //lightbox thumbnail image
				lightBoxThumbnailWidth: 400,                 //lightbox thumbnail image width
				lightBoxThumbnailHeight: 220,                //lightbox thumbnail image height
				lightBoxCloseOnOutsideClick: true,           //close lightbox when clicked outside of player area
				playlist:"Right playlist",                   //choose playlist type: "Right playlist", "Bottom playlist", "Off"
                playlistShowOnlyThumbnails:false,            //show thumbnails only in playlist
				playlistOrder:"",                            //choose order of videos in playlist, choose which videos will show ("0,1,2" will show first three videos from playlist)
                playlistScrollType:"light",                  //choose scrollbar type: "light","minimal","light-2","light-3","light-thick","light-thin","inset","inset-2","inset-3","rounded","rounded-dots","3d","dark","minimal-dark","dark-2","dark-3","dark-thick","dark-thin","inset-dark","inset-2-dark","inset-3-dark","rounded-dark","rounded-dots-dark","3d-dark","3d-thick-dark"
				playlistBehaviourOnPageload:"opened (default)",//choose playlist behaviour when webpage loads: "closed", "opened (default)" (not apply to Vimeo player)
				autoplay:true,                              //autoplay when webpage loads: true/false (youtube autoplay - not supported on mobile)
				colorAccent:"#767676",  
				vimeoColor:"00adef",
				youtubeControls:"custom controls",
				youtubeSkin:"dark",                          //default theme: light, dark
				youtubeColor:"red",                          //default controls bar color: red, white
				youtubeQuality:"default",                    //choose youtube quality: "small", "medium", "large", "hd720", "hd1080", "highres", "default"
				youtubeShowRelatedVideos:"Yes",				 //choose to show youtube related videos when video finish: "Yes", "No" (onFinish:"Stop video" needs to be enabled)
				videoPlayerShadow:"effect1",                 //choose player shadow:  "effect1" , "effect2", "effect3", "effect4", "effect5", "effect6", "off"
				loadRandomVideoOnStart:"No",                 //choose to load random video when webpage loads: "Yes", "No"
				shuffle:"No",				                 //choose to shuffle videos when playing one after another: "Yes", "No" (shuffle button enabled/disabled on start)
				posterImg:"images/preview_images/poster.jpg",           //player poster image  
				posterImgOnVideoFinish:"",                   //player poster image on video finish (if enabled onFinish:"Stop video")
				onFinish:"Play next video",                  //"Play next video","Restart video", "Stop video",
				nowPlayingText:"Yes",                        //enable disable now playing title: "Yes","No"
				HTML5VideoQuality:"HD",                      //choose HTML5 video quality (HD, SD)
                HTML5videoThumbnails: "vtt",                //select video thumbnails for HTML5 self hosted videos: "none", "vtt", "live"   "none"->disable thumbnails,"vtt"->show pre-made images at specified time intervals, "live"->thumbnails show in real-time captured from actual video.
                preloadSelfHosted:"none",                    //choose preload buffer for self hosted mp4 videos (video type HTML5): "none", "auto"
				rightClickMenu:true,                         //enable/disable right click over HTML5 player: true/false
				hideVideoSource:true,						 //option to hide self hosted video sources (to prevent users from download/steal your videos): true/false
				showAllControls:true,						 //enable/disable all HTML5 player controls: true/false
				allowSkipAd:true,                            //enable/disable "Skip advertisement" option: true/false
				showAdvertiserName:true,                     //enable/disable showing advertiser name and external clickable icon
                advertiserName:"TeLaSe",                    //your advertiser name/url
				rewindShow: "Yes", 							 //enable/disable rewind option: "Yes","No"
                qualityShow: "Yes",                          //enable/disable quality video option: "Yes","No"
				infoShow:"Yes",                              //enable/disable info option: "Yes","No"
				shareShow:"Yes",                             //enable/disable all share options: "Yes","No"
				facebookShow:"Yes",                          //enable/disable facebook option individually: "Yes","No"
				twitterShow:"Yes",                           //enable/disable twitter option individually: "Yes","No"
				facebookShareName:"Video Player",      //first parametar of facebook share in facebook feed dialog is title
				facebookShareLink:"",                         //second parametar of facebook share in facebook feed dialog is link below title
				facebookShareDescription:"lite Video Player is stunning, modern, responsive, fully customisable high-end video player for WordPress that support advertising and the most popular video platforms like YouTube, Vimeo or self-hosting videos (mp4).", //third parametar of facebook share in facebook feed dialog is description below link
				facebookSharePicture:"https://0.s3.envato.com/files/123866118/preview.jpg", //fourth parametar in facebook feed dialog is picture on left side
				twitterText:"",			                       //first parametar of twitter share in twitter feed dialog is text
				twitterLink:"",                                   //second parametar of twitter share in twitter feed dialog is link
				twitterHashtags:"",		                      //third parametar of twitter share in twitter feed dialog is hashtag
				twitterVia:"Creative media",				 //fourth parametar of twitter share in twitter feed dialog is via (@)
				logoShow:"Yes",                              //"Yes","No"
				logoClickable:"Yes",                         //"Yes","No"
				logoPath:"images/logo/logo.png",             //path to logo image
				logoGoToLink:"",                                //redirect to page when logo clicked
				logoPosition:"bottom-left",                  //choose logo position: "bottom-right","bottom-left"
				embedShow:"Yes",                             //enable/disable embed option: "Yes","No"
				embedCodeSrc:"www.yourwebsite.com/videoplayer/index.html", //path to your video player on server
				embedCodeW:"746",                            //embed player code width
				embedCodeH:"420",                            //embed player code height
				embedShareLink:"www.yourwebsite.com/videoplayer/index.html", //direct link to your site (or any other URL) you want to be "shared"
				showGlobalPrerollAds: false,                 //enable/disable 'global' ads and overwrite each individual ad in 'videos' :true/false
				globalPrerollAds: "url1;url2;url3;url4;url5",//set 'pool' of url's that are separated by ; (global prerolls will play randomly)
				globalPrerollAdsSkipTimer: 5,                //skip global advertisement seconds
				globalPrerollAdsGotoLink: "",//global advertisement goto link
				advertisementTitle:"Advertisement",          //translate "Advertisement" title to your language
                skipAdvertisementText:"Skip advertisement",  //translate "Skip advertisement" button to your language
				skipAdText:"You can skip this ad in",        //translate "You can skip this ad in" counter to your language
                mutedNotificationText:"Video has no sound",  //translate "Video has no sound" button to your language
				playBtnTooltipTxt:"Play",                    //translate "Play" to your language
				pauseBtnTooltipTxt:"Pause",                  //translate "Pause" to your language
				rewindBtnTooltipTxt:"Rewind",                //translate "Rewind" to your language
				downloadVideoBtnTooltipTxt:"Download video", //translate "Download video" to your language
				qualityBtnOpenedTooltipTxt:"Close settings", //translate "Close settings" to your language
				qualityBtnClosedTooltipTxt:"Settings",       //translate "Settings" to your language
				ccShowOnHTML5Videos: true,                   //enable/disable mp4 captions globally for all HTML5 videos
                ccShowOnVideoLoad: true,                     //enable/disable mp4 captions to display on HTML5 video load (if ccUrl is defined)
                ccBtnOpenedTooltipTxt:"Hide captions",       //translate "Hide captions" to your language
				ccBtnClosedTooltipTxt:"Show captions",       //translate "Show captions" to your language
                muteBtnTooltipTxt:"Mute",                    //translate "Mute" to your language
				unmuteBtnTooltipTxt:"Unmute",                //translate "Unmute" to your language
				fullscreenBtnTooltipTxt:"Fullscreen",        //translate "Fullscreen" to your language
				exitFullscreenBtnTooltipTxt:"Exit fullscreen",//translate "Exit fullscreen" to your language
				infoBtnTooltipTxt:"Show info",				 //translate "Show info" to your language
				embedBtnTooltipTxt:"Embed",                  //translate "Embed" to your language
				shareBtnTooltipTxt:"Share",                  //translate "Share" to your language
				volumeTooltipTxt:"Volume",                   //translate "Volume" to your language
				playlistBtnClosedTooltipTxt:"Show playlist", //translate "Show playlist" to your language
				playlistBtnOpenedTooltipTxt:"Hide playlist", //translate "Exit fullscreen" to your language
				facebookBtnTooltipTxt:"Share on Facebook",   //translate "Share on Facebook" to your language
				twitterBtnTooltipTxt:"Share on Twitter",     //translate "Share on Twitter" to your language
				lastBtnTooltipTxt:"Go to last video",        //translate "Go to last video" to your language
				firstBtnTooltipTxt:"Go to first video",      //translate "Go to first video" to your language
				nextBtnTooltipTxt:"Play next video",         //translate "Play next video" to your language
				previousBtnTooltipTxt:"Play previous video", //translate "Play previous video" to your language
				shuffleBtnOnTooltipTxt:"Shuffle on",         //translate "Shuffle on" to your language
				shuffleBtnOffTooltipTxt:"Shuffle off",       //translate "Shuffle off" to your language
				nowPlayingTooltipTxt:"NOW PLAYING",          //translate "NOW PLAYING" to your language
				embedWindowTitle1:"SHARE THIS PLAYER:",      //translate "SHARE THIS PLAYER:" to your language
				embedWindowTitle2:"EMBED THIS VIDEO IN YOUR SITE:",//translate "EMBED THIS VIDEO IN YOUR SITE:" to your language
				embedWindowTitle3:"SHARE CURRENT VIDEO:",    //translate "SHARE CURRENT VIDEO:" to your language
				copyTxt:"Copy",
				copiedTxt:"Copied!",
				youtubeAPIKey: "",                           //youtube API key is required if you use youtube channel/youtube playlist in Elite video player. Get key here (watch video): https://developers.google.com/youtube/v3/getting-started 
                youtubePlaylistID:"",                        //automatic youtube playlist ID (leave blank "" if you want to use manual playlist) PLuFX50GllfgP_mecAi4LV7cYva-WLVnaM
				youtubeChannelID:"",                         //automatic youtube channel ID (leave blank "" if you want to use manual playlist) UCHqaLr9a9M7g9QN6xem9HcQ
                youtubeChannelNumberOfVideos: "500",         //set number of videos to show from youtube channel ("" -> blank is unlimited, but you can set number -> 3, 5, 50...

				//manual playlist
				videos:[
					{
						videoType:"youtube",                                             //choose video type: "HTML5", "youtube", "vimeo", "image"
						title:"Youtube",                                                     
						youtubeID:"vfE5GXiVAho",                                                        
                        thumbImg:"images/thumbnail_images/indir.png",
						vimeoID:"119641053",                                                             
                        url:"",
                        mp4VideoThumbnails_vtt:"",                                      //mp4 thumbnails vtt file     
						thumbImg:"images/thumbnail_images/indir.png", 
                        ccUrl: "", //mp4 captions url
						enable_mp4_download:"yes",                                    //enable download button for self hosted videos: "yes","no"
						imageUrl:"",                                                            //display image instead of playing video
						imageTimer:4, 																	  //set time how long image will display
						prerollAD:"no",                                                                   //show pre-roll "yes","no"
						prerollGotoLink:"",                                                     //pre-roll goto link
						preroll_mp4:"",   //pre-roll video mp4 format
						prerollSkipTimer:5,
						midrollAD:"no",                                                          //show mid-roll "yes","no"
						midrollAD_displayTime:"00:10",                                  //show mid-roll at any custom time in format "minutes:seconds" ("00:00")
						midrollGotoLink:"",                                                    //mid-roll goto link
						midroll_mp4:"", //mid-roll video mp4 format
						midrollSkipTimer:5,	
						postrollAD:"no",                                                       //show post-roll "yes","no"
						postrollGotoLink:"",                                                  //post-roll goto link
						postroll_mp4:"",  //post-roll video mp4 format
						postrollSkipTimer:5,
						popupImg:"images/preview_images/popup.jpg",            //popup image URL
						popupAdShow:"no",                                                   //enable/disable popup image: "yes","no"
						popupAdStartTime:"00:03",                                         //time to show popup ad during playback
						popupAdEndTime:"00:07",                                          //time to hide popup ad during playback
						popupAdGoToLink:"",                                                 //re-direct to URL when popup ad clicked
						description:"TOP SONGS 2021",                                 //video description
						info:"TOP SONGS 2021"                                              //video info
					},
					{
						videoType:"vimeo",                                             //choose video type: "HTML5", "youtube", "vimeo", "image"
						title:"Vimeo Video",                                                     
						youtubeID:"vfE5GXiVAho",                                                        
                        thumbImg:"images/thumbnail_images/vimeo.jpg",
						vimeoID:"176894130",                                                             
                        url:"",
                        mp4VideoThumbnails_vtt:"",                                      //mp4 thumbnails vtt file     
                        ccUrl: "", //mp4 captions url
						enable_mp4_download:"yes",                                    //enable download button for self hosted videos: "yes","no"
						imageUrl:"",                                                            //display image instead of playing video
						imageTimer:4, 																	  //set time how long image will display
						prerollAD:"no",                                                                   //show pre-roll "yes","no"
						prerollGotoLink:"",                                                     //pre-roll goto link
						preroll_mp4:"",   //pre-roll video mp4 format
						prerollSkipTimer:5,
						midrollAD:"no",                                                          //show mid-roll "yes","no"
						midrollAD_displayTime:"00:10",                                  //show mid-roll at any custom time in format "minutes:seconds" ("00:00")
						midrollGotoLink:"",                                                    //mid-roll goto link
						midroll_mp4:"", //mid-roll video mp4 format
						midrollSkipTimer:5,	
						postrollAD:"no",                                                       //show post-roll "yes","no"
						postrollGotoLink:"",                                                  //post-roll goto link
						postroll_mp4:"",  //post-roll video mp4 format
						postrollSkipTimer:5,
						popupImg:"images/preview_images/popup.jpg",            //popup image URL
						popupAdShow:"no",                                                   //enable/disable popup image: "yes","no"
						popupAdStartTime:"00:03",                                         //time to show popup ad during playback
						popupAdEndTime:"00:07",                                          //time to hide popup ad during playback
						popupAdGoToLink:"",                                                 //re-direct to URL when popup ad clicked
						description:"Tom Rosenthal | Lead Me To You",                                 //video description
						info:"Official music video"                                              //video info
					},
					{
						videoType:"HTML5",
                       title:"TRT 1" ,
                       url:"https://tv-trt1.medya.trt.com.tr/master.m3u8",	
                       thumbImg:"https://trtkurumsal.trt.net.tr/Uploads/image/png/2021-02-03-17.55.58/7dea9fa085b6422cb263c3148cb247b7_wh80.png",		
                       mp4VideoThumbnails_vtt:"",
                        ccUrl: "",
						enable_mp4_download:"yes",
						imageTimer:4,
						prerollAD:"no",
						prerollGotoLink:"",
						preroll_mp4:"",
						prerollSkipTimer:5,
						midrollAD:"no",                                                                  
						midrollAD_displayTime:"00:10",                                                    
						midrollGotoLink:"",                                         
						midroll_mp4:"", 
						midrollSkipTimer:5,	
						postrollAD:"no",                                                                
						postrollGotoLink:"",                                        
						postroll_mp4:"",  
						postrollSkipTimer:5,
						popupImg:"",                        			  
						popupAdShow:"no",                                                                
						popupAdStartTime:"00:03",                                                         
						popupAdEndTime:"00:07",                                                          
						popupAdGoToLink:"",
						description:"General",
						info:"Turkey"
					},
					{
						videoType:"HTML5",
                       title:"ROUGE TV" ,
                       url:"https://edge7.vedge.infomaniak.com/livecast/rougetv.stream/playlist.m3u8",	
                       thumbImg:"images/thumbnail_images/rouge.jpg",		
                       mp4VideoThumbnails_vtt:"",
                        ccUrl: "",
						enable_mp4_download:"yes",
						imageTimer:4,
						prerollAD:"no",
						prerollGotoLink:"",
						preroll_mp4:"",
						prerollSkipTimer:5,
						midrollAD:"no",                                                                  
						midrollAD_displayTime:"00:10",                                                    
						midrollGotoLink:"",                                         
						midroll_mp4:"", 
						midrollSkipTimer:5,	
						postrollAD:"no",                                                                
						postrollGotoLink:"",                                        
						postroll_mp4:"",  
						postrollSkipTimer:5,
						popupImg:"",                        			  
						popupAdShow:"no",                                                                
						popupAdStartTime:"00:03",                                                         
						popupAdEndTime:"00:07",                                                          
						popupAdGoToLink:"",
						description:"General",
						info:""
					}
				]
			});
		});
</script>

</head>

	<body style="background-color:#999999; padding:0px; margin:0px;">	
		<div id="myDiv" style="position:relative; left:0px; top:0px;"></div>

	<!--example: fitToContainer-->
	<div id="container" style="position:absolute;width:100%;height:100%;background:#000000;left:0;top:0;">
	  <div id=VideoPlayer"></div>

	<!--example: fixedSize or fitToBrowser-->
	<<div id="VideoPlayer">	

</body>

</html>