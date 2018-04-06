<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 100px;">

    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 600px; height: 100px;">
        <div>
            <a href="/">
                <img u="image" src="./images/banner/{{ config('app.brand')}}_01.jpg" />
            </a>
        </div>
        <div>
            <a href="/">
                <img u="image" src="./images/banner/{{config('app.brand')}}_02.jpg" />
            </a>
        </div>
        <div>
            <a href="/">
                <img u="image" src="./images/banner/{{config('app.brand')}}_03.jpg" />
            </a>
        </div>
</div>
    <!-- Trigger -->
    <script>jssor_slider1_init('slider1_container');</script>
</div>
