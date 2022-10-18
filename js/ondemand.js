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

        if (eje === "ALL") {
            $('.lista-videos_cont tbody tr').fadeIn();
        } else {
            $('.lista-videos_cont tbody tr').hide();
            $(".lista-videos_cont tbody tr[data-eje='" + eje + "']").fadeIn();
        }
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
        player.pauseVideo();

        console.log(currentSecPlayedToSave);
        if (currentSecPlayedToSave >= minimunSecstoSaveView) {
            console.log('se debe guardar el video ');
            recordView();
        }

        resetPlayer();
    });

    $('.expo-video-item').on('click', function (e) {
        let element = $(this);
        isUserLogged(element);

    });

    $('.close-loggin').on('click', function (e) {
        $('.modal-loggin').removeClass('active');
    });
});

/**
 * Revisa si el usuario está loggeado
 */
let userLogged;
function isUserLogged(element) {
    if (userLogged === undefined) {
        $.ajax({
            type: 'POST',
            url: ajax_query_vars.ajax_url,
            data: { 'action': 'isUserLogged' },
            dataType: 'json',
            success: function (isUserLogged) {
                if (isUserLogged == true) {
                    userLogged = true;
                    $('.modal-video-cont').fadeIn().css({ 'display': 'flex' });
                    let ytID = $(element).data('yt-id');
                    let videoID = $(element).data('video-id');
                    initVideoSelected(ytID, videoID);
                    $('#modal-title').text($(element).text());
                } else {
                    userLogged = false;
                    $('.modal-loggin').addClass('active');
                }
            }
        });
    } else if (!userLogged) {
        $('.modal-loggin').addClass('active');
    } else {
        $('.modal-video-cont').fadeIn().css({ 'display': 'flex' });
        let ytID = $(element).data('yt-id');
        let videoID = $(element).data('video-id');
        initVideoSelected(ytID, videoID);
        $('#modal-title').text($(element).text());
    }
}

/**
 * Funciones de los videos en los pop ups
 *
 */
let divPlayer, player, timer, timeSpent = [], display = document.getElementById('display'), modalVideo, currentVideoID, currentSecInit, currentSecPlayed = 0, currentSecPlayedToSave, minimunSecstoSaveView = 900;

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
// function checkCurrentVideoID(videoPlaying) { return currentVideoID == videoPlaying; }
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
        },
        events: {
            'onStateChange': cambioDeEstado
        }
    })

    var iframe = document.createElement('iframe');
    iframe.setAttribute('src', 'https://youtube.com/embed/' + $(div).attr('data-yt-id') + '?enablejsapi=1&origin=http://localhost');
    iframe.setAttribute('frameborder', '0');

    iframe.setAttribute('anonymous', '1');
    iframe.setAttribute('allowfullscreen', '1');
    iframe.setAttribute('allow', 'controls, accelerometer; encrypted-media; gyroscope; picture-in-picture; ');
    // iframe.setAttribute('data-video-id', $(div).attr('data-video-id'));

    div.parentNode.replaceChild(iframe, div);
    $('#modal-video').attr('data-video-id', $(div).attr('data-video-id'));
}

function initVideoSelected(ytID, videoID) {
    let playerElement = document.getElementById("modal-video");
    divPlayer = document.createElement('div');
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

    if (currentVideoID !== $('#modal-video').attr('data-video-id')) {
        currentVideoID = $('#modal-video').attr('data-video-id');
        currentSecInit = event.target.getCurrentTime();
    }

    if (event.data == YT.PlayerState.PAUSED || event.data == YT.PlayerState.ENDED) {
        currentSecPlayed = event.target.getCurrentTime();
        currentSecPlayedToSave = currentSecPlayed - currentSecInit;
    }

    if (event.data == YT.PlayerState.ENDED) {
        currentSecPlayedToSave = event.target.getCurrentTime(); - currentSecInit;
        if (currentSecPlayedToSave >= minimunSecstoSaveView) {
            recordView();
        }
    }

}

function recordView() {
    $.ajax({
        type: 'POST',
        url: ajax_query_vars.ajax_url,
        data: { 'action': 'recordView', 'currentVideoID': currentVideoID, 'currentSecPlayedToSave': currentSecPlayedToSave },
        dataType: 'json',
        success: function (msg) {
            // console.log(msg);
        }
    });
}