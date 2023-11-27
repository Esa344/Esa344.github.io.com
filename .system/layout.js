// loadContent.js
function loadContent(page) {
    // Gunakan fetch untuk memuat konten dari file eksternal
    fetch(page)
        .then(response => response.text())
        .then(data => {
            // Tempatkan konten di dalam elemen dengan id "main-content"
            document.getElementById('main-content').innerHTML = data;
        })
        .catch(error => console.error('Error fetching content:', error));
}
    fetch('/page/home/index.html')
        .then(response => response.text())
        .then(data => {
            // Tempatkan konten di dalam elemen dengan id "main-content"
            document.getElementById('main-content').innerHTML = data;
        })