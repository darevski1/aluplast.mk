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
    <section class="toi">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{url('assets/images/custom/trocal.png')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{url('assets/images/custom/koemmerling.png')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{url('assets/images/custom/siegenia.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    @endsection