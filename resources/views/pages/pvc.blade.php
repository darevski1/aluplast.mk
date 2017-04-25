@extends('main')
@section('title', ' Пвц Столарија - Прозорци - Врати')

@section('content')
    <section id="slider">
        <div class="jumbotron newsm">
            <div class="container">
                <h1 class="txthd1">ПВЦ Столарија!</h1>
            <p>
                Енергетски ефикасни пвц прозори произведени од врвен германски производител на профили TROCAL. Со промена на старите прозорци се овозможува, заштеда на енергија во комбинација со ниско емисионо стакло добивате одлична топлинска и звучна изолација.
            </p>            </div>
                    </div>
    </section>
    <section class="toi">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <img src="{{asset('assets/images/pvc-prozor.png')}}" alt="">
                </div>
                <div class="col-md-5">

                    <h1>ПВЦ прозори и врати</h1>
                        <p>Енергетски ефикасни пвц прозори и врати за подобра топлинска изолација</p>
                    <ul>
                        <li>
                            Заштита од прекумерна топлина во летниот период.<br/>
                            Заштита од губење на топлина во зимскиот период
                        </li>
                        <li>Можност да се комбинира со комарници</li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <h1>ПВЦ ПРОФИЛИ</h1>
                <h4>TROCAL</h4>

            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <h1>Стакло пакет</h1>
                <p>Стаклото е дизајнирано да се користи само во термоизолациони стаклени пакети кое ја чува топлината во зимските периоди, го спречува продирањето на ултравиолетовите зраци, максимално ја пропушта светлината и сончевата енергија</p>
                <h4>Термоизолационо 4мм+16+4мм флот класа</h4>
                <p>Термопан стакло составено од две стакла, разделени со херметички затворен простор што содржи сув воздух со дистанцер, бутил трака и други потребни компоненти</p>
                <h4>Нискоемисионо стакло (Low-E)</h4>
                <p>Високи перформанси на ниска емисионост со U-вредност од 1.1 W/m2K и дури до U-вредност од 0.06 W/m2K, во трослојно застаклување во комбинација од две ниско емисиони стакла и едно обично исполнети меѓусебе со гас аргон</p>
                <h4>Трослојно застаклување со високи перформанси</h4>
                <p>Стакло пакети со три стакла се применуваат кога се бара многу ниски вредности помали од U 1.0 W/m2K.

                </p>
            </div>
        </div>
    </section>
    <section class="toi">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-responsive" src="{{url('assets/images/custom/trocal.png')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img-responsive" src="{{url('assets/images/custom/koemmerling.png')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img-responsive" src="{{url('assets/images/custom/siegenia.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    @endsection