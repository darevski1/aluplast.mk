@extends('main')
@section('title', ' Пвц Столарија - Прозорци - Врати')

@section('content')
    <section id="slider">
        <div class="jumbotron newsm">
            <div class="container">
                <h1 class="txthd1">Контакт!</h1>
                Вашето барање за набавка на пвц може да ни го испратите на маил
                            </ul>
                 </div>
        </div>
    </section>

    <section class="minblokc">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Контакт инфо</h2>
                    <ul>
                        <li><a href="tel:1234567">123-4567</a> </li>
                        <li><a href="tel:1234567">123-4567</a> </li>
                        <li><a href="tel:1234567">123-4567</a> </li>

                        <li>aluplast@gmail.com </li>

                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6">
                    <form action="{{ url('contact')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label name="email">Емаил:</label>
                            <input id="email" name="email" class="form-control" placeholder="Ваша контакт маил адреса">
                        </div>

                        <div class="form-group">
                            <label name="subject">Наслов:</label>
                            <input id="subject" name="subject" class="form-control" placeholder="Наслов на порака">
                        </div>

                        <div class="form-group">
                            <label name="message">Порака:</label>
                            <textarea id="message" name="message" class="form-control" placeholder="Порака..."></textarea>
                        </div>

                        <input type="submit" value="Испрати порака" class="btn btn-success btn-block" style="margin-top: 40px;">
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection