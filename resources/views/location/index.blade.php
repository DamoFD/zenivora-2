<x-app-layout>
    @section('title', 'Local locations')
    @section('description', 'Contact a local Zenivora location near you!')
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-24">
        <section class="h-screen order-2 lg:order-1">
            <div id="info">
                <strong><a href="http://www.chromeexperiments.com/globe">WebGL Globe</a></strong> <span class="bull">&bull;</span> Created by the Google Data Arts Team <span class="bull">&bull;</span> Data acquired from <a href="http://sedac.ciesin.columbia.edu/gpw/">SEDAC</a>
            </div>
            <div id="currentInfo">
                <span id="year1990" class="year">1990</span>
                <span id="year1995" class="year">1995</span>
                <span id="year2000" class="year">2000</span>
            </div>
            <div id="container" class="lg:fixed lg:left-0 lg:top-0 lg:w-1/2"></div>
        </section>
        <section class="order-1 lg:order-2 px-2 md:px-8">
            @foreach ($data as $name => $location)
                @php
                    list($city, $state) = explode('-', $name);
                    $city = ucwords($city);
                    $state = strtoupper($state);
                @endphp
                <a href="{{ route('location.show', ['location' => $name]) }}">
                    <section class="w-full radial h-96 relative font-roboto overflow-hidden rounded-lg border-2 lg:border-4 border-brand-primary mb-4" >
                        <img src="{{ asset('img/' . $location->img) }}" class="w-full h-full transition-all duration-300 object-cover hover:scale-[1.1] object-center" />
                        <h1 class="text-white text-4xl absolute left-0 top-0 p-4">{{ $city }}, {{ $state }}</h1>
                    </section>
                </a>
            @endforeach
        </section>
    </section>
    <canvas class="fixed z-[-1] h-full w-full bg-brand-gray top-0 left-0" id="canvas"></canvas>
    <script src="{{ asset('js/star-animation.js') }}"></script>
    <script src="{{ asset('js/marquee.js') }}"></script>
    <script type="text/javascript" src="/webgl-globe/globe/third-party/Detector.js"></script>
    <script type="text/javascript" src="/webgl-globe/globe/third-party/three.min.js"></script>
    <script type="text/javascript" src="/webgl-globe/globe/third-party/Tween.js"></script>
    <script type="text/javascript" src="/webgl-globe/globe/globe.js"></script>
    <script type="text/javascript">

        if(!Detector.webgl){
            Detector.addGetWebGLMessage();
        } else {

            var years = ['1990','1995','2000'];
            var container = document.getElementById('container');
            var globe = new DAT.Globe(container);

            console.log(globe);
            var i, tweens = [];

            var settime = function(globe, t) {
                return function() {
                    new TWEEN.Tween(globe).to({time: t/years.length},500).easing(TWEEN.Easing.Cubic.EaseOut).start();
                    var y = document.getElementById('year'+years[t]);
                    if (y.getAttribute('class') === 'year active') {
                        return;
                    }
                    var yy = document.getElementsByClassName('year');
                    for(i=0; i<yy.length; i++) {
                        yy[i].setAttribute('class','year');
                    }
                    y.setAttribute('class', 'year active');
                };
            };

            for(var i = 0; i<years.length; i++) {
                var y = document.getElementById('year'+years[i]);
                y.addEventListener('mouseover', settime(globe,i), false);
            }

            var xhr;
            TWEEN.start();


            xhr = new XMLHttpRequest();
            xhr.open('GET', 'webgl-globe/globe/population909500.json', true);
            xhr.onreadystatechange = function(e) {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        var data = JSON.parse(xhr.responseText);
                        window.data = data;
                        for (i=0;i<data.length;i++) {
                            globe.addData(data[i][1], {format: 'magnitude', name: data[i][0], animated: true});
                        }
                        globe.createPoints();
                        settime(globe,0)();
                        globe.animate();
                        document.body.style.backgroundImage = 'none'; // remove loading
                    }
                }
            };
            xhr.send(null);
        }

    </script>
    <script type="text/javascript">
        /*
            if(!Detector.webgl) {
              Detector.addGetWebGLMessage();
            } else {

              var container = document.getElementById('container');
              var globe = new DAT.Globe(container);

                let isMouseOverGlobe = false;

            container.addEventListener('mouseover', function() {
                isMouseOverGlobe = true;
            });

            container.addEventListener('mouseout', function() {
                isMouseOverGlobe = false;
            });

              TWEEN.start();

              var xhr = new XMLHttpRequest();
              xhr.open('GET', '/webgl-globe/globe/population909500.json', true);
              xhr.onreadystatechange = function(e) {
                if (xhr.readyState === 4) {
                  if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);
                    window.data = data;
                    for (var i=0; i<data.length; i++) {
                      globe.addData(data[i][1], {format: 'magnitude', name: data[i][0], animated: true});
                    }
                    globe.createPoints();
                    globe.animate();
                    document.body.style.backgroundImage = 'none'; // remove loading
                  }
                }
              };
              xhr.send(null);
                console.log(globe);

        function animate() {
            requestAnimationFrame(animate);

            // Rotate the globe if mouse is not over it
            if (!isMouseOverGlobe) {
                //globe.rotation.y += 0.001; // Adjust the value for desired rotation speed
            }

            TWEEN.update();
            //globe.render();
        }

            animate();
            }
 */
</script>
</x-app-layout>
