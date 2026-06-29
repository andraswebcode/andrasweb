@extends('layout')

@section('content')
    <!-- Hero Section Start -->
    <section class="py-44 relative bg-gradient-to-b from-red-500/5 to-amber-500/5 border-b border-line">
        <div class="container">
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-12 items-center">
                <div>
                    <div class="eyebrow">Tövisháti András vagyok</div>
                    <h1>Szabadúszó <span class="highlight">webfejlesztő</span></h1>
                    <p>
                        7 éve foglalkozom WordPress oldalak, egyedi WordPress bővítmények és SaaS appok fejlesztésével.
                        <br>
                        Dolgozzunk együtt :-)
                    </p>
                    <div class="btn-group">
                        <a href="#contact" class="btn-primary">
                            Írj nekem
                            <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                        <a href="#about" class="btn-secondary">Bővebben rólam</a>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('images/profile.png') }}" class="lg:ms-auto lg:me-0 mx-auto z-10 relative">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- about Section Start -->
    <section id="about" class="py-25 border-b border-line">
        <div class="container">
            <div class="grid sm:grid-cols-2 grid-cols-1 gap-12">
                <div>
                    <div class="sticky">
                        <p class="eyebrow">Rólam</p>
                        <h2>
                            7 éve csinálom, <br><span class="highlight">mert szeretem.</span>
                        </h2>
                        <div class="flex flex-wrap gap-2">
                            <span class="badge badge-highlighted">Laravel</span>
                            <span class="badge badge-highlighted">Vue.js</span>
                            <span class="badge badge-highlighted">React.js</span>
                            <span class="badge badge-highlighted">Angular</span>
                            <span class="badge badge-highlighted">PHP</span>
                            <span class="badge badge-highlighted">WordPress</span>
                            <span class="badge badge-highlighted">Elementor</span>
                            <span class="badge badge-highlighted">Divi</span>
                            <span class="badge badge-outline">Alpine.js</span>
                            <span class="badge badge-outline">Inertia</span>
                            <span class="badge badge-outline">MySQL</span>
                            <span class="badge badge-outline">REST API</span>
                            <span class="badge badge-outline">Git</span>
                            <span class="badge badge-outline">Docker</span>
                            <span class="badge badge-outline">Nuxt</span>
                            <span class="badge badge-outline">Vite</span>
                            <span class="badge badge-outline">Tailwind.css</span>
                            <span class="badge badge-outline">Linux</span>
                            <span class="badge badge-outline">CI/CD</span>
                            <span class="badge badge-outline">OpenAI</span>
                        </div>
                    </div>
                </div>

                <div>
                    <p>
                        7 évvel ezelőtt a zenekaromnak szüksége volt egy weboldalra. Arra gondoltam, hogy <strong>informatikai szakos voltam a gimiben</strong>, ezt talán én is meg tudom csinálni. Ekkor ismerkedtem meg a <strong>WordPress</strong>-szel.
                    </p>

                    <p>
                        Eleinte csak hobbi szinten fejlesztettem plugineket, majd <strong>az <a href="https://codecanyon.net/user/andrasweb">Envato marketplace-en</a> értékesítettem, ahol 5 csillagos értékeléseket kaptam.</strong>
                    </p>

                    <p>
                        Néhány évre rá elkezdtem megtanulni különböző frameworköket is: Laravel-t, React-ot, Vue.js-t, Angular-t. Majd elkészítettem első komolyabb SaaS alkalmazásomat a <a href="https://pixkreator.com/" target="_blank">PixKreator</a>-t.
                    </p>

                    <p>
                        <strong>3 éve dolgozom szabadúszóként.</strong> Munkáim jelentős részét white label együttműködésben végzem IT-, marketing- és kreatív ügynökségek számára, emellett készítettem már weboldalakat, teljes platformot és CRM-rendszert is a nulláról.
                    </p>
                    
                    <p>
                        Önállóan, megbízhatóan és felelősségteljesen dolgozom. Fontos számomra a folyamatos fejlődés és a hosszú távú együttműködés, ezért gyors kommunikációra, stabil támogatásra és tartós partneri kapcsolatokra törekszem.
                    </p>

                    <div class="card">
                        <div class="eyebrow">AI szemlélet</div>
                        <p>
                            Még az AI elterjedése előtt tanultam meg programozni, ezért először a fejlesztés alapjait sajátítottam el. Ennek köszönhetően az AI-t nem helyettesítőként, hanem hatékony eszközként használom: megértem a generált kódot, ellenőrzöm, és csak olyan megoldást adok át, amiért felelősséget tudok vállalni.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about Section End -->

    <!-- services Section Start -->
    <section id="services" class="py-25 border-b border-line">
        <div class="container">
            <div class="pb-12">
                <p class="eyebrow">Miben segíthetek</p>
                <h2>Hol tudok <span class="highlight">bekapcsolódni</span></h2>
                <p>Fejlesztőként új és meglévő projektekbe is be tudok kapcsolódni, white label együttműködésben, óradíjas alapon.</p>
            </div>

            <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
                    <div class="card">
                        <h3>Fejlesztői együttműködés</h3>
                        <p>Sok a nyitott feladat vagy csúsznak a fejlesztések? Segítek tehermentesíteni a csapatot.</p>
                    </div>

                    <div class="card">
                        <h3>WordPress weboldalak</h3>
                        <p>Landing oldalak és WordPress weboldalak készítése Elementor, vagy Divi használatával.</p>
                    </div>

                    <div class="card">
                        <h3>Karbantartás, hibajavítás</h3>
                        <p>Meglévő weboldalak és alkalmazások karbantartása, frissítése és továbbfejlesztése.</p>
                    </div>
            </div>
        </div>
    </section>
    <!-- services Section End -->

    <!-- hobby Section Start -->
    <section id="hobby" class="py-25 border-b border-line">
        <div class="container">
            <div class="pb-12">
                <p class="eyebrow">Saját projektek</p>
                <h2>Amit <span class="highlight">hobbiból</span> csináltam</h2>
                <p>Nem minden fejlesztés ügyfélmunka. Ezeket magamnak, kíváncsiságból építettem.</p>
            </div>

            <div class="grid sm:grid-cols-2 grid-cols-1 gap-6">
                <div class="card">
                    <p class="eyebrow">SaaS / webapp</p>
                    <h3>PixKreator</h3>
                    <p>PixKreator egy Vue.js és Vuetify alapú egyoldalas alkalmazás (SPA), amely gyors és reszponzív felhasználói élményt biztosít. A backend Laravelre épül, MySQL adatbázist használ, míg a megjelenést Tailwind CSS alapú dizájn támogatja. A frontend és a backend REST API-n keresztül kommunikál, így a projekt jól szemlélteti a frontend- és backend-fejlesztésben szerzett tapasztalataimat, valamint a modern webalkalmazások teljes körű fejlesztésében való jártasságomat.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="badge badge-outline text-xs!">Laravel</span>
                        <span class="badge badge-outline text-xs!">MySQL</span>
                        <span class="badge badge-outline text-xs!">Vue.js</span>
                    </div>
                    <div class="grow-1"></div>
                    <div>
                        <a href="https://pixkreator.com/" target="_blank" class="btn-secondary">Nézd meg</a>
                    </div>
                </div>
                <div class="card">
                    <p class="eyebrow">SaaS / AI</p>
                    <h3>XRobi</h3>
                    <p>Az XRobi egy AI-alapú kurzuskészítő platform Laravel és Vue.js technológiákkal. Egy strukturált interjú során feltérképezi az oktató tudását, majd az OpenAI API segítségével automatikusan létrehozza a kurzusvázlatot, a modulokat és a leckéket. A rendszer megőrzi a beszélgetési kontextust, támogatja a tartalmak szerkesztését, és hatékonyan kezeli a több lépéses AI-folyamatokat. A Vue.js frontend és a skálázható Laravel backend együtt biztosítja az AI-alapú oktatási tartalomkészítés gyakorlati megvalósítását.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="badge badge-outline text-xs!">Laravel</span>
                        <span class="badge badge-outline text-xs!">MySQL</span>
                        <span class="badge badge-outline text-xs!">Vue.js</span>
                        <span class="badge badge-outline text-xs!">OpenAI API</span>
                    </div>
                    <div class="grow-1"></div>
                    <div>
                        <a href="https://xrobi.hu/" target="_blank" class="btn-secondary">Nézd meg</a>
                    </div>
                </div>
                <div class="card">
                    <p class="eyebrow">Nyílt forráskódú</p>
                    <h3>GrafikJS</h3>
                    <p>GrafikJS egy interaktív JavaScript könyvtár, amelyet skálázható vektorgrafikák (SVG) létrehozására fejlesztettem webalkalmazásokhoz. Kiválóan használható React, Angular vagy Vue.js alapú projektekben, és egy rugalmas, könnyen használható API-t biztosít dinamikus grafikák készítéséhez. Kétrétegű architektúrájának köszönhetően külön kezeli a megjelenítést és az interakciókat, emellett támogatja az animációkat és az összetett, egymásba ágyazott grafikai elemek kezelését. A projekt jól tükrözi a JavaScript, az SVG-technológiák és a frontend architektúrák területén szerzett tapasztalataimat.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="badge badge-outline text-xs!">JavaScript</span>
                        <span class="badge badge-outline text-xs!">TypeScript</span>
                        <span class="badge badge-outline text-xs!">Vue.js</span>
                        <span class="badge badge-outline text-xs!">React</span>
                        <span class="badge badge-outline text-xs!">Angular</span>
                        <span class="badge badge-outline text-xs!">Svelte</span>
                    </div>
                    <div class="grow-1"></div>
                    <div>
                        <a href="https://github.com/andraswebcode/grafikjs" target="_blank" class="btn-secondary">Nézd meg</a>
                    </div>
                </div>
                <div class="card">
                    <p class="eyebrow">WordPress bővítmény</p>
                    <h3>PixMagix</h3>
                    <p>PixMagix egy ingyenes, a WordPress.org-on elérhető WordPress-bővítmény, amely lehetővé teszi a médiatárban található képek szerkesztését közvetlenül a WordPress felületén. A felhasználói felület React és Redux technológiákkal készült, míg a háttérben a WordPress REST API biztosítja a zökkenőmentes integrációt. A projekt jól bemutatja, hogy modern frontend technológiák alkalmazásával képes vagyok összetett WordPress-bővítményeket fejleszteni a tervezéstől a megvalósításig.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="badge badge-outline text-xs!">WordPress</span>
                        <span class="badge badge-outline text-xs!">PHP</span>
                        <span class="badge badge-outline text-xs!">React</span>
                        <span class="badge badge-outline text-xs!">Redux</span>
                    </div>
                    <div class="grow-1"></div>
                    <div>
                        <a href="https://wordpress.org/plugins/pixmagix/" target="_blank" class="btn-secondary">Nézd meg</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hobby Section End -->

    <!-- testimonials Section Start -->
    <section id="testimonials" class="py-25 border-b border-line">
        <div class="container">
            <div class="pb-12">
                <p class="eyebrow">Vélemények</p>
                <h2>Mit mondanak<span class="highlight"> Mások </span>a munkáimról</h2>
                <p>Az évek során összegyűlt pár vélemény innen-onnan.</p>
            </div>

            <div class="grid sm:grid-cols-2 grid-cols-1 gap-6">
                <div class="card">
                    <p class="italic">
                        „Nagyon jó választás Andris, mindenben nagyon segítőkész, válaszol,
                        ötletel és a kivitelezése is hibátlan!”
                    </p>
                    <div class="grow-1"></div>
                    <div class="mt-10 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full border border-line bg-primary-dark text-sm font-medium text-primary">
                                M
                            </div>

                            <div>
                                <span class="font-medium text-white">
                                    Murdock
                                </span>
                            </div>
                        </div>

                        <span class="badge badge-outline">
                            Az XProjekten
                        </span>
                    </div>
                </div>
                <div class="card">
                    <p class="italic">
                        „Andrással készíttettük el a honlapunkat, és maximálisan elégedettek vagyunk a munkájával. Gyors, precíz és rendkívül profi hozzáállást tanúsított a teljes folyamat során. Csak ajánlani tudjuk mindenkinek, aki megbízható szakembert keres weboldalkészítéshez."
                    </p>
                    <div class="grow-1"></div>
                    <div class="mt-10 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full border border-line bg-primary-dark text-sm font-medium text-primary">
                                F
                            </div>

                            <div>
                                <span class="font-medium text-white">
                                    FaceTill Ltd XProjekt
                                </span>
                            </div>
                        </div>

                        <span class="badge badge-outline">
                            Az XProjekten
                        </span>
                    </div>
                </div>
                <div class="card">
                    <p class="italic">
                        „Great product, quality code and generous customer service. Waiting to see more surprises in future updates. Thank you very much!"
                    </p>
                    <div class="grow-1"></div>
                    <div class="mt-10 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full border border-line bg-primary-dark text-sm font-medium text-primary">
                                I
                            </div>

                            <div>
                                <span class="font-medium text-white">
                                    Instarep
                                </span>
                            </div>
                        </div>

                        <span class="badge badge-outline">
                            A CodeCanyon-on
                        </span>
                    </div>
                </div>
                <div class="card">
                    <p class="italic">
                        „I’ve stumbled upon a rare gem of a plugin for WordPress and WooCommerce. This nifty tool lets you edit images directly within your media, posts, and products. The best part? It’s not just for basic tweaks—you can dive in deep and make some seriously advanced modifications right from your site without downloading or uploading anything. Imagine not having to jump between different software to get that perfect look for your product images. It’s like having a mini Photoshop built right into your site! This plugin is an absolute game-changer if you’re looking to streamline your workflow and keep everything neatly within WordPress."
                    </p>
                    <div class="grow-1"></div>
                    <div class="mt-10 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full border border-line bg-primary-dark text-sm font-medium text-primary">
                                M
                            </div>

                            <div>
                                <span class="font-medium text-white">
                                    mysmallstore
                                </span>
                            </div>
                        </div>

                        <span class="badge badge-outline">
                            A WordPress.org-on
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials Section End -->

    <!-- balugasztro Section Start -->
    <section class="py-25 border-b border-line">
        <div class="container">
            <div class="pb-12">
                <p class="eyebrow">Referencia</p>
                <h2>Ismered a <span class="highlight">Balugasztrot?</span></h2>
                <p>A fiatal YouTuber párt, aki 2024-ben egy hátizsákkal körbeutazta a világot. Az ő <a href="https://balugasztro.hu/" target="_blank">weboldalukat</a> is én készítettem.</p>
            </div>
            <div>
                <a href="https://balugasztro.hu/" target="_blank">
                    <img src="{{ asset('images/balugasztro.jpg') }}" alt="" class="w-full">
                </a>
            </div>
        </div>
    </section>
    <!-- balugasztro Section End -->

    <!-- xprojekt Section Start -->
    <section id="xprojekt" class="py-25 border-b border-line">
        <div class="container">
            <div class="pb-12">
                <p class="eyebrow">Szolgáltatások</p>
                <h2>Szolgáltatásaim az<span class="highlight"> XProjekten</span></h2>
                <p>Ha csak projekt alapú együttműködésre van szükséged és biztosra akarsz menni, akkor rendelj tőlem az XProjekten.</p>
            </div>

            <div class="grid sm:grid-cols-2 grid-cols-1 gap-6">
                <div class="card">
                    <div class="mb-4">
                        <img src="{{ asset('images/webshop.webp') }}" alt="" class="w-full">
                    </div>
                    <h3>Egyedi, Gyors és Skálázható Webáruház Fejlesztés</h3>
                    <p>Egy webáruház akkor működik igazán hatékonyan, ha nem neked kell alkalmazkodnod a rendszerhez, hanem a rendszer igazodik a vállalkozásod működéséhez. A sablon alapú megoldások, mint a WooCommerce, sokszor már a kezdetektől kompromisszumokra kényszerítenek: külső bővítményekre támaszkodnak, nehezebben testreszabhatók, és a forgalom növekedésével egyre instabilabbá, lassabbá válhatnak.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="badge badge-outline text-xs!">Laravel</span>
                        <span class="badge badge-outline text-xs!">MySQL</span>
                        <span class="badge badge-outline text-xs!">Vue.js</span>
                        <span class="badge badge-outline text-xs!">Inertia</span>
                        <span class="badge badge-outline text-xs!">TypeScript</span>
                    </div>
                    <div class="flex-1"></div>
                    <div class="mt-2">
                        <a href="https://xprojekt.hu/szolgaltatas/egyedi-gyors-es-skalazhato-webaruhaz-fejlesztes" target="_blank" class="btn-secondary">
                            Nézd meg
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="mb-4">
                        <img src="{{ asset('images/crm.webp') }}" alt="" class="w-full">
                    </div>
                    <h3>Egyedi skálázható CRM rendszer</h3>
                    <p>Egy CRM rendszer célja, hogy egyszerűsítse a működésedet, átláthatóbbá tegye az ügyfél- és partnerkezelést, valamint csökkentse a manuális adminisztrációt. A sablonos, dobozos rendszerek gyakran nem fedik le pontosan az üzleti igényeket, vagy túl bonyolultak, felesleges funkciókkal terheltek. Egy egyedi CRM ezzel szemben úgy épül fel, ahogy a vállalkozásod működik, így nem kell kompromisszumokat kötni vagy a folyamataidat egy kész rendszerhez igazítani.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="badge badge-outline text-xs!">Laravel</span>
                        <span class="badge badge-outline text-xs!">MySQL</span>
                        <span class="badge badge-outline text-xs!">Vue.js</span>
                        <span class="badge badge-outline text-xs!">Inertia</span>
                        <span class="badge badge-outline text-xs!">TypeScript</span>
                    </div>
                    <div class="flex-1"></div>
                    <div class="mt-2">
                        <a href="https://xprojekt.hu/szolgaltatas/egyedi-skalazhato-crm-rendszer" target="_blank" class="btn-secondary">
                            Nézd meg
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="mb-4">
                        <img src="{{ asset('images/wordpress.webp') }}" alt="" class="w-full">
                    </div>
                    <h3>WordPress Weboldal Készítés</h3>
                    <p>Ha egy gyors, átlátható és könnyen kezelhető weboldalra van szükséged, segítek a teljes beállításban, hogy gördülékenyen indulhass el az online térben.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="badge badge-outline text-xs!">WordPress</span>
                        <span class="badge badge-outline text-xs!">PHP</span>
                        <span class="badge badge-outline text-xs!">JavaScript</span>
                        <span class="badge badge-outline text-xs!">CSS</span>
                    </div>
                    <div class="flex-1"></div>
                    <div class="mt-2">
                        <a href="https://xprojekt.hu/szolgaltatas/wordpress-weboldal-keszites-2" target="_blank" class="btn-secondary">
                            Nézd meg
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="mb-4">
                        <img src="{{ asset('images/webshop.webp') }}" alt="" class="w-full">
                    </div>
                    <h3>WooCommerce Webáruház Készítés</h3>
                    <p>Ha szeretnél egy gyors, megbízható és könnyen kezelhető webáruházat, segítek a teljes beállításban, hogy gördülékenyen indulhass el az online értékesítésben.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="badge badge-outline text-xs!">WordPress</span>
                        <span class="badge badge-outline text-xs!">PHP</span>
                        <span class="badge badge-outline text-xs!">JavaScript</span>
                        <span class="badge badge-outline text-xs!">CSS</span>
                    </div>
                    <div class="flex-1"></div>
                    <div class="mt-2">
                        <a href="https://xprojekt.hu/szolgaltatas/woocommerce-webaruhaz-keszites" target="_blank" class="btn-secondary">
                            Nézd meg
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- xprojekt Section End -->

    <!-- balugasztro Section Start -->
    <section class="py-25 border-b border-line">
        <div class="container">
            <div class="pb-12">
                <p class="eyebrow">Referencia</p>
                <h2>Az <span class="highlight">XProjekt platformnak</span> a fejlesztésében is részt veszek!</h2>
                <p>Én alakítottam ki a rendszer alapvető struktúráját, architektúráját és designját, valamint aktívan részt veszek a platform fejlesztésében.</p>
            </div>
            <div>
                <a href="https://xprojekt.hu/" target="_blank" class="btn-secondary">Nézd meg</a>
            </div>
        </div>
    </section>
    <!-- balugasztro Section End -->

    <!-- contact Section Start -->
    <section id="contact" class="py-25 border-b border-line">
        <div class="container">
            <div class="grid sm:grid-cols-2 grid-cols-1 gap-12">
                <div>
                    <p class="eyebrow">Kapcsolat</p>
					<h2>
						Dolgozzunk <span class="highlight">együtt.</span>
					</h2>
                    <p>
                        Ha kapacitáshiányod van, kiszerveznél egy projektet, vagy csak felmérjük hogy tudnék-e segíteni – írj nyugodtan. Általában 24 órán belül válaszolok.
                    </p>
                    <p>
                        <a href="mailto:info@andrasweb.com" class="btn-secondary w-full">
                            <i class="iconify fa6-regular--envelope size-7"></i>
                            info@andrasweb.com
                        </a>
                    </p>
                    <p>
                        <a href="https://www.linkedin.com/in/andras-tovishati/" target="_blank" rel="noopener" class="btn-secondary w-full">
                            <i class="iconify fa6-brands--linkedin-in size-5"></i>
                            LinkedIn profil
                        </a>
                    </p>
                </div>

                <div>
                    @if(session('contact_success'))
                        <div class="success-message">
                            Köszönöm az üzenetet! Hamarosan felveszem veled a kapcsolatot.
                        </div>
                    @else
                        <form method="POST" action="{{ route('contact.send') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Neved / Céged</label>
                                <input type="text" id="name" name="name" placeholder="" required>
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail cím</label>
                                <input type="email" id="email" name="email" placeholder="" required>
                            </div>

                            <div class="form-group">
                                <label for="message">Miben segíthetek?</label>
                                <textarea id="message" name="message" placeholder="Írj nekem valamit :)" required></textarea>
                            </div>

                            <button type="submit" class="btn-primary">
                                Üzenet küldése

                                <svg width="15" height="15" viewBox="0 0 16 16" fill="none">
                                    <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- contact Section End -->
@endsection
