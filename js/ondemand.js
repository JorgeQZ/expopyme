$ = jQuery;

/**
 * Menú sticky
 */
// function addSticky() {

//     var header = document.getElementById("menu-ejes");
//     var sticky = header.offsetTop;
//     if (window.pageYOffset > 203) {
//         header.classList.add("sticky");
//     } else {
//         header.classList.remove("sticky");
//     }
// }
// window.onscroll = function () { addSticky(); }

$(document).ready(function () {

    /**
     * Filtro de categorías de ejes
     */
    $('#select-ejes').on("input", function () {
        let eje = $(this).val();
        $('.lista-videos_cont tbody tr').hide();
        $(".lista-videos_cont tbody tr[data-eje='" + eje + "']").fadeIn();
    });

    /**
     * Filtro de búsqueda
     */
    $('#search-conf').on("input", function () {
        let rows = $('#conferencias tbody tr');
        let search_word = $(this).val().toUpperCase();

        for (i = 0; i < rows.length; i++) {
            let txtValueEJE = rows[i].dataset.eje.toUpperCase();
            let txtValueTITLE = rows[i].querySelector('.titulo').innerText.toUpperCase();
            let txtValueCONF = rows[i].querySelector('.conferencista').innerText.toUpperCase();

            if (txtValueEJE.indexOf(search_word) > -1 || txtValueTITLE.indexOf(search_word) > -1 || txtValueCONF.indexOf(search_word) > -1) {
                rows[i].style.display = "table-row";
            } else {
                rows[i].style.display = "none";
            }
        }
    });

    /**
     * Funciones de los tabs
     */
    $('.tab-button').on('click', function (e) {
        let target = $(this).data('button');
        $('.tab-button').removeClass('active');
        $(this).addClass('active');
        $('.tab').removeClass('active').hide();
        $('.tab[data-tab="' + target + '"]').fadeIn('slow');
    });

    /**
     * Botones de los pop up
     */
    $('.close-button').on('click', function (e) {
        $('#modal-video').empty();
        $('.modal-video-cont').hide();
        resetPlayer();
    });

    $('.expo-video-item').on('click', function (e) {
        $('.modal-video-cont').fadeIn().css({ 'display': 'flex' });
        let ytID = $(this).data('yt-id');
        let videoID = $(this).data('video-id');
        initVideoSelected(ytID, videoID);
        $('#modal-title').text($(this).text());
    });
});

/**
 * Funciones de los videos en los pop ups
 *
 */
let player, timer, timeSpent = [], display = document.getElementById('display'), modalVideo, currentVideoID;
let done = false;
function resetPlayer() {
    /**
     * Se remueve el iframe
     */
    modalVideo = document.getElementById('modal-video');
    modalVideo.remove();

    /**
     * Se crea un nuevo div con clase y ID
     */
    let divPlayer = document.createElement('div');
    divPlayer.classList.add('modal-video');
    divPlayer.setAttribute('id', 'modal-video');

    /**
     * se agrega el div al contenedor
     */
    document.getElementById('modal-video-cont').appendChild(divPlayer);
}

function selectedVideoIframe(div) {

    // console.log(div);
    player = new YT.Player('modal-video', {
        videoId: $(div).attr('data-yt-id'),
        playerVars: {
            rel: 0,
            controls: 1,
            showinfo: 0,
            autoplay: 0,
            loop: 0,
            modestbranding: 1
        },
        events: {
            'onStateChange': cambioDeEstado
        }
    })

    currentVideoID = $(div).attr('data-video-id');
    var iframe = document.createElement('iframe');
    iframe.setAttribute('src', 'https://youtube.com/embed/' + $(div).attr('data-yt-id') + '?enablejsapi=1&origin=http://localhost');
    iframe.setAttribute('frameborder', '0');
    iframe.setAttribute('data-video-id', $(div).attr('data-video-id'));
    iframe.setAttribute('anonymous', '1');
    iframe.setAttribute('allowfullscreen', '1');
    iframe.setAttribute('allow', 'controls, accelerometer; encrypted-media; gyroscope; picture-in-picture; ');

    div.parentNode.replaceChild(iframe, div);
    console.log('currentVideoID', currentVideoID);
}

function initVideoSelected(ytID, videoID) {
    let playerElement = document.getElementById("modal-video");
    let divPlayer = document.createElement('div');
    divPlayer.setAttribute('data-yt-id', ytID);
    divPlayer.setAttribute('data-video-id', videoID);

    var thumbNode = document.createElement('img');
    thumbNode.src = '//i.ytimg.com/vi/ID/maxresdefault.jpg'.replace('ID', ytID);
    divPlayer.appendChild(thumbNode);

    var playButton = document.createElement('div');
    playButton.setAttribute('class', 'play');
    divPlayer.appendChild(playButton);
    divPlayer.onclick = function () {
        selectedVideoIframe(this);
    };
    playerElement.appendChild(divPlayer);
}

function cambioDeEstado(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) { // Started playing
        console.log('reproduciendo', event.target.getDuration())
        setTimeout(recordView, 1000);
    }
}

function recordView() {
    $.ajax({
        type: 'POST',
        url: ajax_query_vars.ajax_url,
        data: { 'action': 'recordView', 'currentVideoID': currentVideoID },
        dataType: 'json',
        success: function (msg) {
            console.log(msg);
        }
    });
}