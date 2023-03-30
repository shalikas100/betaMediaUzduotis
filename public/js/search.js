$(document).ready(function () {

    function getFormData($form) {
        var unindexed_array = $form.serializeArray();
        var indexed_array = {};

        $.map(unindexed_array, function (n, i) {
            indexed_array[n['name']] = n['value'];
        });

        return indexed_array;
    }

    $("#search").on('select', function (e) {
        var route = $('#ajaxSearch').attr('data-ajax-action-url') + '?search=' + $(this).val(); //
        var method = 'GET';

        $.ajax({
            url: route,
            method: 'GET',

            dataType: 'JSON',

            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {

                var tbody = $('.card');

                tbody.html('');
                var generatedHtml = '';
                for (var i = 0; i < response.length; i++) {
                    generatedHtml += '<div class="card">'
                    '<img src="{{asset("storage/image/".$card->photo)}}" class="card-img-top img-fit" alt="{{$card->photo}}">'
                    '<div class="card-body">'
                        '<div class="card-body-top d-flex">'
                            '<p class="pasiulymai-naujienos">Naujienos</p>'
                            '<p class="pasiulymai-top">TOP Pasiūlymas</p>'
                        '</div>'
                        '<p class="pasiulymai-aprasymas">{{$card->description}}'
                        '</p>'
                        '<p class="pasiulymai-viesbutis">{{$card->hotel}}</p>'
                        '<div class="pasiulymas-miestas-grid">'
                            '<i class="fa-solid fa-location-dot"></i>'
                            '<p class="pasiulymai-miestas">'+ response[i].city +'</p>'
                        '</div>'
                    '</div>'
                    '<div class="info card-body d-flex flex-row">'
                        '<div class="info-left col-6 d-flex flex-column justify-content-around">'
                            '<p class="info-left-p">Nuo</p>'
                            '<p class="info-left-p-kaina">{{$card->price}}&euro;</p>'
                            '<p class="info-left-p-pradine-kaina">' + response[i].price + '&euro;</p>'
                        '</div>'
                        '<div class="info-right col-6">'
                            '<div class="info-right-grid d-flex">'
                                '<i class="fa-solid fa-person col-2"></i>'
                                '<p class="info-right-asmenys col-12">' + response[i].persons + ' asmenys</p>'
                            '</div>'
                            '<div class="info-right-grid d-flex">'
                                '<i class="fa-regular fa-clock col-2"></i>'
                                '<p class="info-right-naktys col-10">' + response[i].nights + ' nakvynės</p>'
                            '</div>'
                            '<div class="info-right-grid d-flex">'
                                '<i class="fa-solid fa-calendar-days col-2"></i>'
                                '<p class="info-right-galiojimas col-10">{{$card->date_expiry}} mėn</p>'
                            '</div>'
                        '</div>'
                    '</div>'
                '</div>';
                }
                tbody.append(generatedHtml);
            },
            error: function (response) {
                console.log(response); //404- nerasta
            },
        });
        console.log(route);
    })
})
