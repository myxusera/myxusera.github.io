Vue.component('v-autocompleter', {
  template: `
        <div
            class="input-box"
            :class="{ focused: shouldShowCitiesList }"
            @blur="toggleFocused(false)"
        >
            <span class="input-box-loup" @click="submit"></span>
            <span class="input-box-lupa"></span>
            <input
                v-model="googleSearch"
                ref="first"
                type="text"
                class="s-input"
                @focus="toggleFocused(true)"
                @keypress.enter="submit"
                @keyup.esc.prevent="toggleFocused(false)"
                @keyup.down="goTo(activeResult + 1)"
                @keyup.up="goTo(activeResult - 1)"
                @input="isInAutocompleter = false"       
            >
            <span class="input-box-mic"></span>
            <span class="input-box-res-test"></span>
            <ul v-show="shouldShowCitiesList" class="search-bar-results">

                <li
                        :key="index"
                        :class="{active: isInAutocompleter && activeResult === index}"
                        v-for="(city, index) in filteredCities"
                        @click="select(city)"
                >
                    <span class="input-box-loup"></span>
                    <p v-html="boldName(city.name)"></p>
                </li>
            </ul>
        </div>`,

  props: {
    options: {
      type: Array,
      required: true,
    },
    value: {
      type: String,
      required: true,
    },
  },

  data() {
    return {
      googleSearch: this.value,
      showResults: false,
      isFocused: false,
      activeResult: 0,
      isInAutocompleter: false,
      filteredCities: [],
    }
  },
  watch: {
    googleSearch() {
      if (this.isInAutocompleter) return;
      if (this.googleSearch.length === 0) return;

      this.$emit('input', this.googleSearch)

      let results = this.options.filter(city => city.name.includes(this.googleSearch))

      this.filteredCities = (results.length > 10) ? results.slice(0, 10) : results
    },
    value() {
      this.googleSearch = this.value
    }
  },
  computed: {
    shouldShowCitiesList: function () {
      return this.isFocused && this.googleSearch.length !== 0
    },
  },
  methods: {
    boldName(city) {
      return city.replaceAll(this.googleSearch, `<b>${this.googleSearch}</b>`)
    },
    goTo(resultNumber) {
      if (this.isInAutocompleter === false) {
        resultNumber = 0;
      }

      if (resultNumber < 0) {
        resultNumber = this.filteredCities.length - 1;
      } else if (resultNumber === this.filteredCities.length) {
        resultNumber = 0;
      }
      console.log(this.filteredCities)
      console.log(resultNumber)
      this.activeResult = resultNumber;
      this.isInAutocompleter = true;
      this.googleSearch = this.filteredCities[resultNumber].name;
    },
    submit() {
      this.toggleFocused(false)

      this.$emit('enter')

      if (this.showResults) return

      this.toggleResults(true)

      if (this.activeResult) {
        this.goTo(this.activeResult)
      }
    },
    select(city) {
      this.googleSearch = city.name
      this.submit()
    },
    toggleResults(value = undefined) {
      if (value === undefined) {
        return this.showResults = !this.showResults
      }
      this.showResults = value
    },
    toggleFocused(value = undefined) {
      if (value === undefined) {
        return this.isFocused = !this.isFocused
      }
      this.isFocused = value
    },
    reset() {
      this.googleSearch = ''
      this.toggleResults(false)
    }
  },
});


