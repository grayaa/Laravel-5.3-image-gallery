Dropzone.options.addImages = {
    maxFilesize: 20,
    acceptedFiles: 'image/*',
    success: function (file, response) {
        //console.log(file);
        //console.log(response);

        if( file.status == 'success' ){
            handleDropzoneFileUpload.handleSuccess(response);
        }else{
            handleDropzoneFileUpload.handleError(response);
        }
    }
};

var handleDropzoneFileUpload = {
  handleError: function (response) {
      console.log(response);
  },
    handleSuccess: function (response) {
        var imageList = jQuery('.gallery_images ul');
        var bigImageSrc = baseUrl + '/' + response.file_path;
        var thumbnailSrc = baseUrl + '/gallery/images/thumbs/' + response.file_name;

        // Append the newly uploaded image in the image list
        jQuery(imageList).append('<li><a data-lightbox="mygallery" href="' + bigImageSrc + '"><img src="' + thumbnailSrc + '" ></a></li>');
    }
};

jQuery(document).ready(function(){
    console.log('Document is ready !');
});