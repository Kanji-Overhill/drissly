@extends('home')
@section('content')
        <section class="section-image section-home-one no-padding-y" style="background-image:url(media/hd-1.jpg)" id="inicio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <hr class="space-lg" />
                        <h3 class="text-color-2">
                            {{ __('messages.home_1') }}
                        </h3>
                        <ul class="slider" data-options="arrows:false,nav:false,autoplay:3000,controls:out">
                            <li>
                                <h1 class="text-uppercase">{{ __('messages.home_2') }}</h1>
                            </li>
                        </ul>
                        <p>
                            {{ __('messages.home_3') }} 
                        </p>
                        <hr class="space-sm" />
                        <hr class="space-lg" />
                        <hr class="space-lg" />
                    </div>
                    <div class="col-lg-5 hidden-md">
                        <hr class="space-sm" />
                        <img data-anima="fade-bottom" data-time="1000" class="slide-image" src="media/man-1.png" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base section-overflow-top">
            <div class="container">
                <div class="grid-list" data-columns="4" data-columns-md="2" data-columns-sm="1">
                    <div class="grid-box">
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-top-icon boxed">
                                <i class="im-monitor-phone"></i>
                                <div class="caption">
                                    <h2></h2>
                                    <p>
                                        {{ __('messages.home_4') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-top-icon boxed">
                                <i class="im-bar-chart2"></i>
                                <div class="caption">
                                    <h2></h2>
                                    <p>
                                        {{ __('messages.home_5') }} <br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-top-icon boxed">
                                <i class=" im-medal"></i>
                                <div class="caption">
                                    <h2></h2>
                                    <p>
                                        {{ __('messages.home_6') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-top-icon boxed">
                                <i class="im-business-man"></i>
                                <div class="caption">
                                    <h2></h2>
                                    <p>
                                        {{ __('messages.home_7') }}<br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-fit-lg" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <img src="media/grafica.jpg" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>{{ __('messages.home_9') }}</h2>
                            <p>{{ __('messages.home_8') }}</p>
                        </div>
                        <p>
                           {{ __('messages.home_10') }} 
                        </p>
                       
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base section-color" id="services">
            <div class="container">
                <div class="row" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-8">
                        <div class="title">
                            <h2>{{ __('messages.home_12') }}</h2>
                            <p>{{ __('messages.home_11') }}</p>
                        </div>
                    </div>
                </div>
                <hr class="space" />
                <div class="grid-list" data-columns="3" data-columns-md="2" data-columns-sm="1" data-anima="fade-bottom" data-time="1000">
                    <div class="grid-box">
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed">
                                <a href="" class="img-box"><img src="media/image-15.jpg" alt="" /></a>
                                <div class="caption">
                                    <p>
                                        {{ __('messages.home_13') }} 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed">
                                <a href="" class="img-box"><img src="media/image-12.jpg" alt="" /></a>
                                <div class="caption">
                                    <p>
                                        {{ __('messages.home_14') }} 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed">
                                <a href="" class="img-box"><img src="media/image-2.jpg" alt="" /></a>
                                <div class="caption">
                                    <p>
                                        {{ __('messages.home_15') }}<br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base" id="about_us">
            <div class="container">
                <div class="row align-items-center" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>{{ __('messages.home_16') }}</h2>
                        </div>
                        <p>
                           {{ __('messages.home_17') }} 
                        </p>
                        <hr class="space-sm" />
                    </div>
                    <div class="col-lg-6">
                        <img src="media/image-3.jpg" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base section-color">
            <div class="container">
                <div class="row align-items-center" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <img src="media/image-6.jpg" alt="" />
                    </div>
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>{{ __('messages.home_18') }}</h2>
                        </div>
                        <p>
                            {{ __('messages.home_19') }}
                        </p>
                        <hr class="space-sm" />
                    </div>
                </div>
                <hr class="space" />
                <hr class="space-xs" />
            </div>
        </section>
        <section id="preguntas" class="section-image light align-center ken-burn-center" data-parallax="scroll" data-image-src="media/hd-4.jpg">
            <div class="container" data-anima="fade-bottom" data-time="1000">
                <hr class="space" />
                <h2 class="width-750">{{ __('messages.home_20') }}</h2>
                <hr class="space" />
                <table class="table table-grid table-border align-center table-logos table-10">
                    <tbody>
                        <tr>
                            <td>
                                <img src="media/filetelcel-logosvg-wikimedia-commons-telcel-png-1280_282.png" alt="" />
                            </td>
                            <td>
                                <img src="media/movistar-logo-1.png" alt="" />
                            </td>
                            <td>
                                <img src="media/AT&T_logo_2016.svg" alt="" />
                            </td>
                            <td>
                                <img src="media/1904476.png" alt="" />
                            </td>
                            <td>
                                <img src="media/virgin-mobile-logo-red.png" alt="" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="section-base" id="contacto">
            <div class="container">
                <div class="row" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>{{ __('messages.home_21') }}</h2>
                            <p>{{ __('messages.home_22') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form id="UCiFI" action="thtmekit/scripts/php/contact-form.php" class="form-box form-ajax form-ajax-wp" method="post" data-email="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input id="Name" name="Name" placeholder="{{ __('messages.home_23') }}" type="text" class="input-text" required="">
                                </div>
                                <div class="col-lg-6">
                                    <input id="Email" name="Email" placeholder="{{ __('messages.home_24') }}" type="email" class="input-text" required="">
                                </div>

                                <div class="col-lg-6">
                                    <input id="Name" name="Name" placeholder="{{ __('messages.home_25') }}" type="text" class="input-text" required="">
                                </div>
                                <div class="col-lg-6">
                                    <input id="Email" name="Email" placeholder="{{ __('messages.home_26') }}" type="email" class="input-text" required="">
                                </div>
                                <div class="col-lg-12">
                                    <input id="company" name="company" placeholder="{{ __('messages.home_29') }}" type="text" class="input-text" required="">
                                </div>
                            </div>
                            <hr class="space-xs" />
                            <textarea id="Message" name="Message" placeholder="{{ __('messages.home_27') }}" class="input-textarea" required=""></textarea>
                            <button class="btn btn-xs" type="submit">{{ __('messages.home_28') }}</button>
                            <div class="success-box">
                                <div class="alert alert-success">
                                    Congratulations. Your message has been sent successfully.
                                </div>
                            </div>
                            <div class="error-box">
                                <div class="alert alert-warning">
                                    Error, please retry. Your message has not been sent.
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endsection