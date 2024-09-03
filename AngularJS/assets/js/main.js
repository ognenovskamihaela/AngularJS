$(document).ready(function () {
    var $videoSrc;
    $('.btn-play').click(function () {
        $videoSrc = $(this).data("src"); 
        console.log($videoSrc); 
    });

    $('#videoModal').on('shown.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    });

    $('#videoModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc);
    });
});