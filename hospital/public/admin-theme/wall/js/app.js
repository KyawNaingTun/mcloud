var form = { 
        post : {
            beforeSubmit:  showRequest,
            success:       showResponse,
            resetForm: true
          }
    }; 
$.fn.showLoader = function(){
	$(this).removeClass('hide');
}
$.fn.hideLoader = function(){
	$(this).addClass('hide');
}
$(document).ready(function(){
  $('.floader').showLoader();
  $('.facebook-share-box').ajaxForm(form.post); 
  $.get('wall.php',function(data){
    $('.wall').html(data);
    $('.floader').hideLoader();
  });
  $("#geocomplete").geocomplete({
    map: ".map_canvas",
    details: "form",
    types: ["geocode", "establishment"]
  }); 
  $('body').delegate('#shareType','click', function(e) { 
  	e.preventDefault();
    var positionArray = {};
    positionArray['status'] = 0;
    positionArray['photos'] = 80;
    positionArray['videos'] = 160;
    positionArray['location'] = 231;
    $('.video').hideLoader('hide');
    $('.image').hideLoader('hide');
     $('.place').hideLoader('hide');
    $('.shareType').val($(this).attr('class'));
  	$('.arrow').css("left", positionArray[$(this).attr('class')]);
    if($(this).attr('class') == 'videos') {
      $('.video').showLoader('hide');
      $('.image').hideLoader('hide');
      $('.place').hideLoader('hide');
    }
    if($(this).attr('class') == 'photos') {
      $('.video').hideLoader('hide');
      $('.image').showLoader('hide');
      $('.place').hideLoader('hide');
    }
    if($(this).attr('class') == 'location') {
      $('.video').hideLoader('hide');
      $('.image').hideLoader('hide');
      $('.place').showLoader('hide');
    }
  	return false;
  });
  $(window).scroll(function(){
    if  ($(window).scrollTop() == $(document).height() - $(window).height()){
       loadData();
    }
  });      
});
function showRequest(formData, jqForm, options) { 
    type = $('.shareType').val();

    for (var i=0; i < formData.length; i++) {
      if (!formData[i].value && formData[i].name == 'message') { 
          alert('Message could not be empty'); 
          return false; 
      }  
      if(type == 'photos') {
        var fileName = document.getElementById("image").value
        if (fileName == "") {
            alert("Browse to upload a valid File with png/jpg/gif extension");
            return false;
        }
        else if (fileName.split(".")[1].toUpperCase() == "PNG") {
        }
        else if (fileName.split(".")[1].toUpperCase() == "JPG") {
        }
        else if (fileName.split(".")[1].toUpperCase() == "JPEG") {
        }
        else if (fileName.split(".")[1].toUpperCase() == "GIF") {
        }
        else {
            alert("File with " + fileName.split(".")[1] + " is invalid. Upload a validfile with png/jpg/gif extensions");
            return false;
        }
      }
      if(type == 'videos') {
        if (!formData[i].value && formData[i].name == 'videoUrl') { 
          alert('Video Url could not be empty'); 
          return false; 
        }
        video = validateVideoUrl();
        if(video == false){
          alert('Not a valid youtube/vimeo video URL'); 
          return false;
        }
      }
      if(type == 'location') {
        if (!formData[i].value && formData[i].name == 'location') { 
          alert('Place could not be empty'); 
          return false; 
        }
        if((!formData[i].value && formData[i].name == 'lat') || (!formData[i].value && formData[i].name == 'lng')){
          alert('Not a valid place'); 
          return false;
        }
      }
    }
    btn = $('#btn-share');
    btn.button('loading');  
} 
function showResponse(responseText, statusText, xhr, $form)  { 
  $('#wall-append').prepend(responseText);
  btn.button('reset');
} 

function validateVideoUrl(){
  var url = $('#videoUrl').val();
  var regYoutube = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
  var regVimeo = /^.*(vimeo\.com\/)((channels\/[A-z]+\/)|(groups\/[A-z]+\/videos\/))?([0-9]+)/;
  if(regYoutube.test(url) || regVimeo.test(url)) {
    return true;
  }else{
    return false;
  }
}
function loadData() 
{ 
    $('div.postloader').html('<img src="img/loader.gif">');
    $.post("getData.php?lastID=" + $(".post-list:last").attr("id"),     
    function(data){
        if (data != "") {
        $(".post-list:last").after(data);            
        }
        $('div.postloader').empty();
    });
}; 