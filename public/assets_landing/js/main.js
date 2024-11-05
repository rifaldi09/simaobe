// mengambil id dari span yang ada di class tabMatkul
let tabMatkulId = document.querySelectorAll(".tabMatkul span");

// mengambil div dari section <main>
const matkulSections = document.querySelectorAll("main > div");

// looping tabMatkulId dengan foreach karena berbentuk array
// arraynya berisi id dari span yang ada di <div class="tabMatkul"><span id=""></span></div>
tabMatkulId.forEach(span => {
    span.addEventListener("click", function() {
        const spanId = this.id;
        
        // looping matkulSections dengan foreach karena berbentuk array
        // arraynya berisi id dari div yang ada di <main><div id=""></div></main>
        matkulSections.forEach(div => {
            if(div.id == spanId) {
                // menghapus class display none
                // jika didalam div di section <main> terdapat id yang sama dengan yang dengan yang di pilih di span 
                div.classList.remove("d-none");
            } else {
                // jika tidak sama, maka akan ditambahkan class display none
                div.classList.add("d-none");
            }
        })

        // menghapus semua class yang ada pada span di tab sebelum ditambahkan ke tab yang dipilih
        tabMatkulId.forEach(span => span.classList.remove("text-outline-yellow"));
        // menambahkan class pada span yang sedang dipilih
        this.classList.add("text-outline-yellow");
    })
});