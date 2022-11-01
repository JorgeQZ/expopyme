$ = jQuery;
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

let ejeURL, videoIdUrl;
ejeURL = getUrlParameter('eje');
videoIdUrl = getUrlParameter('vid');

if (videoIdUrl) {
    const videoToView = document.getElementById(videoIdUrl);
    console.log(videoToView);
    videoToView.scrollIntoView();
}

if (ejeURL) {
    $('.filter__button-eje').removeClass('active');
    $('.video-titulo').text($(".filter__button-eje[data-filter='" + ejeURL + "']").text()).show();
    $(".filter__button-eje[data-filter='" + ejeURL + "']").addClass('active');

    $('.item').hide();
    $(".item[data-eje='" + ejeURL + "']").show();
}

$(document).ready(function () {
    $('.filter__button-eje').on('click', function (e) {
        e.preventDefault();
        $('.filter__button-eje').removeClass('active');
        $('.video-titulo').text($(this).text()).show();
        $(this).addClass('active');
        let eje = $(this).attr('data-filter');
        $('.item').hide();
        $(".item[data-eje='" + eje + "']").show();
        updateRedirectURL(eje, videoIdUrl);
    });

    $('.close-loggin').on('click', function (e) {
        $('.modal-loggin').removeClass('active');
    });
});

let divPlayer, player, timer, timeSpent = [], display = document.getElementById('display'), modalVideo, currentVideoID, currentSecInit, currentSecPlayed = 0, currentSecPlayedToSave, minimunSecstoSaveView = 900, playerElements, isClosingTab = false, sameVideoSaved = false, userLogged;

function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING) {
        if (currentVideoID === undefined) {
            currentVideoID = $(event.target.g).attr('id');
            currentSecInit = event.target.getCurrentTime();

        } else if (currentVideoID !== $(event.target.g).attr('id')) {
            currentVideoBeforePause = document.getElementById(currentVideoID);
            currentVideoBeforePause.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');

            currentSecInitBeforePause = currentSecInit;
            sameVideoSaved = false;
            currentSecInit = event.target.getCurrentTime();
            currentVideoID = $(event.target.g).attr('id');

        } else {
            // console.log('Estas reproduciendo el mismo video');

        }
    }

    if (event.data == YT.PlayerState.PAUSED) {
        if (currentVideoID === $(event.target.g).attr('id')) {
            currentSecPlayed = event.target.getCurrentTime();
            currentSecPlayedToSave = currentSecPlayed - currentSecInit;
            if (isClosingTab) {
                if (currentSecPlayedToSave >= minimunSecstoSaveView) {
                    recordView($(event.target.g).attr('id'));
                }
                isClosingTab = false;
            } else if (!sameVideoSaved) {
                let percentViewd = (currentSecPlayed * 100) / event.target.getDuration();

                if (percentViewd >= 75) {
                    recordView($(event.target.g).attr('id'));
                    sameVideoSaved = true;
                }
            }
        } else {

            currentSecPlayedToSave = event.target.getCurrentTime(); - currentSecInitBeforePause;
            if (currentSecPlayedToSave >= minimunSecstoSaveView) {
                recordView($(event.target.g).attr('id'));
            }
        }
    }

    if (event.data == YT.PlayerState.ENDED) {
        currentSecPlayedToSave = event.target.getCurrentTime(); - currentSecInit;
        if (currentSecPlayedToSave >= minimunSecstoSaveView) {
            recordView($(event.target.g).attr('id'));
        }
    }
}
function recordView(videoID) {

    $.ajax({
        type: 'POST',
        url: ajax_query_vars.ajax_url,
        data: { 'action': 'recordView', 'currentVideoID': videoID, 'currentSecPlayedToSave': currentSecPlayedToSave },
        dataType: 'json',
        success: function (msg) {
            // console.log(msg);
        }
    });
}

/**
 * Revisa si el usuario está loggeado
 */
function isUserLogged(div) {

    if (userLogged === undefined) {
        $.ajax({
            type: 'POST',
            url: ajax_query_vars.ajax_url,
            data: { 'action': 'isUserLogged' },
            dataType: 'json',
            success: function (isUserLogged) {

                if (isUserLogged == true) {
                    userLogged = true;
                    var iframe = document.createElement('iframe');
                    iframe.setAttribute('src', 'https://www.youtube.com/embed/' + $(div).attr('data-yt-id') + '?autoplay=0&rel=0&enablejsapi=1&color=white');
                    iframe.setAttribute('frameborder', '0');
                    iframe.setAttribute('allowfullscreen', '1');
                    iframe.setAttribute('allow', 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture');
                    div.parentNode.replaceChild(iframe, div);

                    updateRedirectURL(null, ($(div).attr('data-video-id')));

                    player = new YT.Player($(div).attr('data-video-id'), {
                        height: '350',
                        videoId: $(div).attr('data-yt-id'),
                        autoplay: 0,
                        color: 'white',
                        rel: 0,
                        events: {
                            'onStateChange': onPlayerStateChange
                        }
                    })
                } else {
                    userLogged = false;
                    updateRedirectURL(null, ($(div).attr('data-video-id')));
                    $('.modal-loggin').addClass('active');
                }
            }
        });
    } else if (!userLogged) {
        console.log($(div).attr('data-video-id'));
        updateRedirectURL(null, ($(div).attr('data-video-id')));

        $('.modal-loggin').addClass('active');

    } else {
        var iframe = document.createElement('iframe');
        iframe.setAttribute('src', 'https://www.youtube.com/embed/' + $(div).attr('data-yt-id') + '?autoplay=0&rel=0&enablejsapi=1&color=white');
        iframe.setAttribute('frameborder', '0');
        iframe.setAttribute('allowfullscreen', '1');
        iframe.setAttribute('allow', 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture');
        div.parentNode.replaceChild(iframe, div);

        updateRedirectURL(null, ($(div).attr('data-video-id')));

        player = new YT.Player($(div).attr('data-video-id'), {
            height: '350',
            videoId: $(div).attr('data-yt-id'),
            autoplay: 0,
            color: 'white',
            rel: 0,
            events: {
                // 'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        })
    }

}

function labnolIframe(div) {
    isUserLogged(div);
}

function initYouTubeVideos() {
    playerElements = document.getElementsByClassName('expo-video');
    for (var n = 0; n < playerElements.length; n++) {
        var ytID = $(playerElements[n]).attr('data-yt-id');
        var videoId = $(playerElements[n]).attr('id');
        var div = document.createElement('div');
        div.setAttribute('data-yt-id', ytID);
        div.setAttribute('data-video-id', videoId);
        var thumbNode = document.createElement('img');
        thumbNode.src = '//i.ytimg.com/vi/ID/maxresdefault.jpg'.replace('ID', ytID);
        div.appendChild(thumbNode);
        var playButton = document.createElement('div');
        playButton.setAttribute('class', 'play');
        div.appendChild(playButton);
        div.onclick = function () {
            labnolIframe(this);
        };
        playerElements[n].appendChild(div);
    }
}

document.addEventListener('DOMContentLoaded', initYouTubeVideos);

window.addEventListener('beforeunload', (e) => {
    e.preventDefault();
    isClosingTab = true;
    currentVideoBeforePause = document.getElementById(currentVideoID);
    currentVideoBeforePause.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
    return e.returnValue = "Are you sure you want to exit?";
});

function updateRedirectURL(eje, vid) {
    let refresh, _eje, _vid;

    if (!eje) {
        _eje = getUrlParameter('eje');
    } else {
        _eje = eje;
    }

    if (!vid) {
        _vid = getUrlParameter('vid');
    } else {
        _vid = vid;
    }

    if (_eje && _vid) {
        refresh = window.location.protocol + "//" + window.location.host + window.location.pathname + '?eje=' + _eje + '&vid=' + _vid;
    } else if (_eje && !_vid) {
        refresh = window.location.protocol + "//" + window.location.host + window.location.pathname + '?eje=' + _eje;
    } else {
        refresh = window.location.protocol + "//" + window.location.host + window.location.pathname + '?vid=' + _vid;
    }

    console.log(refresh);
    window.history.pushState({ path: refresh }, '', refresh);
    $('#home-reg-header').attr('href', window.location.protocol + "//" + window.location.host + '/expopyme/wp-login.php?redirect_to=' + encodeURIComponent(refresh));
    $('#home-reg').attr('href', window.location.protocol + "//" + window.location.host + '/expopyme/wp-login.php?redirect_to=' + encodeURIComponent(refresh));
    $('#close-session').attr('href', window.location.protocol + "//" + window.location.host + '/expopyme/wp-login.php?action=logout&redirect_to=' + encodeURIComponent(refresh));
}