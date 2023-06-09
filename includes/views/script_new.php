<!-- cdn js links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<!-- project js init -->
<link rel="stylesheet" href="https://unpkg.com/toastmejs@latest/dist/css/toastme.css">
<script src="https://unpkg.com/toastmejs@latest/dist/js/toastme.min.js"></script>
<script>
    //Customize your Notification  
    const config = {
        timeout: 5000,
        positionY: "top", // top or bottom
        positionX: "right", // right left, center
        distanceY: 30, // Integer value
        distanceX: 30, // Integer value
        zIndex: 100, // Integer value
        theme: "ligh", // default, ligh or  dark (leave empty for "default" theme)
        duplicates: true // true or false - by default it's false
    };
    //Create a new Toastmejs class instance
    window = toast = new Toastme(config);

    const domain = "<?= home_path() ?>";
</script>

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcYXlUHyWIuVsqM4an4oCYgd8FzNAEFpY&v=3.exp&callback=Function.prototype&libraries=places" defer></script>
<script  src="<?= get_js("Page_state_new.min.js") ?>" defer></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/61cd6c5dc82c976b71c415f2/1fo56ukbg';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<!-- google team manger link here -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script  src="https://www.googletagmanager.com/gtag/js?id=UA-230557003-1" defer></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('config', 'UA-230557003-1');
</script>
<script>
const images = document.getElementsByTagName('img');

// Loop through each image element and add the "lazy-loading" class
for (let i = 0; i < images.length; i++) {
  images[i].setAttribute('loading','lazy');
}
</script>
