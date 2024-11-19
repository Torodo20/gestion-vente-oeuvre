<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WELCOME</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&display=swap">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}

            .hero-section {
            background: url('path/to/your/image.jpg') no-repeat center center;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(65, 64, 64);
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .gallery-item {
            overflow: hidden;
        }

        .gallery-item img {
            transition: transform .3s ease-in-out;
        }

        .gallery-item img:hover {
            transform: scale(1.1);
        }
        #gallery-section {
            display: none; /* Cacher la section par défaut */
        }           


        .navbar-custom {
                background-color:rgb(97, 93, 93) ;
                background-size: cover;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .navbar-brand {
            font-size: 3rem;
            color: #4e0313;
            font-weight: bold;
            
        }
        .nav-link, .navbar-text {
            color: #5e5b5b;
        }
        .nav-link:hover, .navbar-text:hover {
            color: #5e5b5b;
        }
        .btn-custom {
            background-color: #007bff;
            color: #ffffff;
        }
        .btn-custom:hover {
            background-color: #0056b3;
            color: #ffffff;
        }

        /* Gallerie */
/* Style de base pour les cartes */
.dynamic-card {
    overflow: hidden;
    border: none;
    transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
    position: relative;
    perspective: 1000px; /* Pour l'effet 3D */
    border-radius: 15px;
}

.card-link {
    text-decoration: none;
    color: inherit;
}

.card-img-container {
    position: relative;
    overflow: hidden;
    transform-style: preserve-3d; /* Pour les transformations 3D */
    backface-visibility: hidden;
}

.card-img-top {
    transition: transform 1s ease, opacity 0.5s ease;
    transform-origin: center center; /* Pour animer l'image en 3D */
}

.dynamic-card:hover .card-img-top {
    transform: scale(1.2) rotateY(15deg); /* Effet de zoom et rotation 3D au survol */
    opacity: 0.9; /* Légère transparence pour un effet subtil */
}

/* Effet de soulèvement et ombre */
.dynamic-card:hover {
    transform: translateY(-15px) rotateX(3deg); /* Rotation légère pour l'effet 3D */
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5); /* Ombre plus profonde */
}

/* Animation flottante continue */
@keyframes floating {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

.dynamic-card {
    animation: floating 5s ease-in-out infinite; /* Animation continue de flottement */
}

/* Amélioration des textes dans les cartes */
.card-title {
    font-size: 1.5rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.card-text {
    color: #555;
    margin-bottom: 5px;
}

/* Styles spécifiques pour un effet de parallaxe */
.card-img-container:hover .card-img-top {
    transition: transform 0.5s ease-out;
    transform: translateZ(50px) scale(1.2); /* Effet de profondeur en 3D */
}

        .navbar-nav {
            flex: 1;
            justify-content: center;
            display: flex;
        }
        .navbar-nav .nav-item {
            margin: 0 10px; /* Optional: adjust spacing between items */
        }

        .custom-link:hover {
    color: #fa2b58; /* Couleur au survol */
    text-decoration: underline; /* Souligner au survol (optionnel) */
}

        .nav-link    .bi-cart {
    font-size: 1.5rem; /* Taille de l'icône */
    color: #575555; /* Couleur de l'icône */
}

.bi-cart:hover  {
    
    color: #fa2b58; /* Couleur de l'icône au survol */
}

        .search-bar {
    max-width: 600px;
    flex-grow: 2;
    margin: 6px auto;
}

.search-bar .form-control {
    border-radius: 20px;
    padding-left: 40px; /* Ajoute un espace pour l'icône */
}

.search-bar .bi-search {
    font-size: 1.2rem; /* Taille de l'icône */
    color: #f7fbff; /* Couleur de l'icône */
}

.search-bar .input-group-text {
    border-radius: 20px; /* Arrondit uniquement les coins gauches */
    padding: 0.375rem 0.75rem; /* Ajustement du padding pour l'icône */
    background-color: rgb(214, 211, 211); /* Conserve le fond transparent */
    border: none; /* Retire la bordure pour éviter le chevauchement */
}      

/* Menu style */
.navbar-nav .nav-link {
    color: #575555; /* Couleur par défaut des liens */
    font-weight: bold; /* Texte en gras */
    transition: color 0.3s ease-in-out;
}

.navbar-nav .nav-link:hover {
    color: #fa2b58; /* Couleur au survol */
    text-decoration: underline;
}

/* sous menu style */
.submenu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    width: 300px;
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    padding: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 1000;
}

.nav-item:hover .submenu,
.submenu:hover {
    display: block;
}

.google-font {
            
            font-family: 'Cabin Sketch', cursive;
            font-weight: 900; /* Utilisez 700 pour une police en gras */
        }

        /* photo style */
        .background-section {
            width: 100%;
            height: 400px; /* Ajustez la hauteur selon vos besoins */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transition: background-image 1s ease-in-out; /* Animation de transition pour un effet fluide */
        }

        /* Carroussel photo et text */
        #background-carousel {
            position: relative;
            width: 100%;
            height: 400px; /* Ajustez selon vos besoins */
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .carousel-text {
            font-family: 'Rubik Bubble', cursive;
            position: absolute;
            bottom: 20px; /* Ajustez selon vos besoins */
            left: 20px; /* Ajustez selon vos besoins */
            color: white; 
            color: white;
            padding: 10px;
            border-radius: 5px;
            font-size: 1.5rem;
        }
</style>



    </head>
    <body class="antialiased bg-gray-900 text-gray ">
        {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            </div> --}}


    
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-link ">
        <div class="container mt-1">
            <b><i><a class="navbar-brand google-font" href="#">ARTIFY HOUSE</a> </i></b>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="d-flex search-bar">
                    <div class="input-group">
                        <input class="form-control ms-3" type="search" placeholder="Rechercher..." aria-label="Search">
                    </div>
                </form>
            </div>
            <!-- Login and Register Links -->
            <div class="d-flex">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    @else
                        <b><a href="{{ route('login') }}" class="nav-link custom-link ms-4">Se connecter/</a></b>
                        @if (Route::has('register'))
                        <b> <a href="{{ route('register') }}" class="nav-link custom-link ms-1">S'inscrire</a> </b>
                        @endif
                    @endauth
                @endif
            </div>    
            {{-- cart --}}
            <a href="#" class="nav-link">
                <i class="bi bi-cart ms-5"></i>
            </a>        
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-link">
        <div class="container">
            <div class="w-20 ">
                <ul class="navbar-nav justify-content-center">
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="#" id="oeuvreLink">Oeuvre</a>
                        <div class="submenu" id="oeuvreMenu">
                            <a href="#">Contenu pour Oeuvre</a>
                        </div>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="#" id="peintureLink">Peinture</a>
                        <div class="submenu" id="peintureMenu">
                            <a href="#">
                                <ul class="submenu-list">
                                    <li><a class="submenu-link" href="{{ route('oeuvres.peinture') }}">Toutes les peintures</a></li>
                                    <li><a class="submenu-link" href=" #">Nos meilleures ventes</a></li>
                                    <li><a class="submenu-link" href="{{ route('oeuvres.peinture', ['type' => 'Street art']) }}">Peinture Street Art</a></li>
                                    <li><a class="submenu-link" href=" {{ route('oeuvres.peinture', ['type' => 'Abstraite']) }}">Peinture Abstraite</a></li>
                                    <li><a class="submenu-link" href=" {{ route('oeuvres.peinture', ['type' => 'Paysage']) }}">Peinture Paysage</a></li>
                                    <li><a class="submenu-link" href=" {{ route('oeuvres.peinture', ['type' => 'Portrait']) }}">Peinture Portrait</a></li>
                                    <li><a class="submenu-link" href=" {{ route('oeuvres.peinture', ['type' => 'Pop art']) }}">Peinture Pop Art</a></li>
                                    <li><a class="submenu-link" href=" {{ route('oeuvres.peinture', ['type' => 'A huile']) }}">Peinture à l'huile</a></li>
                                </ul>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="#" id="sculptureLink">Sculpture</a>
                        <div class="submenu" id="sculptureMenu">
                            <a href="#">Contenu pour Sculpture</a>
                        </div>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="#" id="graffitiLink">Graffiti</a>
                        <div class="submenu" id="graffitiMenu">
                            <a href="#">Contenu pour Graffiti</a>
                        </div>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="#" id="dessinLink">Dessin</a>
                        <div class="submenu" id="dessinMenu">
                            <a href="#">Contenu pour Dessin</a>
                        </div>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="#" id="photographieLink">Photographie</a>
                        <div class="submenu" id="photographieMenu">
                            <a href="#">Contenu pour Photographie</a>
                        </div>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="#" id="designLink">Design</a>
                        <div class="submenu" id="designMenu">
                            <a href="#">Contenu pour Design</a>
                        </div>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="#" id="artistesLink">Artistes</a>
                        <div class="submenu" id="artistesMenu">
                            <a href="#">Contenu pour Artistes</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>

    {{-- photo section --}}
    <section id="background-carousel" class="background-section">
        <div id="carousel-text" class="carousel-text"></div>
    </section>
    
    {{-- <section class="hero-section">
        <div class="container">
            <h1>Bienvenue à la Galerie</h1>
            <p>Découvrez des œuvres d'art uniques en ligne</p>
            <a href="#" class="btn btn-primary btn-lg">Explorer la Galerie</a>
        </div>
    </section> --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#" id="oeuvresLink">Oeuvres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="artistesLink" >Artistes</a>
            </li>
            <!-- Autres liens -->
        </ul>
    </div>
</nav>

    <!-- Galerie d'Œuvres -->
    <section class="container my-5" id="oeuvresGallery" style="display: none;">
        <div class="row">

            {{-- <!-- Première Card -->
            <div class="col-md-4">
                <div class="card h-100 dynamic-card">
                    <a href="{{route('oeuvre.details', $oeuvre->id) }}" class="card-link">
                        <div class="card-img-container">
                            <img src="{{ asset('storage/' . $oeuvre->image) }}" class="card-img-top img-fluid" alt="Artwork 1">
                        </div>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"> ${{ $oeuvre->prix }} </h5>
                        <p class="card-text">Artiste: {{ $oeuvre->user->name }}</p>
                        <p class="card-text">Dimensions: {{ $oeuvre->dimension }}</p>
                    </div>
                </div>
            </div> --}}

            <!-- Deuxième Card -->
            <div class="col-md-4">
                <div class="card h-100 dynamic-card">
                    <a href="page-artwork2.html" class="card-link">
                        <div class="card-img-container">
                            <img src="{{ asset('images/RRAL8786[1].jpg') }}" class="card-img-top img-fluid" alt="Artwork 2">
                        </div>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">$850</h5>
                        <p class="card-text">Artiste: Jane Smith</p>
                        <p class="card-text">Dimensions: 18"x24"</p>
                    </div>
                </div>
            </div>
    
            <!-- Troisième Card -->
            <div class="col-md-4">
                <div class="card h-100 dynamic-card">
                    <a href="page-artwork3.html" class="card-link">
                        <div class="card-img-container">
                            <img src="{{ asset('images/RRAL8786[1].jpg') }}" class="card-img-top img-fluid" alt="Artwork 3">
                        </div>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">$950</h5>
                        <p class="card-text">Artiste: Emily Brown</p>
                        <p class="card-text">Dimensions: 20"x30"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    

    <!-- Artistes -->
    <section class="bg-light py-5" id="artistesSection" style="display: none;">
        <div class="container text-center">
            <h2>Nos Artistes</h2>
            <div class="row">
                <div class="col-md-3">
                    <img src="path/to/artist1.jpg" class="rounded-circle" alt="Artist 1" width="150" height="150">
                    <h4>Artiste 1</h4>
                </div>
                <div class="col-md-3">
                    <img src="path/to/artist2.jpg" class="rounded-circle" alt="Artist 2" width="150" height="150">
                    <h4>Artiste 2</h4>
                </div>
                <div class="col-md-3">
                    <img src="path/to/artist3.jpg" class="rounded-circle" alt="Artist 3" width="150" height="150">
                    <h4>Artiste 3</h4>
                </div>
                <div class="col-md-3">
                    <img src="path/to/artist4.jpg" class="rounded-circle" alt="Artist 4" width="150" height="150">
                    <h4>Artiste 4</h4>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Inclure GSAP via CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>

    <script>
        $(document).ready(function() {
    $('.nav-item').hover(
        function() {
            $(this).find('.submenu').stop(true, true).slideDown(200);
        },
        function() {
            $(this).find('.submenu').stop(true, true).slideUp(200);
        }
    );

    $('.submenu').hover(
        function() {
            $(this).stop(true, true).show(); // Keep the submenu open on hover
        },
        function() {
            $(this).slideUp(200); // Close the submenu when leaving it
        }
    );
});

// photo scrit
document.addEventListener('DOMContentLoaded',function(){
            const images = [
                { src: '{{ asset('images/RRAL8786[1].jpg') }}', text: 'Artify House, votre gallerie d\'art en ligne' },
                { src: '{{ asset('images/Galerie-d’art-1.jpg') }}', text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A ad molestiae eaque voluptatem asperiores sit quibusdam, impedit ullam maxime ipsa totam excepturi quas alias, perspiciatis temporibus odit atque eos modi.' }
            ];

            const section = document.getElementById('background-carousel');
            const textElement = document.getElementById('carousel-text');
            let currentIndex = 0;

            function changeBackgroundImage() {
                const { src, text } = images[currentIndex];
                section.style.backgroundImage = `url('${src}')`;
                currentIndex = (currentIndex + 1) % images.length;
                textElement.textContent = text;
                setTimeout(changeBackgroundImage, 5000);
            }

            // Initial background image
            changeBackgroundImage();

            // Gallerie 
            const oeuvresLink = document.getElementById('oeuvresLink');
            const gallerySection = document.getElementById('gallery-section');
            const artistesLink = document.getElementById('artistesLink');
            const artistesSection = document.getElementById('artistesSection'); 
            
        oeuvresLink.addEventListener('click', function (e) {
        e.preventDefault();
        if (oeuvresGallery.style.display === 'none' || oeuvresGallery.style.display === '') {
            oeuvresGallery.style.display = 'block';
            oeuvresLink.classList.add('active');
            artistesSection.style.display = 'none'; // Masquer la section artistes si elle est visible
            artistesLink.classList.remove('active');
        } else {
            oeuvresGallery.style.display = 'none';
            oeuvresLink.classList.remove('active');
        }
        });
        artistesLink.addEventListener('click', function (e) {
        e.preventDefault();
        if (artistesSection.style.display === 'none' || artistesSection.style.display === '') {
            artistesSection.style.display = 'block';
            artistesLink.classList.add('active');
            oeuvresGallery.style.display = 'none'; // Masquer la galerie d'œuvres si elle est visible
            oeuvresLink.classList.remove('active');
        } else {
            artistesSection.style.display = 'none';
            artistesLink.classList.remove('active');
        }
    });

    gsap.from('.dynamic-card', {
                    opacity: 0,
                    y: 50,
                    duration: 1,
                    stagger: 0.2,
                    scrollTrigger: {
                    trigger: '.dynamic-card',
                    start: 'top 80%',
                    toggleActions: 'play none none reverse'
        }
    });
});

    </script>

    </body>
</html>

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif