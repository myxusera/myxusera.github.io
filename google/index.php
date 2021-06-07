<!DOCTYPE html>
<head>
    <title>Google</title>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/css/autocompleter.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js" integrity="sha512-JZSo0h5TONFYmyLMqp8k4oPhuo6yNk9mHM+FY50aBjpypfofqtEWsAgRDQm94ImLCzSaHeqNvYuD9382CEn2zw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="autocompleter.js"></script>
</head>
<body>
<div id="app" class="body" :class="[ showResults ? 'results' : '' ]">
    <header class="header">
        <nav class="nav">
            <div class="nav-search">
                <img class="nav-search-logo" src="assets/img/google.png" @click="reset">
                <v-autocompleter v-model="googleSearch" :options="results" v-bind:options="results" @enter="toggleResults" @input="inputFunc($event)"
                                 @keypress.enter="submit"></v-autocompleter>             
            </div>
            <ul class="nav-right">
                <li>
                    <a class="onlymain" href="#">Gmail</a>
                </li>
                <li>
                    <a class="onlymain" href="#">Grafika</a>
                </li>
                <li>
                    <img class="test" src="assets/img/bars.png">
                </li>
                <li>
                    <button>Zaloguj się</button>
                </li>
            </ul>
        </nav>
        <div class="main">
            <img
                    src="assets/img/google.png"
                    class="logo"
                    @click="reset"
            >
            <div class="search-bar">
                <v-autocompleter v-model="googleSearch" :options="results" @input="googleSearch = $event" @enter="toggleResults"
                                 @keypress.enter="submit"></v-autocompleter>
                <input type="submit" class="s-button" value="Szukaj w Google" @keyup.enter="submit">
                <input type="submit" class="s-button" value="Szczęśliwy traf">
            </div>
        </div>
        <div class="container">
            <nav class="search-results-header-nav">
                <ul>
                    <li>
                        <a href="#">Wszystko</a>
                    </li>
                    <li>
                        <a href="#">Wiadomości</a>
                    </li>
                    <li>
                        <a href="#">Grafika</a>
                    </li>
                    <li>
                        <a href="#">Wideo</a>
                    </li>
                    <li>
                        <a href="#">Mapy</a>
                    </li>
                    <li>
                        <a href="#">Więcej</a>
                    </li>
                    <li>
                        <a href="#">Ustawienia</a>
                    </li>
                    <li>
                        <a href="#">Narzędzia</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <span class="search-results-text">Około 420 000 wyników (4,20 s)</span>
        <!-- uzunieta sekcja miast-->
        <article class="search-results-main">
            <div class="search-results-main-item">
                <p>www.losowastrona.pl > losowa > strona</p>
                <a href="#">Losowy tytuł strony</a>
                <span>Lorem ipsum dolor sit amet ligula. Aliquam erat eget sapien. Praesent pretium. Vivamus consectetuer condimentum enim quis ante.
						</span>
            </div>
        </article>
        <article class="search-results-main">
            <div class="search-results-main-item">
                <p>www.losowastrona.pl > losowa > strona</p>
                <a href="#">Losowy tytuł strony</a>
                <span>Lorem ipsum dolor sit amet ligula. Aliquam erat eget sapien. Praesent pretium. Vivamus consectetuer condimentum enim quis ante.
						</span>
            </div>
        </article>
        <article class="search-results-main">
            <div class="search-results-main-item">
                <p>www.losowastrona.pl > losowa > strona</p>
                <a href="#">Losowy tytuł strony</a>
                <span>Lorem ipsum dolor sit amet ligula. Aliquam erat eget sapien. Praesent pretium. Vivamus consectetuer condimentum enim quis ante.
						</span>
            </div>
        </article>
        <article class="search-results-main">
            <div class="search-results-main-item">
                <p>www.losowastrona.pl > losowa > strona</p>
                <a href="#">Losowy tytuł strony</a>
                <span>Lorem ipsum dolor sit amet ligula. Aliquam erat eget sapien. Praesent pretium. Vivamus consectetuer condimentum enim quis ante.
						</span>
            </div>
        </article>
        <article class="search-results-main">
            <div class="search-results-main-item">
                <p>www.losowastrona.pl > losowa > strona</p>
                <a href="#">Losowy tytuł strony</a>
                <span>Lorem ipsum dolor sit amet ligula. Aliquam erat eget sapien. Praesent pretium. Vivamus consectetuer condimentum enim quis ante.
						</span>
            </div>
        </article>
        <article class="search-results-main">
            <div class="search-results-main-item">
                <p>www.losowastrona.pl > losowa > strona</p>
                <a href="#">Losowy tytuł strony</a>
                <span>Lorem ipsum dolor sit amet ligula. Aliquam erat eget sapien. Praesent pretium. Vivamus consectetuer condimentum enim quis ante.
						</span>
            </div>
        </article>
    </div>
    <footer>
        <h4>Polska</h4>
        <div class="links">
            <div class="links-left">
                <a href="#">O nas</a>
                <a href="#">Reklamuj się</a>
                <a href="#">Dla firm</a>
                <a href="#">Jak działa wyszukiwarka</a>
            </div>
            <div class="links-coal">
                <a href="#">Neutralność węglowa od 2007 roku</a>
            </div>
            <div class="links-right">
                <a href="#">Prywatność</a>
                <a href="#">Warunki</a>
                <a href="#">Ustawienia</a>
            </div>
            <div class="links-left-results">
                <a href="#">Pomoc</a>
                <a href="#">Prześlij opinię</a>
                <a href="#">Prywatność</a>
                <a href="#">Warunki</a>
            </div>
        </div>
    </footer>

</div>
</body>
<script>
  var app = new Vue({
    el: '#app',
    data: {
      googleSearch: '',
      cities: window.cities,
      showResults: false,
      isFocused: false,
      activeResult: 0,
      isInAutocompleter: false,
      filteredCities: [],
      results: []
    },
    methods: {
      toggleFocused(value = undefined) {
        if (value === undefined) {
          return this.isFocused = !this.isFocused
        }
        this.isFocused = value
      },
      reset() {
        this.googleSearch = ''
        this.toggleResults(false)
      },
      toggleResults() {
        this.showResults = true;
      }
    },
    findResultsDebounced : Cowboy.debounce(100, function findResultsDebounced() {
        console.log('Fetch: ', this.googleSearch);
		console.log(`http://localhost:8080/search?name=` + this.googleSearch);
        fetch(`http://localhost:8080/search?name=` + this.googleSearch)
            .then(res => res.json())
            .then(data => {
            console.log('Data: ', data);
            this.results = data;
            this.filteredCities = data;
            app.$forceUpdate();
        });
    }),
    inputFunc(ev){
        this.googleSearch=ev;
        this.findResultsDebounced();
    }

  });
</script>
</html>
