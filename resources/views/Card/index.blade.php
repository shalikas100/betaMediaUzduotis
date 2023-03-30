<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('./beta-style-css/beta-style.css')}}">
    <link href="https://fonts.cdnfonts.com/css/avenir-next-lt-pro" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <header class="page-header">
        <div class="content">
            <h1>Poilsis</h1>
            <p class="content-p">Jei savo poilsį planuotis norite patys, tam pakaks vos kelių mygtuko paspaudimų:
                rinkitės
                Jums patogiausią keliavimo būdą ir patraukliausią, Jūsų poreikius labiausiai atitinkantį viešbutį
                Lietuvoje ar užsienyje – Beta.lt jų Jums siūlo daugybę. Ne paslaptis, kad lietuviai vis dažniau savo
                atostogoms renkasi tokias kryptis, kaip Turkija ar Egiptas, būtent dėl prabangių, kokybiškas paslaugas
            </p>
        </div>
    </header>

    <div class="container d-flex pagrindinis">
        <div class="container search col-md-4 col-12">

                                            <!-- Neveikia -->

                <!-- <div id="ajaxSearch" data-ajax-action-url="{{route('card.searchAjax')}}">
                    @csrf
                    <select id="search" class="form-select" name="city">
                            <option selected>Miestas</option>
                        @foreach($cards as $card)
                            <option id="searchBtn"  value="{{$card->id}}">{{$card->city}}</option>
                        @endforeach
                    </select>
                </div> -->
            <form action="">
                <select class="form-select" name="city">
                    <option class="fa-bangladeshi-taka-sign" selected>Miestas</option>
                    @foreach($cards as $card)
                    <option value="{{$card->id}}">{{$card->city}}</option>
                    @endforeach
                </select>
            </form>
            <form action="">
                <select class="form-select" name="nights">
                    <option selected>Nakvynės trukmė</option>
                    @foreach($cards as $card)
                    <option value="{{$card->id}}">{{$card->nights}}</option>
                    @endforeach
                </select>
            </form>
            <form action="">
                <select class="form-select" name="persons">
                    <option selected>Asmenų skaičius</option>
                    @foreach($cards as $card)
                    <option value="{{$card->id}}">{{$card->persons}}</option>
                    @endforeach
                </select>
            </form>
            <form action="">
                <select class="form-select" name="price">
                    <option selected>Kaina &euro;</option>
                    @foreach($cards as $card)
                    <option value="{{$card->id}}">{{$card->price}} &euro;</option>
                    @endforeach
                </select>
            </form>
        </div>
        <div class="container cards">
            <div class="row g-2">
                <div class="col-md-8 col-12">
                    @foreach ($cards as $card)
                    <div class="card">
                        <img src="{{asset('storage/image/'.$card->photo)}}" class="card-img-top img-fit" alt="{{$card->photo}}">
                        <div class="card-body">
                            <div class="card-body-top d-flex">
                                <p class="pasiulymai-naujienos">Naujienos</p>
                                <p class="pasiulymai-top">TOP Pasiūlymas</p>
                            </div>
                            <p class="pasiulymai-aprasymas">{{$card->description}}
                            </p>
                            <p class="pasiulymai-viesbutis">{{$card->hotel}}</p>
                            <div class="pasiulymas-miestas-grid">
                                <i class="fa-solid fa-location-dot"></i>
                                <p class="pasiulymai-miestas">{{$card->city}}</p>
                            </div>
                        </div>
                        <div class="info card-body d-flex flex-row">
                            <div class="info-left col-6 d-flex flex-column justify-content-around">
                                <p class="info-left-p">Nuo</p>
                                <p class="info-left-p-kaina">{{$card->price}}&euro;</p>
                                <p class="info-left-p-pradine-kaina">{{$card->price}}&euro;</p>
                            </div>
                            <div class="info-right col-6">
                                <div class="info-right-grid d-flex">
                                    <i class="fa-solid fa-person col-2"></i>
                                    <p class="info-right-asmenys col-12">{{$card->persons}} asmenys</p>
                                </div>
                                <div class="info-right-grid d-flex">
                                    <i class="fa-regular fa-clock col-2"></i>
                                    <p class="info-right-naktys col-10">{{$card->nights}} nakvynės</p>
                                </div>
                                <div class="info-right-grid d-flex">
                                    <i class="fa-solid fa-calendar-days col-2"></i>
                                    <p class="info-right-galiojimas col-10">{{$card->date_expiry}} mėn</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous">
    </script>
     <script src= "{{asset('js/search.js')}}"></script>
</body>

</html>