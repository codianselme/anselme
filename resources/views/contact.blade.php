@extends("layouts.base")

@section('title')
    {{ "Anselme Portfolio - Contact"  }}
@endsection

@section('content')

    <!-- contact breadcrumb -->
    <section class="w3l-about-breadcrumb text-center">
        <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
            <div class="container py-2">
                <h2 class="title">Me Contacter</h2>
                <ul class="breadcrumbs-custom-path mt-2">
                    <li><a href="{{route('index')}}">Accueil</a></li>
                    <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            <h3 class="text-center"><strong>Est-ce que je suis un excellent choix pour votre besoin ? <br> Si c'est le cas, n'hésitez pas à me contacter dès maintenant.</strong></h3>
            {{--<h3 class="text-center"><strong>Did I sound like a great fit for an opportunity? <br> If so, don't hesitate to get in touch now</strong></h3>--}}
        </div>
    </div>
    <!-- contact breadcrumb -->

    <!-- contact block -->
    <!-- contact1 -->
    <section class="w3l-contact-1 py-5">
        <div class="contacts-9 py-lg-5 py-md-4">
            <div class="container">
                <div class="d-grid contact-view">
                    <div class="cont-details">
                        <div class="cont-top">
                            <div class="cont-left text-center">
                                <span class="fa fa-phone text-primary"></span>
                            </div>
                            <div class="cont-right">
                                <h6>{{--Call Me--}}Appelez-moi</h6>
                                <p><a href="tel:+229 96 86 52 00">+229 96 86 52 00</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-envelope-o text-primary"></span>
                            </div>
                            <div class="cont-right">
                                <h6>{{--Email Me--}}Envoyez moi un email</h6>
                                <p><a href="mailto:codianselme@mail.com" class="mail">codianselme@mail.com</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-map-marker text-primary"></span>
                            </div>
                            <div class="cont-right">
                                <h6>{{--Location--}}Emplacement</h6>
                                <p>Abomey-Calavi / Bénin</p>
                            </div>
                        </div>
                    </div>
                    <div class="map-content-9">
                        <form action="{{ route('send.message') }}" method="post">
                            @csrf
                            <div class="twice-two">
                                <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Votre Nom et Prénom" required="">
                                <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Votre Email" required="">
                            </div>
                            <div class="twice">
                                <input type="text" class="form-control" name="w3lSubject" id="w3lSubject" placeholder="Objet" required="">
                            </div>
                            <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Message" required=""></textarea>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-style mt-4">{{--Send Message--}}Envoyer le message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /contact1 -->
    <div class="map-iframe">
        <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.5775067716113!2d2.3338509756170214!3d6.448251493543132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9d76bd8c417%3A0xbadef07d88a34c71!2sPHARMACIE%20AITCHEDJI%20SEMINAIRE!5e0!3m2!1sfr!2sbj!4v1715103267008!5m2!1sfr!2sbj"
                width="100%" height="400" style="border:0;" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <!-- //contact block -->

@endsection


