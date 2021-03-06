@extends('layout.struct')

{{-- Page title --}}
@section('title')
About us
@parent
@stop


@section('content')

<div>
    <main class="Main" data-amp-auto-lightbox-disable="" id="content">
        <section class="c--text-inverse py700 section" style="background-image: url('assets/Backgrounds/aboutus_back.png'); height:400px;">
            <div class="flex-column flex-row-l items-center-l row h-100p" style="text-align: center;">
                <div class="col mw-41p-l mw-66p-m mx-auto pb600-m px350-ns px450 w-100p">
                    <h1 class="c--text-inverse f1100 f800-m f900-l pr-8p-offset-l" style="font-size: 2.5667rem; line-height: 1.1328070175439;">ABOUT US</h1>
                </div>
            </div>
        </section>

        <section class="c--text-inverse py700 section" style="padding: 50px 0px; height: 100%;">
            <div class="flex-column flex-row-l row h-100p">
                <div class="col mw-83p-m mx-auto px350-ns px450 w-100p" style="width: 80%;">

                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default" style="color:darkgreen;">We are a trusted </h2>
                    </div>
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default" style="color:darkgreen;">solar energy data</h2>
                    </div>
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default" style="color:darkgreen;">provider</h2>
                    </div>
                </div>
                <div class="col mw-83p-m mx-auto px350-ns px450 w-100p" style="width: 80%;">
                    <h3 style="color:black;">
                        PvData's aim is to ensure that more energy is generated by solar than any other energy source by 2050 and to take the lead by providing bespoke tools to enable decision makers access needed technical, financial, environmental and social data relative to solar energy assets.
                    </h3>
                </div>
            </div>
            <div class="flex row h-100p" style="margin-top:80px; justify-content: flex-start; padding: 20px;">
                <h4 style="color:black;">our database</h4>
            </div>
            <div class="flex-wrap row h-100p p-m-20">
                <div class="col mw-83p-m mx-auto px350-ns px450 flex-4-layout p-m-20" style="margin-top: 0px;">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default" style="color:darkgreen;">12,000+ </h2>
                    </div>
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default" style="color:black;">Towns & Cities</h3>
                    </div>
                </div>
                <div class="col mw-83p-m mx-auto px350-ns px450 flex-4-layout p-m-20 p-m-20" style="margin-top: 0px;">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default" style="color:darkgreen;">96</h2>
                    </div>
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default" style="color:black;">Countries</h3>
                    </div>
                </div>
                <div class="col mw-83p-m mx-auto px350-ns px450 flex-4-layout p-m-20" style="margin-top: 0px;">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default" style="color:darkgreen;">1,000+</h2>
                    </div>
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default" style="color:black;">Utility companies</h3>
                    </div>
                </div>
                <div class="col mw-83p-m mx-auto px350-ns px450 flex-4-layout p-m-20" style="margin-top: 0px;">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default" style="color:darkgreen;">50+ </h2>
                    </div>
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default" style="color:black;">Currencies</h3>
                    </div>
                </div>
                <div class="col mw-83p-m mx-auto px350-ns px450 flex-4-layout p-m-20" style="margin-top: 0px;">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default" style="color:darkgreen;">Global </h2>
                    </div>
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default" style="color:black;">Live interest rate</h3>
                    </div>
                </div>
                <div class="col mw-83p-m mx-auto px350-ns px450 flex-4-layout p-m-20" style="margin-top: 0px;">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default" style="color:darkgreen;">Global </h2>
                    </div>
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default" style="color:black;">Flookd Risk</h3>
                    </div>
                </div>
                <div class="col mw-83p-m mx-auto px350-ns px450 flex-4-layout p-m-20" style="margin-top: 0px;">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default" style="color:darkgreen;">Global </h2>
                    </div>
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default" style="color:black;">Biodiversity Risk</h3>
                    </div>
                </div>
                <div class="col mw-83p-m mx-auto px350-ns px450 flex-4-layout p-m-20" style="margin-top: 0px;">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default" style="color:darkgreen;">Global </h2>
                    </div>
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default" style="color:black;">Temperature & Irradiance</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="c--text-inverse py700 section" style="background-image: url('assets/Backgrounds/aboutus_back_2.jpg'); height:700px; padding-bottom:140px;">
            <div class="flex-column flex-row-l items-center-l row h-100p" style="text-align: center;">
                <div class="col mw-66p-m mx-auto pb600-m px350-ns px450 w-100p">
                    <h2 class="c--text-inverse f1100 f800-m f900-l pr-8p-offset-l" style="font-size: 2.5667rem; line-height: 1.1328070175439;-webkit-text-stroke:2px #000000;">"Our vision is to provide decision makers with quick and realtime financial, environmental and social data on any solar energy asset in the world."</h2>
                </div>
            </div>
        </section>
    </main>
</div>

@stop


@section('footer_scripts')

    <script type="text/javascript">

        var tab_animate_index = 0;
        var tab_animate_index_next = 0;
        var play_pause = 1;
        var play_pause_next = 1;

        $( document ).ready(function() {    

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            

            tap:AMP.setState({ testimonialSlider: {currentSlide: 1}});

            var timer1 = setInterval(tabAnimation, 7000); 
        });

        function reloadexceliframe()
        {
            document.getElementById('iframeexcel').setAttribute('src', '{{ url("assets/files/Discounted Cash Flow.html") }}');
        }

        function reloadpdfiframe()
        {
            // document.getElementById('iframepdf').setAttribute('src', '{{ url("assets/files/Due Diligence Report.pdf") }}');
        }
        
        function tabAnimation()
        {
            if(play_pause == 1)
                tab_animate_index++;

            if(play_pause_next == 1)
                tab_animate_index_next++;

            tap:AMP.setState({ pillarCarouselState: tab_animate_index % 6 });
            tap:AMP.setState({ pillarCarouselState_next: tab_animate_index_next % 4 });

            setButtonIcons(play_pause);
            setButtonIconsNext(play_pause_next);
        }            

        function play_pause_func(obj)
        {
            play_pause = 1 - play_pause;
            setButtonIcons(play_pause);
        }

        function play_pause_func_next(obj)
        {
            play_pause_next = 1 - play_pause_next;
            setButtonIconsNext(play_pause_next);
        }

        function clickTab(index)
        {
            tap:AMP.setState({ pillarCarouselState: index });
            tab_animate_index = index;
            play_pause = 0;
            setButtonIcons(0);

            setTimeout(function(){ 
                play_pause = 1;
            }, 8000);  
        }

        function clickTabNext(index)
        {
            tap:AMP.setState({ pillarCarouselState_next: index });
            tab_animate_index_next = index;
            play_pause_next = 0;
            setButtonIconsNext(0);

            setTimeout(function(){ 
                play_pause_next = 1;
            }, 8000);  
            
        }

        function setButtonIcons(status)
        {
            var btns = document.getElementsByClassName('play_pause');
            for(i = 0; i < btns.length; i++)
            {
                if(status == 0)
                    btns[i].children[0].setAttribute('class', 'fa fa-play');
                else
                    btns[i].children[0].setAttribute('class', 'fa fa-pause');
            }
        }

        function setButtonIconsNext(status)
        {
            var btns = document.getElementsByClassName('play_pause_next');
            for(i = 0; i < btns.length; i++)
            {
                if(status == 0)
                    btns[i].children[0].setAttribute('class', 'fa fa-play');
                else
                    btns[i].children[0].setAttribute('class', 'fa fa-pause');
            }
        }

        
    </script>   
@stop