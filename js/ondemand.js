$ = jQuery;
$(document).ready(function () {

    $('#select-ejes').on("input", function () {
        let eje = $(this).val();
        $('.lista-videos_cont tbody tr').hide();
        $(".lista-videos_cont tbody tr[data-eje='" + eje + "']").show();
    });

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

});
